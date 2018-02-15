<?php

use BackBundle\Entity\Contest;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;


class LoadContestData implements FixtureInterface{

    public function load(ObjectManager $manager)
    {
        $tab_contest = [
            [
                'tab_contest'           => 'Compétition pour l\'awards du meilleur UI/webdesign',
                'tab_contestant'        => 'REGNIER Valentin',
                'tab_winner_id'         => '1',
                'tab_contestDate'       => '01/01/2018',
                'tab_juryRating'        => '15',
                'tab_memberRating'      => '17',
            ],
            [
                'tab_contest'           => 'Compétition pour l\'awards du meilleur UX',
                'tab_contestant'        => 'TOURSEL Sébastien',
                'tab_winner_id'         => '2',
                'tab_contestDate'       => '01/02/2018',
                'tab_juryRating'        => '12',
                'tab_memberRating'      => '17',
            ],
            [
                'tab_contest'           => 'Compétition pour l\'awards du site le plus original/créatif',
                'tab_contestant'        => 'BORDAS Maxime',
                'tab_winner_id'         => '3',
                'tab_contestDate'       => '01/03/2018',
                'tab_juryRating'        => '13',
                'tab_memberRating'      => '17',
            ],
            [
                'tab_contest'           => 'Compétition pour l\'awards du site le plus efficace/performant',
                'tab_contestant'        => 'FOCQUEU Thomas',
                'tab_winner_id'         => '4',
                'tab_contestDate'       => '01/04/2018',
                'tab_juryRating'        => '17',
                'tab_memberRating'      => '17',
            ],
            [
                'tab_contest'           => 'Compétition pour l\'awards du meilleur site agency',
                'tab_contestant'        => 'Agence isaris',
                'tab_winner_id'         => '5',
                'tab_contestDate'       => '01/05/2018',
                'tab_juryRating'        => '16',
                'tab_memberRating'      => '17',
            ],
            [
                'tab_contest'          => 'Compétition pour l\'awards du meilleur site d\'entreprise',
                'tab_contestant'       => 'Entreprise MozartsDuWeb',
                'tab_winner_id'        => '6',
                'tab_contestDate'      => '01/06/2018',
                'tab_juryRating'       => '19',
                'tab_memberRating'     => '17',
            ],
        ];

        $ind=0;


        foreach ($tab_contest as $item){
            $exist_contest = $manager->getRepository('BackBundle:Contest')->findOneBy(
                ['libelle' => $item]
            );
            $item['tab_contestDate'] = new \DateTime();

            if ($exist_contest == '') {
                $contest = new Contest();
                $contest->setLibelle($item['tab_contest']);
                $contest->setContestant($item['tab_contestant']);
                $contest->setWinnerId($item['tab_winner_id']);
                $contest->setContestDate($item['tab_contestDate']);
                $contest->setJuryRating($item['tab_juryRating']);
                $contest->setMemberRating($item['tab_memberRating']);
                $manager->persist($contest);
            }
            $ind++;
        }
        $manager->flush();
    }
}