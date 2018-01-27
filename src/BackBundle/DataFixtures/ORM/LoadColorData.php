<?php

use BackBundle\Entity\Color;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;


class LoadColorData implements FixtureInterface{

    public function load(ObjectManager $manager)
    {
        $tab_color = ['rouge' , 'vert' , 'bleu' , 'orange' , 'gris' , 'noir' , 'violet', 'marron', 'beige'];

        foreach ($tab_color as $item){

            $exist_color = $manager->getRepository('BackBundle:Color')->findOneBy(
                ['libelle' => $item]
            );

            if($exist_color == ''){
                $color = new Color();
                $color->setLibelle($item);
                $manager->persist($color);
            }
        }
        $manager->flush();
    }
}