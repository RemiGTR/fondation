<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\BooleanFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiProperty;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait BaseEntity
{
    #[ORM\Column]
    #[ApiFilter(BooleanFilter::class)]
    private ?bool $status = true;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    #[ApiProperty(writable: false)]
    private ?\DateTimeInterface $createdAt;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: false)]
    #[ApiProperty(writable: false)]
    private ?\DateTimeInterface $updatedAt;


    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(): self
    {
        $this->updatedAt = new \DateTime("now");

        return $this;
    }
}
