<?php
/**
 * Created by PhpStorm.
 * User: brent
 * Date: 11/17/2015
 * Time: 6:05 PM
 */

namespace Notes\Domain\Entity;


use Notes\Domain\ValueObject\Uuid;

interface UserRepositoryInterface
{
    public function add(User $user);
    public function getUsers();

    public function getById(Uuid $uuid);
    public function modifyById(Uuid $uuid, User $user);
    public function removeBId(Uuid $uuid);

}
