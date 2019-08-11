<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\KrsSemesterRepository")
 */
class KrsSemester
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PivotMahasiswaJurusanJenjangPendidikan")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pivot_mahasiswa;

    /**
     * @ORM\Column(type="integer")
     */
    private $semester;

    /**
     * @ORM\Column(type="integer")
     */
    private $sks;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPivotMahasiswa(): ?PivotMahasiswaJurusanJenjangPendidikan
    {
        return $this->pivot_mahasiswa;
    }

    public function setIdPivotMahasiswa(?PivotMahasiswaJurusanJenjangPendidikan $pivot_mahasiswa): self
    {
        $this->pivot_mahasiswa = $pivot_mahasiswa;

        return $this;
    }

    public function getSemester(): ?int
    {
        return $this->semester;
    }

    public function setSemester(int $semester): self
    {
        $this->semester = $semester;

        return $this;
    }

    public function getSks(): ?int
    {
        return $this->sks;
    }

    public function setSks(int $sks): self
    {
        $this->sks = $sks;

        return $this;
    }
}
