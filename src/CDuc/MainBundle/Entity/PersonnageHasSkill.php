<?php

namespace CDuc\MainBundle\Entity;

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
     * @var \CDuc\MainBundle\Entity\Personnage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CDuc\MainBundle\Entity\Personnage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personnage_id", referencedColumnName="id")
     * })
     */
    private $personnage;

    /**
     * @var \CDuc\MainBundle\Entity\Skill
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CDuc\MainBundle\Entity\Skill")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill_id", referencedColumnName="id")
     * })
     */
    private $skill;

    /**
     * @var \CDuc\MainBundle\Entity\Topic
     *
     * @ORM\ManyToOne(targetEntity="CDuc\MainBundle\Entity\Topic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     * })
     */
    private $topic;


}
