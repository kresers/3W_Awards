<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Tag;


class LoadTagData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tab_tag = ['Tags 1', 'Tags 2', 'Tags 3', 'Tags 4'];

        foreach ($tab_tag as $item)
        {
            $exist_tag = $manager->getRepository('BackBundle:Tag')->findOneBy(
                ['libelle' => $item]
            );
            if($exist_tag == ''){
                $tag = new Tag();
                $tag->setLibelle($item);
                $manager->persist($tag);
            }
        }
        $manager->flush();
    }
}