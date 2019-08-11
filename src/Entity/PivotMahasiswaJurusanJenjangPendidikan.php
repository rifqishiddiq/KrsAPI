<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PivotMahasiswaJurusanJenjangPendidikanRepository")
 */
class PivotMahasiswaJurusanJenjangPendidikan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Mahasiswa")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mahasiswa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Jurusan")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jurusan;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\JenjangPendidikan")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jenjang_pendidikan;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $nim;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMahasiswa(): ?Mahasiswa
    {
        return $this->mahasiswa;
    }

    public function setIdMahasiswa(?Mahasiswa $mahasiswa): self
    {
        $this->mahasiswa = $mahasiswa;

        return $this;
    }

    public function getIdJurusan(): ?Jurusan
    {
        return $this->jurusan;
    }

    public function setIdJurusan(?Jurusan $jurusan): self
    {
        $this->jurusan = $jurusan;

        return $this;
    }

    public function getIdJenjangPendidikan(): ?JenjangPendidikan
    {
        return $this->jenjang_pendidikan;
    }

    public function setIdJenjangPendidikan(?JenjangPendidikan $jenjang_pendidikan): self
    {
        $this->jenjang_pendidikan = $jenjang_pendidikan;

        return $this;
    }

    public function getNim(): ?string
    {
        return $this->nim;
    }

    public function setNim(string $nim): self
    {
        $this->nim = $nim;

        return $this;
    }
}
