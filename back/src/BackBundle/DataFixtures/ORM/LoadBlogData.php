<?php

namespace BackBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Blog;


class LoadBlogData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $file = 1;
        $filename = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'csv'. DIRECTORY_SEPARATOR. "blog.csv";// On récupère le fichier csv
        $output = file_get_contents($filename) . "\n";
        $enc = mb_detect_encoding($output, mb_list_encodings(), true);

        if (($gestion = fopen($filename, "r")) !== FALSE) {
            $datas = fgetcsv($gestion, null, ';');
            while (($datas = fgetcsv($gestion, null, ';')) !== FALSE) {
                if($enc!=="UTF-8") {
                    $datas = array_map("utf8_encode", $datas);
                }
                $articleTitle = $datas[0];
                $status = $datas[1];
                $publicationDate = $datas[2];
                $category = $datas[3];
                $resume = $datas[4];
                $description = $datas[5];


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
            $manager->flush();
            fclose($gestion);
        }

    }
}