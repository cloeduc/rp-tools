<?php

namespace CDuc\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="fk_message_topic1_idx", columns={"topic_id"}), @ORM\Index(name="fk_message_personnage2_idx", columns={"personnage_id1"})})
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
     * @var \CDuc\MainBundle\Entity\Personnage
     *
     * @ORM\ManyToOne(targetEntity="CDuc\MainBundle\Entity\Personnage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personnage_id1", referencedColumnName="id")
     * })
     */
    private $personnage1;

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
