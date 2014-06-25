<?php

namespace CDuc\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillType
 *
 * @ORM\Table(name="skill_type")
 * @ORM\Entity
 */
class SkillType
{
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=45, nullable=true)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
