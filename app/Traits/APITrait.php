<?php

namespace App\Traits;

use App\Interfaces\APIRepositoryInterface;

trait APITrait
{
    private $apiRepository;

    public function __construct(APIRepositoryInterface $apiRepository)
    {
        $this->apiRepository = $apiRepository;
    }
}