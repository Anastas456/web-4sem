<?php

declare(strict_types=1);

namespace App\Core\Book\Factory;

use App\Core\Book\Document\Book;

class BookFactory
{
    public function create(
        string $isbn,
        string $title,
        string $status
    ): Book {
        $book = new Book(
            $isbn,
            $title,
            $status
        );

        return $book;
    }

    public function update(
        Book $book = null,
        string $title,
        string $status
    ): Book {
        $book->setTitle($title);
        $book->setStatus($status);

        return $book;
    }
}