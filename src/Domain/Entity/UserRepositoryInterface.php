<?php
/**
 * Created by PhpStorm.
 * User: brent
 * Date: 11/17/2015
 * Time: 6:05 PM
 */

namespace Notes\Domain\Entity;


use Notes\Domain\ValueObject\StringLiteral;
use Notes\Domain\ValueObject\Uuid;

interface UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function add(User $user);

    /**
     * @return array
     */
    public function getUsers();

    /**
     * @param Uuid $uuid
     * @return User
     */
    public function getById(Uuid $uuid);

    /**
     * @param StringLiteral $username
     * @return User
     */
    public function getByUserName(StringLiteral $username);

    /**
     * @param Uuid $uuid
     * @param User $user
     */
    public function modifyById(Uuid $uuid, User $user);


    /**
     * @param StringLiteral $username
     * @param User $user
     */
    public function modifyByUserName(StringLiteral $username, User $user);

    /**
     * @param Uuid $uuid
     */
    public function removeById(Uuid $uuid);

}
