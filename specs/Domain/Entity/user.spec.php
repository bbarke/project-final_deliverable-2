<?php
/**
 * Created by Brent Barker
 */

use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\StringLiteral;

describe('Notes\Domain\Entity\User', function(){
    describe('->__construct()', function (){
       it('should return a User object', function() {
           $actual = new User(StringLiteral::EMPTY_STR);
           expect($actual)->to->be->instanceof('Notes\Domain\Entity\User');
       });
    });

    describe('->getUsername()', function (){
        it('should return the user\'s username', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $user = new User($username);
            expect($user->getUsername())->equal($username);
        });
    });

    describe('->setUsername()', function (){
        it('should set the user\'s username', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $user = new User(StringLiteral::EMPTY_STR);
            $user->setUsername($username);
            expect($user->getUsername())->equal($username);
        });
    });

    describe('->getId()', function (){
        it('should return the user\'s id', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $user = new User($username);

            expect($user->getId())->to->be->instanceof('Notes\Domain\ValueObject\Uuid');
        });
    });

    describe('->getEmail()', function (){
        it('should return the user\'s email', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $user = new User($username);
            $email = new StringLiteral($faker->email);

            $user->setEmail($email);
            expect($user->getEmail())->equal($email);
        });
    });

    describe('->getFirstName()', function (){
        it('should return the user\'s first name', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $user = new User($username);

            $first = new StringLiteral($faker->firstName);
            $user->setFirstName($first);

            expect($user->getFirstName())->equal($first);
        });
    });

    describe('->getLastName()', function (){
        it('should return the user\'s last name', function() {
            $faker = \Faker\Factory::create();
            $username = new StringLiteral($faker->userName);
            $user = new User($username);

            $lastName = new StringLiteral($faker->lastName);
            $user->setLastName($lastName);

            expect($user->getLastName())->equal($lastName);
        });
    });




});
