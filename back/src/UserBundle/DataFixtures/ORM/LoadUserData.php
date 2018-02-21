<?php

namespace back\UserBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use UserBundle\Entity\User;


class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $file = 1;
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "users.csv";  // On récupère le fichier csv
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);
        if (($gestion = fopen($filename, "r")) !== FALSE) {
            fgetcsv($gestion, null, ";");
            while (($datas = fgetcsv($gestion, null, ";")) !== FALSE) {
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                $firstName = $datas[0];
                $lastName = $datas[1];
                $username = $firstName.$lastName;
                $username_canonical = $username.$file;
                $country = $datas[2];
                $gender = $datas[3];
                $roles[] = $datas[4];
                $email = $datas[5];
                $pass = $datas[6];

                $user = new User();
                $user->setFirstName($firstName);
                $user->setLastName($lastName);
                $user->setUsername($username);
                $user->setUsernameCanonical($username_canonical);
                $user->setPassword($pass);
                $user->setCountry($country);
                $user->setGender($gender);
                $user->setRoles($roles);
                $user->setEmail($email);
                $user->setEmailCanonical($email);


                $manager->persist($user);

                $file++;
            }

            fclose($gestion);

        }

    }
}