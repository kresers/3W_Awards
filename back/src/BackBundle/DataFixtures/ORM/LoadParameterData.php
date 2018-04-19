<?php

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Parameter;


class LoadParameterData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1; // used for increment
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "parameter.csv";// get the CSV file
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
                $applicationNale  = $datas[0];
                $adress = $datas[1];
                $adress2 = $datas[2];
                $phoneNumber = $datas[3];
                $fax = $datas[4];
                $emailRequest = $datas[5];

                //set datas
                $parameter = new Parameter();
                $parameter->setApplicationNale($applicationNale);
                $parameter->setAdress($adress);
                $parameter->setAdress2($adress2);
                $parameter->setPhoneNumber($phoneNumber);
                $parameter->setFax($fax);
                $parameter->setEmailRequest($emailRequest);

                $manager->persist($parameter);
                $file++;
            }

            //add datas in db
            $manager->flush();
            fclose($gestion);
        }

    }
}