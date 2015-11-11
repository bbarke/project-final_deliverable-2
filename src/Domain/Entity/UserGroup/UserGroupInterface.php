<?php
/**
 * Created by Brent Barker
 */

namespace Notes\Domain\Entity\UserGroup;

use Notes\Domain\Entity\User;

interface UserGroupInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return bool
     */
    public function isInGroup(User $user);


    /**
     * @param User $user
     */
    public function addUser(User $user);

    /**
     * @param User $user
     * @return bool
     */
    public function removeUser(User $user);

    /**
     * @return array
     */
    public function getUsers();
}

