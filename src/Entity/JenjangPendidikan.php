<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\JenjangPendidikanRepository")
 */
class JenjangPendidikan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=191)
     */
    private $tingkatan;

    /**
     * @ORM\Column(type="integer")
     */
    private $sks_minimal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTingkatan(): ?string
    {
        return $this->tingkatan;
    }

    public function setTingkatan(string $tingkatan): self
    {
        $this->tingkatan = $tingkatan;

        return $this;
    }

    public function getSksMinimal(): ?int
    {
        return $this->sks_minimal;
    }

    public function setSksMinimal(int $sks_minimal): self
    {
        $this->sks_minimal = $sks_minimal;

        return $this;
    }
}
