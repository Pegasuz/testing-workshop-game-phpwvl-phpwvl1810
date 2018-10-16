<?php

class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    public function testTitle()
    {
        $this->url('https://theialive.com/');
        $this->assertEquals('Example WWW Page', $this->title());
    }

    protected function setUp()
    {
        $this->setHost('selenium-hub');
        $this->setPort(4444);
        $this->setBrowser('chrome');
        $this->setBrowserUrl('https://theialive.com/');
    }

}