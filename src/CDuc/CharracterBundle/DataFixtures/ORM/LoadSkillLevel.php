<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace CDuc\CharracterBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CDuc\CharracterBundle\Entity\SkillLevel;

class LoadSkillLevel extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $skillLevel1 = new SkillLevel();
        $skillLevel1->setId(0);
        $skillLevel1->setLabel('common');
        $skillLevel1->setCost(1);

        $manager->persist($skillLevel1);
        $manager->flush();
        $this->addReference('level-commom', $skillLevel1);

        $skillLevel2 = new SkillLevel();
        $skillLevel2->setId(1);
        $skillLevel2->setLabel('special');
        $skillLevel2->setCost(2);
        $this->addReference('level-special', $skillLevel2);

        $manager->persist($skillLevel2);
        $manager->flush();

        $skillLevel3 = new SkillLevel();
        $skillLevel3->setId(2);
        $skillLevel3->setLabel('unusual');
        $skillLevel3->setCost(3);
        $this->addReference('level-unusual', $skillLevel3);

        $manager->persist($skillLevel3);
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}