<?php

declare(strict_types=1);

namespace App\Core\Book\Service;

use App\Api\Book\Dto\BookCreateRequestDto;
use App\Api\Book\Dto\BookUpdateRequestDto;
use App\Core\Book\Document\Book;
use App\Core\Book\Factory\BookFactory;
use App\Core\Book\Repository\BookRepository;
use Psr\Log\LoggerInterface;

class BookService
{
    /**
     * @var BookRepository
     */
    private BookRepository $bookRepository;

    /**
     * @var BookFactory
     */
    private BookFactory $bookFactory;

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    public function __construct(BookRepository $bookRepository, BookFactory $bookFactory, LoggerInterface $logger)
    {
        $this->bookRepository = $bookRepository;
        $this->bookFactory    = $bookFactory;
        $this->logger         = $logger;
    }

    public function findOneBy(array $criteria): ?Book
    {
        return $this->bookRepository->findOneBy($criteria);
    }

    public function updateBook(Book $book, BookUpdateRequestDto $requestDto):Book
    {
        $result = $this->bookFactory->update(
            $book,
            $requestDto->title,
            $requestDto->status
        );

        $result = $this->bookRepository->save($result);

        $this->logger->info('Book updated!', [
            'book_isbn' => $book->getIsbn(),
            'title' => $book->getTitle(),
            'status' => $book->getStatus()
        ]);

        return $result;
    }

    public function deleteBook(Book $book)
    {
        $this->bookRepository->remove($book);

        $this->logger->info('Book deleted!', [
            'book_isbn' => $book->getIsbn(),
            'title' => $book->getTitle(),
            'status' => $book->getStatus()
        ]);
    }

    public function createBook(BookCreateRequestDto $requestDto): Book
    {
        $book = $this->bookFactory->create(
            $requestDto->isbn,
            $requestDto->title,
            $requestDto->status
        );

        $book = $this->bookRepository->save($book);

        $this->logger->info('Book created successfully', [
            'book_isbn' => $book->getIsbn(),
            'title' => $book->getTitle(),
            'status' => $book->getStatus()
        ]);

        return $book;
    }
}
