<?php

declare(strict_types=1);

namespace App\Core\Book\Document;

use App\Core\Common\Document\AbstractDocument;
use App\Core\Book\Repository\BookRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @MongoDB\Document(repositoryClass=BookRepository::class, collection="books")
 */
class Book extends AbstractDocument
{
    /**
     * @MongoDB\Id
     */
    protected ?string $id = null;

    /**
     * @MongoDB\Field(type="string")
     * @MongoDB\UniqueIndex(name="book_isbn")
     */
    protected string $isbn;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $title = null;

    /**
     * @MongoDB\Field(type="string")
     */
    protected ?string $status = null;


    public function __construct(
        string $isbn,
        string $title,
        string $status
    ) {
        $this->isbn  = $isbn;
        $this->title = $title;
        $this->status = $status;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

}
