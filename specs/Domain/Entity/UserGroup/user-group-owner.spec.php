<?php
/**
 * Created by Brent Barker
 */
use Notes\Domain\Entity\UserGroup\Owner;
use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\StringLiteral;

describe('Owner', function () {
    describe('->__construct()', function () {

        it('should return a Owner object', function () {
            $actual = new Owner();
            expect($actual)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Owner');
            expect($actual)->to->be->instanceof('Notes\Domain\Entity\UserGroup\UserGroupInterface');
        });

    });

    describe('->isInGroup()', function () {

        it('check if a user is part of a group', function () {
            $owner = new Owner();

            expect($owner)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Owner');

            $bob = new User(new StringLiteral('Bob'));
            $joe = new User(new StringLiteral('joe'));
            $blah = new User(new StringLiteral('Blah'));
            $invalid = new User(new StringLiteral('not added to group'));

            $owner->addUser($bob);
            $owner->addUser($joe);
            $owner->addUser($blah);

            expect($owner->isInGroup($bob))->to->be->true;
            expect($owner->isInGroup($invalid))->to->be->false;

        });
    });

    describe('->getUsers()', function () {

        it('should return a list of users', function () {
            $owner = new Owner();

            expect($owner)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Owner');

            $bob = new User(new StringLiteral('Bob'));
            $joe = new User(new StringLiteral('joe'));
            $blah = new User(new StringLiteral('Blah'));
            $invalid = new User(new StringLiteral('not added to group'));

            $owner->addUser($bob);
            $owner->addUser($joe);
            $owner->addUser($blah);

            $expectArray = array($bob, $joe, $blah);
            $actualArray = $owner->getUsers();
            expect($actualArray)->to->be->$expectArray;
        });
    });

    describe('->removeUser()', function () {

        it('should return a list of users', function () {
            $owner = new Owner();

            expect($owner)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Owner');

            $bob = new User(new StringLiteral('Bob'));
            $joe = new User(new StringLiteral('joe'));
            $blah = new User(new StringLiteral('Blah'));

            $owner->addUser($bob);
            $owner->addUser($joe);
            $owner->addUser($blah);

            $owner->removeUser($blah);

            $expectArray = array($bob, $joe);
            $actualArray = $owner->getUsers();

            expect($actualArray)->to->be->$expectArray;
        });
    });

    describe('->getName()', function () {
        it('should return the default name of the group', function () {
            $owner = new Owner();

            expect($owner->getName())->equal('Owner');
        });
    });
});

