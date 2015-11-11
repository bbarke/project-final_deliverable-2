<?php
/**
 * Created by Brent Barker
 */

namespace Notes\Domain\Entity;

use Notes\Domain\ValueObject\StringLiteral;
use Notes\Domain\ValueObject\Uuid;

class User
{
    /**
     * @var \Notes\Domain\ValueObject\StringLiteral
     */
    protected $username;

    /**
     * @var \Notes\Domain\ValueObject\StringLiteral
     */
    protected $email;

    /**
     * @var \Notes\Domain\ValueObject\StringLiteral
     */
    protected $firstName;

    /**
     * @var \Notes\Domain\ValueObject\StringLiteral
     */
    protected $lastName;

    /**
     * @var \Notes\Domain\ValueObject\Uuid
     */
    protected $id;

    /**
     * User constructor.
     * @param StringLiteral $username
     */
    public function __construct(StringLiteral $username)
    {
        $this->username = $username;
        $this->id = new Uuid();
    }

    /**
     * @return StringLiteral
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param StringLiteral $username
     * @return $this
     */
    public function setUsername(StringLiteral $username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param StringLiteral $email
     * @return $this
     */
    public function setEmail(StringLiteral $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param StringLiteral $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return StringLiteral
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param StringLiteral $lastName
     * @return $this;
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return Uuid
     */
    public function getId()
    {
        return $this->id;
    }

}
