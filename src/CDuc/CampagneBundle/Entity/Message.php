<?php

namespace CDuc\CampagneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="fk_message_topic1_idx", columns={"topic_id"}), @ORM\Index(name="fk_message_personnage2_idx", columns={"personnage_id"})})
 * @ORM\Entity
 */
class Message
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
     * @ORM\Column(name="message", type="blob", nullable=true)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \CDuc\CharracterBundle\Entity\Personnage
     *
     * @ORM\ManyToOne(targetEntity="CDuc\CharracterBundle\Entity\Personnage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personnage_id", referencedColumnName="id")
     * })
     */
    private $personnage;

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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Message
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
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
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
     * Set personnage
     *
     * @param \CDuc\CharracterBundle\Entity\Personnage $personnage
     * @return Message
     */
    public function setPersonnage(\CDuc\CharracterBundle\Entity\Personnage $personnage = null)
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
     * Set topic
     *
     * @param \CDuc\CampagneBundle\Entity\Topic $topic
     * @return Message
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
