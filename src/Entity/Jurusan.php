<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\JurusanRepository")
 */
class Jurusan
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
    private $nama_jurusan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamaJurusan(): ?string
    {
        return $this->nama_jurusan;
    }

    public function setNamaJurusan(string $nama_jurusan): self
    {
        $this->nama_jurusan = $nama_jurusan;

        return $this;
    }
}
