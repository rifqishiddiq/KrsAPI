<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\KelasRepository")
 */
class Kelas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $kode_kelas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MataKuliah")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mata_kuliah;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Dosen")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dosen;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $hari_kelas;

    /**
     * @ORM\Column(type="time")
     */
    private $jam_kelas;

    /**
     * @ORM\Column(type="integer")
     */
    private $kuota;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKodeKelas(): ?string
    {
        return $this->kode_kelas;
    }

    public function setKodeKelas(string $kode_kelas): self
    {
        $this->kode_kelas = $kode_kelas;

        return $this;
    }

    public function getIdMataKuliah(): ?MataKuliah
    {
        return $this->mata_kuliah;
    }

    public function setIdMataKuliah(?MataKuliah $mata_kuliah): self
    {
        $this->mata_kuliah = $mata_kuliah;

        return $this;
    }

    public function getIdDosen(): ?Dosen
    {
        return $this->dosen;
    }

    public function setIdDosen(?Dosen $dosen): self
    {
        $this->dosen = $dosen;

        return $this;
    }

    public function getHariKelas(): ?string
    {
        return $this->hari_kelas;
    }

    public function setHariKelas(string $hari_kelas): self
    {
        $this->hari_kelas = $hari_kelas;

        return $this;
    }

    public function getJamKelas(): ?\DateTimeInterface
    {
        return $this->jam_kelas;
    }

    public function setJamKelas(\DateTimeInterface $jam_kelas): self
    {
        $this->jam_kelas = $jam_kelas;

        return $this;
    }

    public function getKuota(): ?int
    {
        return $this->kuota;
    }

    public function setKuota(int $kuota): self
    {
        $this->kuota = $kuota;

        return $this;
    }
}
