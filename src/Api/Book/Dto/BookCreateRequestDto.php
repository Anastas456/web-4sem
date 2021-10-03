<?php

declare(strict_types=1);

namespace App\Api\Book\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class BookCreateRequestDto
{
    /**
     * @Assert\Length(17)
     */
    public string $isbn = '';

    /**
     * @Assert\Length(max=50, min=2)
     */
    public ?string $title = null;

    /**
     * @Assert\Length(max=20, min=3)
     */
    public ?string $status = null;

    
}
