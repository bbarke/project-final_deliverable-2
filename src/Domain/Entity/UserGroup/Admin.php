<?php
/**
 * Created by Brent Barker
 */

namespace Notes\Domain\Entity\UserGroup;


use Notes\Domain\Entity\User;

class Admin implements  UserGroupInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * @return bool
     */
    public function isInGroup(User $user)
    {
        // TODO: Implement isInGroup() method.
    }

    /**
     * @param User $user
     */
    public function addUser(User $user)
    {
        // TODO: Implement addUser() method.
    }

    /**
     * @param User $user
     * @return bool
     */
    public function removeUser(User $user)
    {
        // TODO: Implement removeUser() method.
    }

    /**
     * @return array
     */
    public function getUsers()
    {
        // TODO: Implement getUsers() method.
    }
}
