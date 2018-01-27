<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Functionality;


class LoadFunctionalityData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tab_functionality = ['Functionality 1', 'Functionality 2', 'Functionality 3', 'Functionality 4'];

        foreach ($tab_functionality as $item)
        {
            $exist_functionality = $manager->getRepository('BackBundle:Functionality')->findOneBy(
                ['libelle' => $item]
            );
            if($exist_functionality == ''){
                $functionality = new Functionality();
                $functionality->setLibelle($item);
                $manager->persist($functionality);
            }
        }
        $manager->flush();
    }
}