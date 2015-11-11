<?php
/**
 * Created by Brent Barker
 */

use Notes\Domain\ValueObject\Uuid;

describe('ValueObject\Uuid', function() {

  describe('->__construct()', function() {
    it('should return a uuid object', function() {
      $actual = new Uuid();

      expect($actual)->to->be->instanceof(
        'ValueObject\Uuid'
      );
    });
  });


  describe('->__toString()', function() {
    it('should return a valid v4 UUID identifier', function () {
      $actual = new Uuid();
      $uuid = $actual->__toString();
      $regex = '/[a-f0-9]{8}\-[a-f0-9]{4}\-4[a-f0-9]{3}\-(8|9|a|b)[a-f0-9]{3}\-[a-f0-9]{12}/';
      expect(is_string($uuid))->true();
      expect(preg_match($regex, $uuid))->equal(1);
      echo 'UUID: ' . $uuid . PHP_EOL;
    });
  });
});
