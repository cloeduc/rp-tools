<?php

namespace CDuc\CharracterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnage
 *
 * @ORM\Table(name="personnage", indexes={@ORM\Index(name="fk_personnage_joueur1_idx", columns={"joueur_id"})})
 * @ORM\Entity
 */
class Personnage
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
     * @ORM\Column(name="firstname", type="string", length=45, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=45, nullable=true)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="background", type="blob", nullable=true)
     */
    private $background;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="blob", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="public_story", type="blob", nullable=true)
     */
    private $publicStory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_completed", type="boolean", nullable=true)
     */
    private $isCompleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \CDuc\CampagneBundle\Entity\Joueur
     *
     * @ORM\ManyToOne(targetEntity="CDuc\CampagneBundle\Entity\Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="joueur_id", referencedColumnName="id")
     * })
     */
    private $joueur;



    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Personnage
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
     * Set firstname
     *
     * @param string $firstname
     * @return Personnage
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Personnage
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return Personnage
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set background
     *
     * @param string $background
     * @return Personnage
     */
    public function setBackground($background)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get background
     *
     * @return string 
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Personnage
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
     * Set publicStory
     *
     * @param string $publicStory
     * @return Personnage
     */
    public function setPublicStory($publicStory)
    {
        $this->publicStory = $publicStory;

        return $this;
    }

    /**
     * Get publicStory
     *
     * @return string 
     */
    public function getPublicStory()
    {
        return $this->publicStory;
    }

    /**
     * Set isCompleted
     *
     * @param boolean $isCompleted
     * @return Personnage
     */
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    /**
     * Get isCompleted
     *
     * @return boolean 
     */
    public function getIsCompleted()
    {
        return $this->isCompleted;
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
     * Set joueur
     *
     * @param \CDuc\CampagneBundle\Entity\Joueur $joueur
     * @return Personnage
     */
    public function setJoueur(\CDuc\CampagneBundle\Entity\Joueur $joueur = null)
    {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get joueur
     *
     * @return \CDuc\CampagneBundle\Entity\Joueur 
     */
    public function getJoueur()
    {
        return $this->joueur;
    }
}
