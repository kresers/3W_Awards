<?php

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use UserBundle\Entity\User;


class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $file = 1; // used for increment
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "users.csv";  // get the CSV file
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        // Opens the csv file read-only, and places the file pointer at the beginning
        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';'); //used to skip first line (header of the CSV)

            //we browse the csv file
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {

                //condition to encode in UTF-8
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }

                //get datas in csv
                $firstName = $datas[0];
                $lastName = $datas[1];
                $username = $firstName.$lastName;
                $username_canonical = $username.$file;
                $country = $datas[2];
                $gender = $datas[3];
                $tabRoles = 'ROLE_'.$datas[4];
                $email = $datas[5];
                $pass = $datas[6];

                //set datas
                $user = new User();
                $user->setFirstName($firstName);
                $user->setLastName($lastName);
                $user->setUsername($username);
                $user->setUsernameCanonical($username_canonical);
                $user->setPlainPassword($pass);
                $user->setCountry($country);
                $user->setGender($gender);
                $user->setEnabled(true);
                $user->setRoles(array($tabRoles));
                $user->setEmail($email);
                $user->setEmailCanonical($email);

                $manager->persist($user);
                $file++;
            }

            //add datas in db
            $manager->flush();
            fclose($gestion);

        }

    }
}