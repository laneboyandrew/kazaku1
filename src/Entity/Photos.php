<?php

namespace App\Entity;

use App\Repository\PhotosRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=PhotosRepository::class)
 * @Vich\Uploadable()
 */
class Photos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @ORM\Column(type="datetime", length=200, nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", length=200, nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $thumbnail;

    /**
     * @Vich\UploadableField(mapping="thumbnails", fileNameProperty="thumbnail" )
     */
    private $thumbnailFile;



    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void {
        $this->updatedAt = $updatedAt;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumbnailFile() {
        return $this->thumbnailFile;
    }

    /**
     * @param mixed $thumbnailFile
     */
    public function setThumbnailFile($thumbnailFile): void {
        $this->thumbnailFile = $thumbnailFile;
        if($thumbnailFile){
            $this->updatedAt = new \DateTime();
        }
    }
}
