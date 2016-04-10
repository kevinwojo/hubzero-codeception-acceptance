<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Login as admin to backend.');

$I->amOnPage('/administrator');
$I->fillField('username', 'admin');
$I->fillField('passwd', 'vagrant2016');
$I->click('Log in');
$I->see('Control Panel');
