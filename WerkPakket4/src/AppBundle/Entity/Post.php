<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * @ORM\Table(name="symfony_demo_post")
 *
 * Defines the properties of the Post entity to represent the blog posts.
 *
 * See https://symfony.com/doc/current/book/doctrine.html#creating-an-entity-class
 *
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
      */
    private $slug;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $klant_id;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $adress_id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $planning_datum;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="post.blank_content")
     * @Assert\Length(min=1, minMessage="post.too_short_content")
     */
    private $omschrijving;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $personeel_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $start_datum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $eind_datum;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $verwacht_aantal_Gasten;

    /**
     * Evenement constructor.
     * @param \DateTime $planning_datum
     * @param \DateTime $start_datum
     * @param \DateTime $eind_datum
     */
    public function __construct()
    {
        $this->start_datum = new \DateTime();
        $this->eind_datum = new \DateTime();
        $this->planning_datum = new \DateTime();
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param string $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return int
     */
    public function getKlantId()
    {
        return $this->klant_id;
    }

    /**
     * @param int $klant_id
     */
    public function setKlantId($klant_id)
    {
        $this->klant_id = $klant_id;
    }

    /**
     * @return int
     */
    public function getAdressId()
    {
        return $this->adress_id;
    }

    /**
     * @param int $adress_id
     */
    public function setAdressId($adress_id)
    {
        $this->adress_id = $adress_id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return \DateTime
     */
    public function getPlanningDatum()
    {
        return $this->planning_datum;
    }

    /**
     * @param \DateTime $planning_datum
     */
    public function setPlanningDatum($planning_datum)
    {
        $this->planning_datum = $planning_datum;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * @param string $omschrijving
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
    }

    /**
     * @return int
     */
    public function getPersoneelId()
    {
        return $this->personeel_id;
    }

    /**
     * @param int $personeel_id
     */
    public function setPersoneelId($personeel_id)
    {
        $this->personeel_id = $personeel_id;
    }

    /**
     * @return \DateTime
     */
    public function getStartDatum()
    {
        return $this->start_datum;
    }

    /**
     * @param \DateTime $start_datum
     */
    public function setStartDatum($start_datum)
    {
        $this->start_datum = $start_datum;
    }

    /**
     * @return \DateTime
     */
    public function getEindDatum()
    {
        return $this->eind_datum;
    }

    /**
     * @param \DateTime $eind_datum
     */
    public function setEindDatum($eind_datum)
    {
        $this->eind_datum = $eind_datum;
    }

    /**
     * @return int
     */
    public function getVerwachtAantalGasten()
    {
        return $this->verwacht_aantal_Gasten;
    }

    /**
     * @param int $verwacht_aantal_Gasten
     */
    public function setVerwachtAantalGasten($verwacht_aantal_Gasten)
    {
        $this->verwacht_aantal_Gasten = $verwacht_aantal_Gasten;
    }

}
