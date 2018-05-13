<?php

/**
 * Description : this providers contain verif token methods
 */

namespace BackBundle\Providers;

use Lexik\Bundle\JWTAuthenticationBundle\Exception\InvalidTokenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class TokenAuthorization
 * @package BackBundle\providers
 */
class TokenAuthorization
{
    /**
     * Description : This function return true if currentUser have corresponding roles else return 403 exception
     * @param $credentials
     * @param $roleAuthorized -> ex : 'ROLE_ADMIN'
     * @return bool|InvalidTokenException
     */
    public function AuthorizedForRoles($credentials, $roleAuthorized)
    {
        if ($credentials) {
            $payload = $credentials->getPayload();
            $rolesCurrentUser = $payload['roles'];
            foreach ($rolesCurrentUser as $role) {
                if ($role == $roleAuthorized) {
                    return true;
                }
            }
        } else {
            throw new HttpException(403, 'You can\'t access to this data !! '); // if u are not connected
        }
        throw new HttpException(403, 'You can\'t access to this data !! '); // if you have bad roles
    }

    /**
     * Description : this function return true if the currentUser have the same username than the username transmit in params
     * @param $credentials
     * @param $username
     */
    public function RestrictForCurrentUser($credentials, $username)
    {
        if ($credentials) {
            $payload = $credentials->getPayload();
            if ($payload['username'] == $username)
            {
                return true;
            }
            else
            {
                throw new HttpException(403, 'You can\'t access to this data !! ');
            }
        }
        else
        {
            throw new HttpException(403, 'You can\'t access to this data !! ');
        }
    }


}