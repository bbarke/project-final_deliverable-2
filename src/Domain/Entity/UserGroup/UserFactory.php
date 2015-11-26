<?php
/**
 * Created by PhpStorm.
 * User: brent
 * Date: 11/17/2015
 * Time: 6:17 PM
 */

namespace Notes\Domain\Entity\UserGroup;


use Notes\Domain\Entity\User;
use Notes\Domain\FactoryInterface;
use Notes\Domain\ValueObject\StringLiteral;
use Notes\Domain\ValueObject\Uuid;

class UserFactory
    implements FactoryInterface
{

    /**
     * @return \Notes\Domain\Entity\User
     */
    public function create()
    {
        return new User(new Uuid(), StringLiteral::EMPTY_STR);
    }
}
