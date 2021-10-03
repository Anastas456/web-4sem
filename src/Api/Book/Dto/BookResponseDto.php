<?php

declare(strict_types=1);

namespace App\Api\Book\Dto;


class BookResponseDto
{
    public ?string $id;

    public string $isbn;

    public ?string $title;

    public string $status;

    public ?AuthorResponseDto $author;
}