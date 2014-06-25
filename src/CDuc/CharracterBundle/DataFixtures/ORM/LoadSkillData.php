<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace CDuc\CharracterBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CDuc\CharracterBundle\Entity\Skill;

class LoadSkillData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    private $manager;
    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        
        $magie1 = array('Moldus','Magie théorique','Botanique','Potion','Divination','Culture','Vol','Créatures magiques','Oclumencie','Corps à corps');
        foreach($magie1 as $key => $skill) {
            $this->saveSkillWithLevelAndType($skill, $this->getReference('level-commom'), $this->getReference('skill-magie'));
        }

        $magie2 = array('Magie noire', 'Interespèce', 'Médecine', 'Armes Blanches', 'Armes à feu', 'Legilimencie');
        foreach($magie2 as $key => $skill) {
            $this->saveSkillWithLevelAndType($skill, $this->getReference('level-special'), $this->getReference('skill-magie'));
        }

        $magie3 = array('Magie ancienne', 'Runes');
        foreach($magie3 as $key => $skill) {
            $this->saveSkillWithLevelAndType($skill, $this->getReference('level-unusual'), $this->getReference('skill-magie'));
        }


        $physical = array('Force', 'Rapidité', 'Précision', 'Réflexes','Discretion','Puissance magique');
        foreach($physical as $key => $skill) {
            $this->saveSkillWithLevelAndType($skill, $this->getReference('level-commom'), $this->getReference('skill-physique'));
        }
        $social = array('Persuasion', 'Sociabilité', 'Manipulation', 'Présence', 'Intégrité');
        foreach($social as $key => $skill) {
            $this->saveSkillWithLevelAndType($skill, $this->getReference('level-commom'), $this->getReference('skill-social'));
        }
        $temper = array('Malice', 'Calme', 'Ingéniosité', 'Conviction','Intelligence');
        foreach($temper as $key => $skill) {
            $this->saveSkillWithLevelAndType($skill, $this->getReference('level-commom'), $this->getReference('skill-temper'));
        }

        $jauge = array('Magie', 'Santé');
        foreach($jauge as $key => $skill) {
            $this->saveSkillWithLevelAndType($skill, $this->getReference('level-commom'), $this->getReference('skill-gauge'));
        }
    }
    private function saveSkillWithLevelAndType ($label, $level, $type) 
    {
        $skill = new Skill();
        $skill->setLabel($label);
        $skill->setSkillLevel($level);
        $skill->setSkillType($type);

        $this->manager->persist($skill);
        $this->manager->flush();
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}