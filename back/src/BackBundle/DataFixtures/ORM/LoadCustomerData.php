<?php

namespace BackBundle\DataFixtures\ORM;

use BackBundle\BackBundle;
use BackBundle\Entity\CategoryAwards;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Customer;


class LoadCustomerData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1;
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "customer.csv";// On récupère le fichier csv
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';');
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                $categoryAwards = $datas[0];
                $categDB = $manager->getRepository(CategoryAwards::class)->findOneBy([
                    'label' => $categoryAwards
                    ]);
                $name = $datas[1];
                $country = $datas[2];
                $type = $datas[3];
                $categories = $datas[4];
                $adress = $datas[5];
                $adress2 = $datas[6];
                $postalCode = $datas[7];
                $city = $datas[8];
                $phoneNumber = $datas[9];
                $fax  = $datas[10];
                $presentation = $datas[11];
                $expertise = $datas[12];
                $notes = $datas[13];
                $creationDate = $datas[14];
                $staffNumber = $datas[15];
                $revenue = $datas[16];
                $website = $datas[17];
                $tvaNumber = $datas[18];
                $numeroDuns = $datas[19];



                $customer = new Customer();
                $customer->setCategoryAwards($categDB);
                $customer->setName($name);
                $customer->setCountry($country);
                $customer->setType($type);
                $customer->setCategories($categories);
                $customer->setAdress($adress);
                $customer->setAdress2($adress2);
                $customer->setPostalCode($postalCode);
                $customer->setCity($city);
                $customer->setPhoneNumber($phoneNumber);
                $customer->setFax($fax);
                $customer->setPresentation($presentation);
                $customer->setExpertise($expertise);
                $customer->setNotes($notes);
                $customer->setCreationDate(new \DateTime($creationDate));
                $customer->setStaffNumber($staffNumber);
                $customer->setRevenue($revenue);
                $customer->setWebsite($website);
                $customer->setTvaNumber($tvaNumber);
                $customer->setNumeroDuns($numeroDuns);

                $manager->persist($customer);
                $file++;
            }
            $manager->flush();
            fclose($gestion);
        }

    }
}