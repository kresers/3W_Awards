<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Technology;


class LoadTechnologyData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tab_technology = ['HTML5', 'CSS3', 'PHP', 'SYMFONY', 'WORDPRESS', 'LARAVEL', 'ANGULAR', 'PRESTASHOP'];

        foreach ($tab_technology as $item)
        {
            $exist_technology = $manager->getRepository('BackBundle:Technology')->findOneBy(
                ['libelle' => $item]
            );
            if($exist_technology == ''){
                $technology = new Technology();
                $technology->setLibelle($item);
                $manager->persist($technology);
            }
        }
        $manager->flush();
    }
}