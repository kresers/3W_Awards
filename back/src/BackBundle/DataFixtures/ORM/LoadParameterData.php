<?php

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Parameter;


class LoadParameterData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1;
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "parameter.csv";// On récupère le fichier csv
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';');
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                $applicationNale  = $datas[0];
                $adress = $datas[1];
                $adress2 = $datas[2];
                $phoneNumber = $datas[3];
                $fax = $datas[4];
                $emailRequest = $datas[5];

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
            $manager->flush();
            fclose($gestion);
        }

    }
}