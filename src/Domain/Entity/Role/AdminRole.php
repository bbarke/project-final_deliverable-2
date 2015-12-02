<?php
/**
 * Author: brent
 * Date: 11/29/2015
 */

namespace Notes\Domain\Entity\Role;


class AdminRole implements RoleInterface
{

    /** @var array */
    private $permissions;

    function __construct() {
        $this->permissions = [];
    }

    /**
     * @param int $permission
     */
    public function addPermission(int $permission)
    {
        $this->permissions[] = $permission;
    }

    /**
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param int $permission
     * @return bool
     */
    public function removePermission(int $permission)
    {
        for($i = 0; $i < count($this->permissions); $i++) {
            echo 'Permission' . $this->permissions[$i] . PHP_EOL;
            if($permission == $this->permissions[$i]) {
                unset($this->permissions[$i]);
                return true;
            }
        }

        return false;
    }
}
