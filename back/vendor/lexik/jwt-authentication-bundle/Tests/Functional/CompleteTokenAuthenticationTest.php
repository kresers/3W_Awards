<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Functional;

use Lexik\Bundle\JWTAuthenticationBundle\Security\User\JWTUser;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\User;

/**
 * Base class for classes testing the different cases of authentication via
 * JSON Web Token.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class CompleteTokenAuthenticationTest extends TestCase
{
    public function testAccessSecuredRoute()
    {
        static::$client = static::createAuthenticatedClient();
        static::accessSecuredRoute();

        $response = static::$client->getResponse();
        $content  = json_decode($response->getContent(), true);

        $this->assertSuccessful($response);

        if ('lexik_jwt' === static::$kernel->getUserProvider()) {
            $this->assertSame(JWTUser::class, $content['class']);
        } else {
            $this->assertSame(User::class, $content['class']);
        }

        return $content;
    }

    public function testAccessSecuredRouteWithoutToken()
    {
        static::$client = static::createClient();
        static::accessSecuredRoute();

        $response = static::$client->getResponse();

        $this->assertFailure($response);

        return json_decode($response->getContent(), true);
    }

    public function testAccessSecuredRouteWithInvalidToken($token = 'dummy')
    {
        static::$client = static::createClient();
        static::$client->request('GET', '/api/secured', [], [], ['HTTP_AUTHORIZATION' => "Bearer $token"]);

        $response = static::$client->getResponse();

        $this->assertFailure($response);

        return json_decode($response->getContent(), true);
    }

    public function testAccessSecuredRouteWithInvalidButCorrectlyFormattedToken()
    {
        return $this->testAccessSecuredRouteWithInvalidToken('a.a.a');
    }

    /**
     * @group time-sensitive
     */
    public function testAccessSecuredRouteWithExpiredToken($fail = true)
    {
        static::bootKernel();

        $encoder = static::$kernel->getContainer()->get('lexik_jwt_authentication.encoder');
        $payload = ['exp' => time()];

        static::$client = static::createAuthenticatedClient($encoder->encode($payload));
        static::accessSecuredRoute();

        $response = static::$client->getResponse();

        if (true === $fail) {
            $this->assertFailure($response);
        }

        return json_decode($response->getContent(), true);
    }

    public function testExpClaimIsNotSetIfNoTTL()
    {
        static::bootKernel();
        $encoder = static::$kernel->getContainer()->get('lexik_jwt_authentication.encoder');

        $r = new \ReflectionProperty(get_class($encoder), 'jwsProvider');
        $r->setAccessible(true);
        $jwsProvider = $r->getValue($encoder);
        \Closure::bind(function () {
            $this->ttl = null;
        }, $jwsProvider, get_class($jwsProvider))->__invoke();

        $token = $encoder->encode(['username' => 'lexik']);
        $this->assertArrayNotHasKey('exp', $encoder->decode($token));

        static::$client = static::createAuthenticatedClient($token);
        static::accessSecuredRoute();

        $this->assertSuccessful(static::$client->getResponse());
    }

    protected function assertFailure(Response $response)
    {
        $this->assertFalse($response->isSuccessful());
        $this->assertSame(401, $response->getStatusCode());
    }

    protected function assertSuccessful(Response $response)
    {
        $this->assertTrue($response->isSuccessful());
        $this->assertSame(200, $response->getStatusCode());
    }

    protected function accessSecuredRoute()
    {
        static::$client->request('GET', '/api/secured');
    }
}
