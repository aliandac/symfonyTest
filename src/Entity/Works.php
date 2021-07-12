<?php

namespace App\Entity;

use App\Repository\WorksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorksRepository::class)
 */
class Works
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $job;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="integer")
     */
    private $estimated_duration;

    /**
     * @ORM\Column(type="integer")
     */
    private $dev_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getEstimatedDuration(): ?int
    {
        return $this->estimated_duration;
    }

    public function setEstimatedDuration(int $estimated_duration): self
    {
        $this->estimated_duration = $estimated_duration;

        return $this;
    }

    public function getDevId(): ?int
    {
        return $this->dev_id;
    }

    public function setDevId(int $dev_id): self
    {
        $this->dev_id = $dev_id;

        return $this;
    }
}
