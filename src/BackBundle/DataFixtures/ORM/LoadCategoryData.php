<?php

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use BackBundle\Entity\Category;


class LoadCategoryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tab_category = ['Design/UI', 'UX/ergonomie', 'Originalité/créativité', 'Qualité du contenu(intéret)'];

        foreach ($tab_category as $item)
        {
            $exist_category = $manager->getRepository('BackBundle:Category')->findOneBy(
                ['libelle' => $item]
            );
            if($exist_category == ''){
                $category = new Category();
                $category->setLibelle($item);
                $manager->persist($category);
            }
        }
        $manager->flush();
    }
}