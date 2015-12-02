<?php
/**
 * Created by Brent Barker
 */

use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\StringLiteral;
use Notes\Domain\ValueObject\Uuid;

describe('Notes\Domain\Entity\User', function(){
    describe('->__construct()', function (){
       it('should return a User object', function() {
           $actual = new User(new Uuid(), StringLiteral::EMPTY_STR);
           expect($actual)->to->be->instanceof('Notes\Domain\Entity\User');
       });
    });

    describe('->getUsername()', function (){
        it('should return the user\'s username', function() {
            $faker = \Faker\Factory::create();
            $uuid = new Uuid();
            $username = new StringLiteral($faker->userName);
            $user = new User($uuid, $username);
            expect($user->getUsername())->equal($username);
            expect($user->getUsername())->to->be
                ->instanceof('Notes\Domain\ValueObject\StringLiteral');

        });
    });

    describe('->setUsername()', function (){
        it('should set the user\'s username', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $uuid = new Uuid();
            $user = new User($uuid, StringLiteral::EMPTY_STR);
            $user->setUsername($username);
            expect($user->getUsername())->equal($username);
            expect($user->getUsername())->to->be
                ->instanceof('Notes\Domain\ValueObject\StringLiteral');
        });
    });

    describe('->getId()', function (){
        it('should return the user\'s id', function() {
            $faker = \Faker\Factory::create();

            $uuid = new Uuid();
            expect($uuid->isValidV4())->to->be->true();
            $username = new StringLiteral($faker->userName);
            $user = new User($uuid, $username);
            $actual = $user->getId();

            expect($actual)->to->be->instanceof('Notes\Domain\ValueObject\Uuid');
            expect($actual->__toString())->equal($uuid->__toString());
        });
    });

    describe('->getEmail()', function (){
        it('should return the user\'s email', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $user = new User(new Uuid(), $username);
            $email = new StringLiteral($faker->email);

            $user->setEmail($email);
            expect($user->getEmail())->equal($email);
        });
    });

    describe('->getFirstName()', function (){
        it('should return the user\'s first name', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $uuid = new Uuid();
            $user = new User($uuid, $username);

            $first = new StringLiteral($faker->firstName);
            $user->setFirstName($first);

            expect($user->getFirstName())->equal($first);
        });
    });

    describe('->getLastName()', function (){
        it('should return the user\'s last name', function() {
            $faker = \Faker\Factory::create();
            $uuid = new Uuid();
            $username = new StringLiteral($faker->userName);
            $uuid = new Uuid();
            $user = new User($uuid, $username);

            $lastName = new StringLiteral($faker->lastName);
            $user->setLastName($lastName);

            expect($user->getLastName())->equal($lastName);
        });
    });




});
