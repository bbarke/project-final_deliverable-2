<?php
/**
 * File name: user.spec.php
 * Project: notes-api
 * PHP version 5
 * @category  PHP
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * @link      http://donbstringham.us
 * $LastChangedDate$
 * $LastChangedBy$
 */

use Notes\Domain\Entity\User;

describe('Notes\Domain\Entity\User', function () {
    describe('->__construct()', function () {
        it('should return a User object', function () {
            $actual = new User();

            expect($actual)->to->be->instanceof('\Notes\Domain\Entity\User');
        });
    });
    describe('->getUsername()', function () {
        it('should return the user\'s username', function () {
            $faker = \Faker\Factory::create();
            $username = $faker->userName;

            $user = new User();

            expect($user->getUsername())->equal($username);
        });
    });
});
