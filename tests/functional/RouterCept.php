<?php

$I = new FunctionalTester($scenario);

//$I->wantTo('Test the WPGraphQL Router');

$I->amOnPage('/graphql/');
$I->seeCurrentUrlEquals('/graphql');

