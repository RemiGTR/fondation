<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\State\ApiStatusProvider;

#[ApiResource(
    operations: [
        new Get(
            uriTemplate: '/status',
            provider: ApiStatusProvider::class
        ),
    ]
)]
enum Status: string
{
    case GTR_CORE_API = 'VALID';
}
