<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\KrsMahasiswaRepository")
 */
class KrsMahasiswa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\KrsSemester")
     * @ORM\JoinColumn(nullable=false)
     */
    private $krs_semester;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Kelas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $kelas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdKrsSemester(): ?KrsSemester
    {
        return $this->krs_semester;
    }

    public function setIdKrsSemester(?KrsSemester $krs_semester): self
    {
        $this->krs_semester = $krs_semester;

        return $this;
    }

    public function getIdKelas(): ?Kelas
    {
        return $this->kelas;
    }

    public function setIdKelas(?Kelas $kelas): self
    {
        $this->kelas = $kelas;

        return $this;
    }
}
