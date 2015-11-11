<?php
/**
 * Created by Brent Barker
 */
use Notes\Domain\Entity\UserGroup\Admin;
use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\StringLiteral;

describe('Admin', function () {
    describe('->__construct()', function () {

        it('should return a Admin object', function () {
            $actual = new Admin();
            expect($actual)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Admin');
            expect($actual)->to->be->instanceof('Notes\Domain\Entity\UserGroup\UserGroupInterface');
        });

    });

    describe('->isInGroup()', function () {

        it('check if a user is part of a group', function () {
            $admin = new Admin();

            expect($admin)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Admin');

            $bob = new User(new StringLiteral('Bob'));
            $joe = new User(new StringLiteral('joe'));
            $blah = new User(new StringLiteral('Blah'));
            $invalid = new User(new StringLiteral('not added to group'));

            $admin->addUser($bob);
            $admin->addUser($joe);
            $admin->addUser($blah);

            expect($admin->isInGroup($bob))->to->be->true;
            expect($admin->isInGroup($invalid))->to->be->false;

        });
    });

    describe('->getUsers()', function () {

        it('should return a list of users', function () {
            $admin = new Admin();

            expect($admin)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Admin');

            $bob = new User(new StringLiteral('Bob'));
            $joe = new User(new StringLiteral('joe'));
            $blah = new User(new StringLiteral('Blah'));
            $invalid = new User(new StringLiteral('not added to group'));

            $admin->addUser($bob);
            $admin->addUser($joe);
            $admin->addUser($blah);

            $expectArray = array($bob, $joe, $blah);
            $actualArray = $admin->getUsers();
            expect($actualArray)->to->be->$expectArray;
        });
    });

    describe('->removeUser()', function () {

        it('should return a list of users', function () {
            $admin = new Admin();

            expect($admin)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Admin');

            $bob = new User(new StringLiteral('Bob'));
            $joe = new User(new StringLiteral('joe'));
            $blah = new User(new StringLiteral('Blah'));

            $admin->addUser($bob);
            $admin->addUser($joe);
            $admin->addUser($blah);

            $admin->removeUser($blah);

            $expectArray = array($bob, $joe);
            $actualArray = $admin->getUsers();

            expect($actualArray)->to->be->$expectArray;
        });
    });

    describe('->getName()', function () {
        it('should return the default name of the group', function () {
            $admin = new Admin();

            expect($admin->getName())->equal('Admin');
        });
    });
});

