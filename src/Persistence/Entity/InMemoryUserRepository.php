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

    public function remove(User $user)
    {
        // TODO: Implement remove() method.
    }

    public function getUsers()
    {
        // TODO: Implement getUsers() method.
    }

    public function modify(User $user)
    {
        // TODO: Implement modify() method.
    }

    /**
     * @param StringLiteral $search
     * @param User $newUser
     */
    public function modifyByUsername(StringLiteral $search, User $newUser)
    {

        //one way of doing it

        $oldUser = $this->searchByUserName($search);
        if(!$this->remove($oldUser)) {
            throw new \RuntimeException('ERROR removing ' . serialize($oldUser));
        }
        //add user back into the array
        $this->users[] = $newUser;


        //this way can be slower
        $oldUser = $this->searchByUsername($search);
        $oldUser = $newUser;


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
