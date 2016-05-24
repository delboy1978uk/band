<?php

namespace DelTesting\Venue\Entity;

use Codeception\TestCase\Test;
use Del\Factory\CountryFactory;
use Del\Band\Entity\Brewery;
use Del\Band\Entity\Venue;

class VenueTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Venue
     */
    protected $venue;

    protected function _before()
    {
        $this->venue = new Venue();
    }

    protected function _after()
    {
        unset($this->venue);
    }

    public function testGetSetId()
    {
        $this->venue->setId(100);
        $this->assertEquals(100, $this->venue->getId());
    }

    public function testGetSetBrewery()
    {
        $stellaArtois = new Brewery();
        $this->venue->setBrewery($stellaArtois);
        $this->assertInstanceOf('Del\Band\Entity\Brewery', $this->venue->getBrewery());
    }

    public function testGetSetVenueName()
    {
        $this->venue->setVenueName('The Shunned');
        $this->assertEquals('The Shunned', $this->venue->getVenueName());
    }

    public function testGetSetPhoto()
    {
        $this->venue->setPhoto('Cheese');
        $this->assertEquals('Cheese', $this->venue->getPhoto());
    }

    public function testGetSetWebsite()
    {
        $this->venue->setWebsite('www.website.com');
        $this->assertEquals('www.website.com', $this->venue->getWebsite());
    }

    public function testGetSetEmail()
    {
        $this->venue->setEmail('venue@livevenues.com');
        $this->assertEquals('venue@livevenues.com', $this->venue->getEmail());
    }

    public function testGetSetPhoneNumber()
    {
        $this->venue->setPhoneNumber('+32497112233');
        $this->assertEquals('+32497112233', $this->venue->getPhoneNumber());
    }

    public function testGetSetLinks()
    {
        $links = [
            'facebook',
            'twitter',
            'soundcloud',
            'etc',
        ];
        $this->venue->setLinks($links);
        $this->assertContains('twitter', $this->venue->getLinks());
    }

    public function testVisibility()
    {
        $this->assertFalse($this->venue->isVisible());
        $this->venue->setVisible(true);
        $this->assertTrue($this->venue->isVisible());
    }

    public function testGetSetTags()
    {
        $tags = [
            'rock',
            'metal',
            'glam',
            'viking',
        ];
        $this->venue->setTags($tags);
        $this->assertContains('viking', $this->venue->getTags());
    }

    public function testGetSetDescription()
    {
        $this->venue->setDescription('leather clad viking rockers');
        $this->assertEquals('leather clad viking rockers', $this->venue->getDescription());
    }

    public function testGetSetUpcomingActs()
    {
        $upcoming = [
            'AC/DC 12th June',
            'Iron Maiden 17th June',
            'Metallica 25th June',
            'The Shunned 2nd July',
        ];
        $this->venue->setUpcomingActs($upcoming);
        $this->assertContains('The Shunned 2nd July', $this->venue->getUpcomingActs());
    }
}