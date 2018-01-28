<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\WebsiteType;


class LoadWebsiteTypeData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tab_websiteType = ['E-commerce', 'Single page', 'Responsive', 'Multi-Language'];

        foreach ($tab_websiteType as $item)
        {
            $exist_websiteType = $manager->getRepository('BackBundle:WebsiteType')->findOneBy(
                ['libelle' => $item]
            );
            if($exist_websiteType == ''){
                $websiteType = new WebsiteType();
                $websiteType->setLibelle($item);
                $manager->persist($websiteType);
            }
        }
        $manager->flush();
    }
}