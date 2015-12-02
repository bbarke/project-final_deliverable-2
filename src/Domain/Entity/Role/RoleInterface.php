<?php
/**
 * Created by PhpStorm.
 * User: brent
 * Date: 11/29/2015
 * Time: 8:22 PM
 */

namespace Notes\Domain\Entity\Role;


interface RoleInterface
{

    /**
     * @param int $permission
     */
    public function addPermission(int $permission);

    /**
     * @return array
     */
    public function getPermissions();

    /**
     * @param int $permission
     * @return bool
     */
    public function removePermission(int $permission);
}
