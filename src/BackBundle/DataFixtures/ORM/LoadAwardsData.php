<?php

use BackBundle\Entity\Awards;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;


class LoadAwardsData implements FixtureInterface {

    public function load(ObjectManager $manager)
    {
        $tab_awards = ['Awards de la meilleure UI/Webdesign','Awards de la meilleure UX' ,'Awards du site le plus original/créatif ','Awards du site le plus efficace/performant','Awards du meilleur site agence','Awards du meilleur site d\'entreprise'];
        
        foreach ($tab_awards as $item)
        {
            $exist_award = $manager->getRepository('BackBundle:Awards')->findOneBy(
                ['libelle' => $item]
            );
            if ($exist_award == '') // if award not exist in DB
            {
                $award = new Awards();
                $award->setLibelle($item);
                $manager->persist($award);
            }
        }
        $manager->flush();
    }
}