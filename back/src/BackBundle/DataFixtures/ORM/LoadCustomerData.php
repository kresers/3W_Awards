<?php

namespace BackBundle\DataFixtures\ORM;

use BackBundle\BackBundle;
use BackBundle\Entity\Category;
use BackBundle\Entity\CategoryAwards;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Customer;


class LoadCustomerData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1; // used for increment
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "customer.csv";// get the CSV file
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

                //set datas
                $customer = new Customer();
                //$customer->setCategoryAwards($categDB);
                $customer->setName($name);
                $customer->setCountry($country);
                $customer->setType($type);
                $cat = new Category();
                $cat->setLabel('UX DESIGN');
                $customer->addCategory($cat);
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

            //add datas in db
            $manager->flush();
            fclose($gestion);
        }

    }
}
