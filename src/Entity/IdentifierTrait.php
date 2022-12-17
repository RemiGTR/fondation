<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;

trait IdentifierTrait
{
    #[ApiProperty(writable: false, readableLink: false, writableLink: false)]
    protected ?string $identifier = null;

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }
}
