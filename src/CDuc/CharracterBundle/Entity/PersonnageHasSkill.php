<?php

namespace CDuc\CharracterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnageHasSkill
 *
 * @ORM\Table(name="personnage_has_skill", indexes={@ORM\Index(name="fk_personnage_has_skill_skill1_idx", columns={"skill_id"}), @ORM\Index(name="fk_personnage_has_skill_personnage1_idx", columns={"personnage_id"}), @ORM\Index(name="fk_personnage_has_skill_topic1_idx", columns={"topic_id"})})
 * @ORM\Entity
 */
class PersonnageHasSkill
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value;

    /**
     * @var \CDuc\CharracterBundle\Entity\Personnage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CDuc\CharracterBundle\Entity\Personnage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personnage_id", referencedColumnName="id")
     * })
     */
    private $personnage;

    /**
     * @var \CDuc\CharracterBundle\Entity\Skill
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CDuc\CharracterBundle\Entity\Skill")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill_id", referencedColumnName="id")
     * })
     */
    private $skill;

    /**
     * @var \CDuc\CampagneBundle\Entity\Topic
     *
     * @ORM\ManyToOne(targetEntity="CDuc\CampagneBundle\Entity\Topic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     * })
     */
    private $topic;



    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return PersonnageHasSkill
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set value
     *
     * @param integer $value
     * @return PersonnageHasSkill
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set personnage
     *
     * @param \CDuc\CharracterBundle\Entity\Personnage $personnage
     * @return PersonnageHasSkill
     */
    public function setPersonnage(\CDuc\CharracterBundle\Entity\Personnage $personnage)
    {
        $this->personnage = $personnage;

        return $this;
    }

    /**
     * Get personnage
     *
     * @return \CDuc\CharracterBundle\Entity\Personnage 
     */
    public function getPersonnage()
    {
        return $this->personnage;
    }

    /**
     * Set skill
     *
     * @param \CDuc\CharracterBundle\Entity\Skill $skill
     * @return PersonnageHasSkill
     */
    public function setSkill(\CDuc\CharracterBundle\Entity\Skill $skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return \CDuc\CharracterBundle\Entity\Skill 
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set topic
     *
     * @param \CDuc\CampagneBundle\Entity\Topic $topic
     * @return PersonnageHasSkill
     */
    public function setTopic(\CDuc\CampagneBundle\Entity\Topic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \CDuc\CampagneBundle\Entity\Topic 
     */
    public function getTopic()
    {
        return $this->topic;
    }
}
