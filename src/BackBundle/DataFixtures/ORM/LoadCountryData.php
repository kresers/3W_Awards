<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Country;


class LoadCountryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tab_country = ['FRANCE', 'ALLEMAGNE', 'ANGLETERRE', 'ITALIE' ,'ESPAGNE'];

        foreach ($tab_country as $item)
        {
            $exist_country = $manager->getRepository('BackBundle:Country')->findOneBy(
                ['libelle' => $item]
            );
            if($exist_country == ''){
                $country = new Country();
                $country->setLibelle($item);
                $manager->persist($country);
            }
        }
        $manager->flush();
    }
}