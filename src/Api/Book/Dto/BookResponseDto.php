<?php

declare(strict_types=1);

namespace App\Api\Book\Dto;


class BookResponseDto
{
    public ?string $id = null;

    public string $isbn;

    public ?string $title  = null;

    public ?string $status = null;


    public ?AuthorResponseDto $author;
}
