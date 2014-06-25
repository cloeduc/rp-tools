<?php

namespace CDuc\CharracterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillLevel
 *
 * @ORM\Table(name="skill_level")
 * @ORM\Entity
 */
class SkillLevel
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

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;


    /**
     * Set label
     *
     * @param string $label
     * @return SkillLevel
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return SkillLevel
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
