<?php
/**
 * Created by Brent Barker
 */

namespace Notes\Domain\Entity\UserGroup;

use Notes\Domain\Entity\User;

interface UserGroupInterface
{
    //complete this insterface
    //public etc..
    //we want a interface because we are going to have several groups, and we want them
    //to be able to interact with each other


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


    //write tests for UserGroup\Admin and UserGroup\Admin
    //unit test for User
    //only implement User

    //implemnet user object
    //

    //first name, last name, email, username.

    /*
     * ipmlement User
     * Usergroup interface
     * User, Usergroup owner, Usergupe admin
     */




}

