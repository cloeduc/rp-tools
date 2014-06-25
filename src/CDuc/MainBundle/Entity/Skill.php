<?php

namespace CDuc\MainBundle\Entity;

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
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
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
     * @var \CDuc\MainBundle\Entity\SkillType
     *
     * @ORM\ManyToOne(targetEntity="CDuc\MainBundle\Entity\SkillType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill_type_id", referencedColumnName="id")
     * })
     */
    private $skillType;

    /**
     * @var \CDuc\MainBundle\Entity\SkillLevel
     *
     * @ORM\ManyToOne(targetEntity="CDuc\MainBundle\Entity\SkillLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill_level_id", referencedColumnName="id")
     * })
     */
    private $skillLevel;


}
