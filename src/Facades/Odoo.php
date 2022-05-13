<?php namespace Lanz1\Laradoo\Facades;

use Lanz1\Support\Facades\Facade;

class Odoo extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return \Lanz1\Laradoo\Odoo::class; }

}
