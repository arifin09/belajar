<?php namespace Bantenprov\ProfilNpwp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The ProfilNpw facade.
 *
 * @package Bantenprov\ProfilNpwp
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilNpw extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'profil-npwp';
    }
}
