<?php

namespace Del\Band\Entity;

class Venue
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $venueName
     */
    private $venueName;

    /**
     * @var string $photo
     */
    private $photo;

    /**
     * @var string $website
     */
    private $website;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $phoneNumber
     */
    private $phoneNumber;

    /**
     * @var array $links
     */
    private $links;

    /**
     * @var array $upcomingActs
     */
    private $upcomingActs;

    /**
     * @var Brewery $brewery
     */
    private $brewery;

    /**
     * @var bool $visible
     */
    private $visible;

    /**
     * @var array $tags
     */
    private $tags;

    /**
     * @var string $description
     */
    private $description;

    /**
     *  Default not visible
     */
    public function __construct()
    {
        $this->setVisible(false);
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
     * @return Artist
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     * @return Artist
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     * @return Artist
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Artist
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return Artist
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param array $links
     * @return Artist
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @param boolean $visible
     * @return Artist
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     * @return Artist
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Artist
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getVenueName()
    {
        return $this->venueName;
    }

    /**
     * @param string $venueName
     * @return Venue
     */
    public function setVenueName($venueName)
    {
        $this->venueName = $venueName;
        return $this;
    }

    /**
     * @return array
     */
    public function getUpcomingActs()
    {
        return $this->upcomingActs;
    }

    /**
     * @param array $upcomingActs
     * @return Venue
     */
    public function setUpcomingActs($upcomingActs)
    {
        $this->upcomingActs = $upcomingActs;
        return $this;
    }

    /**
     * @return Brewery
     */
    public function getBrewery()
    {
        return $this->brewery;
    }

    /**
     * @param Brewery $brewery
     * @return Venue
     */
    public function setBrewery(Brewery $brewery)
    {
        $this->brewery = $brewery;
        return $this;
    }


}