<?php

namespace CDuc\CampagneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CDuc\CampagneBundle\Entity\Category", inversedBy="parentCategory")
     * @ORM\JoinTable(name="category_has_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="parent_category", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="child_category", referencedColumnName="id")
     *   }
     * )
     */
    private $childCategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->childCategory = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Category
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
     * Set type
     *
     * @param string $type
     * @return Category
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
     * Add childCategory
     *
     * @param \CDuc\CampagneBundle\Entity\Category $childCategory
     * @return Category
     */
    public function addChildCategory(\CDuc\CampagneBundle\Entity\Category $childCategory)
    {
        $this->childCategory[] = $childCategory;

        return $this;
    }

    /**
     * Remove childCategory
     *
     * @param \CDuc\CampagneBundle\Entity\Category $childCategory
     */
    public function removeChildCategory(\CDuc\CampagneBundle\Entity\Category $childCategory)
    {
        $this->childCategory->removeElement($childCategory);
    }

    /**
     * Get childCategory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildCategory()
    {
        return $this->childCategory;
    }
}
