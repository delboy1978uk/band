<?php

namespace DelTesting\Band\Entity;

use Codeception\TestCase\Test;
use Del\Factory\CountryFactory;
use Del\Band\Entity\Artist;
use Del\Band\Entity\Band;

class BandTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Band
     */
    protected $band;

    protected function _before()
    {
        $this->band = new Band();
    }

    protected function _after()
    {
        unset($this->band);
    }

    public function testGetSetId()
    {
        $this->band->setId(100);
        $this->assertEquals(100, $this->band->getId());
    }

    public function testGetSetArtists()
    {
        $dave = new Artist();
        $del = new Artist();
        $andy = new Artist();
        $corraib = new Artist();
        $this->band->setArtists([$dave, $del, $andy, $corraib]);
        $this->assertCount(4, $this->band->getArtists());
        $this->assertInstanceOf('Del\Band\Entity\Artist', $this->band->getArtists()[0]);
    }

    public function testGetSetBandName()
    {
        $this->band->setBandName('The Shunned');
        $this->assertEquals('The Shunned', $this->band->getBandName());
    }

    public function testGetSetPhoto()
    {
        $this->band->setPhoto('Cheese');
        $this->assertEquals('Cheese', $this->band->getPhoto());
    }

    public function testGetSetWebsite()
    {
        $this->band->setWebsite('www.website.com');
        $this->assertEquals('www.website.com', $this->band->getWebsite());
    }

    public function testGetSetEmail()
    {
        $this->band->setEmail('band@livebands.com');
        $this->assertEquals('band@livebands.com', $this->band->getEmail());
    }

    public function testGetSetPhoneNumber()
    {
        $this->band->setPhoneNumber('+32497112233');
        $this->assertEquals('+32497112233', $this->band->getPhoneNumber());
    }

    public function testGetSetLinks()
    {
        $links = [
            'facebook',
            'twitter',
            'soundcloud',
            'etc',
        ];
        $this->band->setLinks($links);
        $this->assertContains('twitter', $this->band->getLinks());
    }

    public function testVisibility()
    {
        $this->assertFalse($this->band->isVisible());
        $this->band->setVisible(true);
        $this->assertTrue($this->band->isVisible());
    }

    public function testGetSetTags()
    {
        $tags = [
            'rock',
            'metal',
            'glam',
            'viking',
        ];
        $this->band->setTags($tags);
        $this->assertContains('viking', $this->band->getTags());
    }

    public function testGetSetDescription()
    {
        $this->band->setDescription('leather clad viking rockers');
        $this->assertEquals('leather clad viking rockers', $this->band->getDescription());
    }
}