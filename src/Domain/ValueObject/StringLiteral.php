<?php

namespace Notes\Domain\ValueObject;
/**
 * Class StringLiteral
 * @package Notes\Domain\ValueObject
 */
class StringLiteral
{
  const EMPTY_STR = '';

  /** @var string */
  protected $value;

  public function __construct($value = self::EMPTY_STR)
  {
    $this->value = $value;
  }

  public function __toString()
  {
    return $this->value;
  }
}
