<?php

declare(strict_types=1);

namespace App\Api\Book\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class BookUpdateRequestDto
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=50, min=2)
     */
    public ?string $title = null;

    public ?string $status = null;
}