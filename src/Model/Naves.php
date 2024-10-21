<?php

namespace App\Model;

class Naves
{
    public function __construct(
        private int    $id,
        private string $name,
        private string $class,
        private string $captain,
        private string $status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function setCaptain(string $captain): void
    {
        $this->captain = $captain;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }


}
