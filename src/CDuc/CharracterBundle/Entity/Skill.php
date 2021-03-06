<?php

namespace CDuc\CharracterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill", indexes={@ORM\Index(name="fk_skill_skill_level1_idx", columns={"skill_level_id"}), @ORM\Index(name="fk_skill_skill_type1_idx", columns={"skill_type_id"})})
 * @ORM\Entity
 */
class Skill
{
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=45, nullable=true)
     */
    private $label;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \CDuc\CharracterBundle\Entity\SkillType
     *
     * @ORM\ManyToOne(targetEntity="CDuc\CharracterBundle\Entity\SkillType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill_type_id", referencedColumnName="id")
     * })
     */
    private $skillType;

    /**
     * @var \CDuc\CharracterBundle\Entity\SkillLevel
     *
     * @ORM\ManyToOne(targetEntity="CDuc\CharracterBundle\Entity\SkillLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill_level_id", referencedColumnName="id")
     * })
     */
    private $skillLevel;

    /**
     * Set label
     *
     * @param string $label
     * @return Skill
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Skill
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set skillType
     *
     * @param \CDuc\CharracterBundle\Entity\SkillType $skillType
     * @return Skill
     */
    public function setSkillType(\CDuc\CharracterBundle\Entity\SkillType $skillType = null)
    {
        $this->skillType = $skillType;

        return $this;
    }

    /**
     * Get skillType
     *
     * @return \CDuc\CharracterBundle\Entity\SkillType 
     */
    public function getSkillType()
    {
        return $this->skillType;
    }

    /**
     * Set skillLevel
     *
     * @param \CDuc\CharracterBundle\Entity\SkillLevel $skillLevel
     * @return Skill
     */
    public function setSkillLevel(\CDuc\CharracterBundle\Entity\SkillLevel $skillLevel = null)
    {
        $this->skillLevel = $skillLevel;

        return $this;
    }

    /**
     * Get skillLevel
     *
     * @return \CDuc\CharracterBundle\Entity\SkillLevel 
     */
    public function getSkillLevel()
    {
        return $this->skillLevel;
    }
}
