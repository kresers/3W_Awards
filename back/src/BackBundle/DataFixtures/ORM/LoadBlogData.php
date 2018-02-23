<?php

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Blog;


class LoadBlogData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1; // used for increment
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "blog.csv";// get the CSV file
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        // Opens the csv file read-only, and places the file pointer at the beginning
        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';');//used to skip first line (header of the CSV)

            //we browse the csv file
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {

                //condition to encode in UTF-8
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                //get datas in csv
                $articleTitle = $datas[0];
                $status = $datas[1];
                $publicationDate = $datas[2];
                $category = $datas[3];
                $resume = $datas[4];
                $description = $datas[5];

                //set datas
                $blog = new Blog();
                $blog->setArticleTitle($articleTitle);
                $blog->setStatus($status);
                $blog->setPublicationDate(new \DateTime($publicationDate));
                $blog->setCategory($category);
                $blog->setResume($resume);
                $blog->setDescription($description);

                $manager->persist($blog);
                $file++;
            }

            //add datas in db
            $manager->flush();
            fclose($gestion);
        }

    }
}