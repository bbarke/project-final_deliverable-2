<?php
/**
 * Author: brent
 * Date: 11/29/2015
 */
use Notes\Domain\Entity\Role\OwnerRole;

describe('Notes\Domain\Entity\Role\OwnerRole', function () {
    describe('->__construct', function () {
        it('should return a Owner Role object', function () {
            $actual = new OwnerRole();
            expect($actual)->to->be->instanceof('Notes\Domain\Entity\Role\OwnerRole');
        });
        it('should not have any permissions if non are added', function(){
            $owner = new OwnerRole();
            expect(count($owner->getPermissions()))->to->be->equal(0);
        });
    });

    describe('->__addPermission()/getPermission()', function() {
        it('should return the correct permission when added', function () {
            $owner = new OwnerRole();

            /** @var int $permission */
            $permission = 5;

            $owner->addPermission($permission);


            expect(count($owner->getPermissions()))->to->be->equal(1);
            expect($owner->getPermissions()[0])->to->be->equal($permission);
        });
    });

    describe('->__removePermission()', function(){
       it('should return the correct permission when added', function(){
           $owner = new OwnerRole();

           /** @var int $permission */
           $permission = 5;

           $owner->addPermission($permission);

           expect(count($owner->getPermissions()))->to->be->equal(1);
           expect($owner->getPermissions()[0])->to->be->equal($permission);

           $owner->removePermission($permission);

           expect(count($owner->getPermissions()))->to->be->equal(0);
       });
       it('should return false if the permission does not exist', function(){
           $owner = new OwnerRole();

           /** @var int $permission */
           $permission = 5;

           /** @var int $permission */
           $invalidPermission = 6;


           $owner->addPermission($permission);

           expect(count($owner->getPermissions()))->to->be->equal(1);
           expect($owner->getPermissions()[0])->to->be->equal($permission);

           $result = $owner->removePermission($invalidPermission);

           expect($result)->to->be->false;
       });
    });
});
