<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 04/09/2023
 * Time: 1:41 PM
 */

namespace App\Interfaces;



interface APIRepositoryInterface
{
    public function getAPIs($url);
}