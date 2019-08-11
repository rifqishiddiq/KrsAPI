<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\MahasiswaRepository")
 */
class Mahasiswa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama_mahasiswa;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamaMahasiswa(): ?string
    {
        return $this->nama_mahasiswa;
    }

    public function setNamaMahasiswa(string $nama_mahasiswa): self
    {
        $this->nama_mahasiswa = $nama_mahasiswa;

        return $this;
    }
}
