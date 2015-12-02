<?php
/**
 * Created by PhpStorm.
 * User: brent
 * Date: 11/17/2015
 * Time: 6:45 PM
 */

namespace Notes\Persistence\Entity;


use Notes\Domain\Entity\User;
use Notes\Domain\Entity\UserRepositoryInterface;
use Notes\Domain\ValueObject\StringLiteral;
use Notes\Domain\ValueObject\Uuid;

class InMemoryUserRepository implements UserRepositoryInterface
{

    public function __construct()
    {
        $this->users = [];
    }

    public function add(User $user)
    {
        if(!$user instanceof User)
            throw new \InvalidArgumentException(
                __METHOD__ . '(): $user has to be a User object;'
            );

        $this->users[] = $user;
    }

    /**
     * @return array
     */
    public function getUsers()
    {
        // TODO: Implement getUsers() method.
    }

    /**
     * @param Uuid $uuid
     * @return User
     * @internal param $username
     */
    public function getById(Uuid $uuid)
    {
        $results = [];
        /** @var User $user */
        foreach($this->users as $user) {
            if($user ->getUsername() == $user) {
                $results[] = $user;
            }
        }

        if($this->count() === 1) {
            return $results[0];
        }

        return $results;
    }

    /**
     * @param StringLiteral $username
     */
    public function getByUserName(StringLiteral $username)
    {
        // TODO: Implement getByUserName() method.
    }

    /**
     * @param StringLiteral $search
     * @param User $newUser
     */
    public function modifyByUsername(StringLiteral $search, User $newUser)
    {
        //one way of doing it
        $oldUser = $this->getByUserName($search);
        if(!$this->removeById($oldUser->getId())) {
            throw new \RuntimeException('ERROR removing ' . serialize($oldUser));
        }
        //add user back into the array
        $this->users[] = $newUser;
    }

    /**
     * @param Uuid $uuid
     * @param User $user
     */
    public function modifyById(Uuid $uuid, User $user)
    {
        // TODO: Implement modifyById() method.
    }

    /**
     * @param Uuid $uuid
     * @return boolean
     */
    public function removeById(Uuid $uuid)
    {
        /** @var User $user */
        foreach($this->users as $i => $user) {
            if($user ->getId()->__toString() === $uuid->__toString()) {
                unset($this->users[$i]);
                return true;
            }
        }
        return false;
    }
}
