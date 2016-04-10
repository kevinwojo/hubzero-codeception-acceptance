<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Create a new account');

$I->amOnPage('/register');
$I->fillField('login', 'codeception');
$I->fillField('password', 'codeCeption123');
$I->fillField('password2', 'codeCeption123');
$I->fillField('name[first]', 'Code');
$I->fillField('name[last]', 'Cecption');
$I->fillField('email', 'code.ception@example.com');
$I->fillField('email2', 'code.ception@example.com');
$I->click('usageAgreement');
$I->click('submit');
$I->see('Email');



