<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait BaseUuid
{
    #[ORM\Column(type: Types::GUID, unique: true, nullable: true, insertable: false, updatable: false, options: ['default' => 'uuid_generate_v1()'])]
    #[ApiProperty(
        writable: false,
        identifier: true,
        openapiContext: ['type' => 'string']
    )]
    private ?string $uuid;

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}
