<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace CDuc\CharracterBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use CDuc\CharracterBundle\Entity\SkillType;

class LoadSkillType extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $skill1 = new SkillType();
        $skill1->setId(0);
        $skill1->setLabel('Social');
        $manager->persist($skill1);
        $manager->flush();
        $this->addReference('skill-social', $skill1);

        $skill2 = new SkillType();
        $skill2->setId(1);
        $skill2->setLabel('Physique');
        $manager->persist($skill2);
        $manager->flush();
        $this->addReference('skill-physique', $skill2);

        $skill3 = new SkillType();
        $skill3->setId(2);
        $skill3->setLabel('Tempérament');
        $manager->persist($skill3);
        $manager->flush();
        $this->addReference('skill-temper', $skill3);

        $skill4 = new SkillType();
        $skill4->setId(4);
        $skill4->setLabel('Jauge');
        $manager->persist($skill4);
        $manager->flush();
        $this->addReference('skill-gauge', $skill4);

        $skill5 = new SkillType();
        $skill5->setId(3);
        $skill5->setLabel('Magie');
        $manager->persist($skill5);
        $manager->flush();
        $this->addReference('skill-magie', $skill5);
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}