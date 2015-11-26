<?php

/**
 * Factories should be the only place the "new" keyword is used!
 * decouples from domain objects.
 */

/**
 * Created by PhpStorm.
 * User: brent
 * Date: 11/17/2015
 * Time: 6:08 PM
 */

namespace Notes\Domain;


interface FactoryInterface
{
    /**
     * @return mixed
     */
    public function create();
}
