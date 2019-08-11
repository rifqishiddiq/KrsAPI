<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DosenRepository")
 */
class Dosen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=18)
     */
    private $nip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama_dosen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(string $nip): self
    {
        $this->nip = $nip;

        return $this;
    }

    public function getNamaDosen(): ?string
    {
        return $this->nama_dosen;
    }

    public function setNamaDosen(string $nama_dosen): self
    {
        $this->nama_dosen = $nama_dosen;

        return $this;
    }
}
