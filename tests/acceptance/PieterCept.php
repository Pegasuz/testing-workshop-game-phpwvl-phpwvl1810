<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnUrl('https://theialive.com/');
$I->see('The easy task manager');

