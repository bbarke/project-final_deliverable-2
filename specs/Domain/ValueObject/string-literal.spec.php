<?php

use Notes\Domain\ValueObject\StringLiteral;

describe('StringLiteral', function () {
  describe('->__construct()', function () {

    it('should return a StringLiteral object', function () {
      $actual = new StringLiteral();

      expect($actual)->to->be->instanceof('ValueObject\StringLiteral');
    });

  });

  describe('->__construct("foo")', function () {

    it('should return a StringLeteral object with the value of "foo"', function () {
      $value = 'foo';
      $actual = new StringLiteral($value);

      expect($actual)->to->be->instanceof('ValueObject\StringLiteral');
      expect($actual->__toString())->equal($value);
    });

  });

  describe('->__toString()', function () {
    it('should return the default', function () {
      $actual = new StringLiteral();

      expect($actual->__toString())->equal('');
    });

    it('should return "foo"', function () {
      $value = 'foo';
      $actual = new StringLiteral($value);

      expect($actual->__toString())->equal($value);
    });
  });

});

