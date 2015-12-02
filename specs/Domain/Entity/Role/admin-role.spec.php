<?php
/**
 * Author: brent
 * Date: 11/29/2015
 */
use Notes\Domain\Entity\Role\AdminRole;

describe('Notes\Domain\Entity\Role\AdminRole', function () {
    describe('->__construct', function () {
        it('should return a Owner Role object', function () {
            $actual = new AdminRole();
            expect($actual)->to->be->instanceof('Notes\Domain\Entity\Role\AdminRole');
        });
        it('should show zero permissions if non are added', function(){
            $admin = new AdminRole();
            expect(count($admin->getPermissions()))->to->be->equal(0);
        });
    });

    describe('->__addPermission()/getPermission()', function() {
        it('should return the correct permission when added', function () {
            $admin = new AdminRole();

            /** @var int $permission */
            $permission = 5;

            $admin->addPermission($permission);


            expect(count($admin->getPermissions()))->to->be->equal(1);
            expect($admin->getPermissions()[0])->to->be->equal($permission);
        });
    });

    describe('->__removePermission()', function(){
       it('should return the correct permission when added', function(){
           $admin = new AdminRole();

           /** @var int $permission */
           $permission = 6;

           $admin->addPermission($permission);

           expect(count($admin->getPermissions()))->to->be->equal(1);
           expect($admin->getPermissions()[0])->to->be->equal($permission);

           $admin->removePermission($permission);

           expect(count($admin->getPermissions()))->to->be->equal(0);
       });
        it('should return false if the permission does not exist', function(){
            $admin = new AdminRole();
            /** @var int $permission */
            $permission = 5;

            /** @var int $invalidPermission */
            $invalidPermission = 6;
            $admin->addPermission($permission);

            expect(count($admin->getPermissions()))->to->be->equal(1);
            $result = $admin->removePermission($invalidPermission);
            expect($result)->to->be->false;

        });
    });
});
