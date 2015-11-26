<?php
/**
 * Created by PhpStorm.
 * User: brent
 * Date: 11/17/2015
 * Time: 6:45 PM
 */

use Notes\Domain\ValueObject\StringLiteral;
use Notes\Persistence\Entity\InMemoryUserRepository;
use Notes\Domain\Entity\User;

describe('Notes\Persistence\Entity\InMemoryUserRepository', function(){
    beforeEach(function(){
        $this->repo = new InMemoryUserRepository();

    });

    describe('->__construct', function(){
       it('should construct an InMemoryUserRepository', function() {
           expect($this->repo)->to->be->instanceof('Notes\Persistence\Entity\InMemoryUserRepository');
       });
    });
    describe('->add()', function(){
        it('should add 1 user to the repository', function(){
            $this->repo->add($this->userFactory->create());

            expect($this->repo->count())->to->be->equal(1);
        });
    });

    describe('->getByUsername()', function() {
        it('should return a single User object', function() {
            /** @var User $user */
            $user = $this->userFactory->create();
            $user->setUsername(new StringLiteral('harrie'));

            $this->repo->addUser($user);

            /** @var User $user */
            $actual = $this->repo->getByUsername('harrie');

            expect($actual)->to->be->instanceof('Notes\Domain\Entity\User');

        });
    });

    //public function add(User $user);
    //public function remove(User $user);
    //public function getUsers();
    //public function modify(User $user);
    //public function getByUsername($user);
    //public function removeByUsername($user);
    //public function count();



});
