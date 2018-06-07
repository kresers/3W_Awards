<?php

namespace BackBundle\DataFixtures\ORM;

use BackBundle\Entity\Country;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Blog;


class LoadCountryData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1; // used for increment
        $filename = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'csv' . DIRECTORY_SEPARATOR . "country.csv";// get the CSV file
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        // Opens the csv file read-only, and places the file pointer at the beginning
        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';');//used to skip first line (header of the CSV)

            //we browse the csv file
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {

                //condition to encode in UTF-8
                if ($enc !== "UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                //get datas in csv
                $label = $datas[0];
                echo ('Ajout du pays : ' . $label . "\n");
                //set datas
                $country = new Country();
                $country->setLabel($label);
                $manager->persist($country);
                $file++;
            }

            //add datas in db
            $manager->flush();
            fclose($gestion);
        }

    }
}