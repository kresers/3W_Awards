<?php

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\CategoryAwards;


class LoadCategoryAwards implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1;
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "categoryAwards.csv";// On récupère le fichier csv
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';');
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                $label = $datas[0];

                $categoryAwards = new CategoryAwards();
                $categoryAwards->setLabel($label);

                $manager->persist($categoryAwards);
                $file++;
            }
            $manager->flush();
            fclose($gestion);
        }

    }
}