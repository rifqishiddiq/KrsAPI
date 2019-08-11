<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\MataKuliahRepository")
 */
class MataKuliah
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $kode_mata_kuliah;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama_mata_kuliah;

    /**
     * @ORM\Column(type="integer")
     */
    private $sks_mata_kuliah;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $keterangan_mata_kuliah;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKodeMataKuliah(): ?string
    {
        return $this->kode_mata_kuliah;
    }

    public function setKodeMataKuliah(string $kode_mata_kuliah): self
    {
        $this->kode_mata_kuliah = $kode_mata_kuliah;

        return $this;
    }

    public function getNamaMataKuliah(): ?string
    {
        return $this->nama_mata_kuliah;
    }

    public function setNamaMataKuliah(string $nama_mata_kuliah): self
    {
        $this->nama_mata_kuliah = $nama_mata_kuliah;

        return $this;
    }

    public function getSksMataKuliah(): ?int
    {
        return $this->sks_mata_kuliah;
    }

    public function setSksMataKuliah(int $sks_mata_kuliah): self
    {
        $this->sks_mata_kuliah = $sks_mata_kuliah;

        return $this;
    }

    public function getKeteranganMataKuliah(): ?string
    {
        return $this->keterangan_mata_kuliah;
    }

    public function setKeteranganMataKuliah(?string $keterangan_mata_kuliah): self
    {
        $this->keterangan_mata_kuliah = $keterangan_mata_kuliah;

        return $this;
    }
}
