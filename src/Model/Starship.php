<?php

namespace App\Model;

class Starship
{
    public function __construct(
        private int $id,
        private string $name,
        private string $class,
        private string $capitan,
        private string $status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Starship
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Starship
    {
        $this->name = $name;

        return $this;
    }

    public function getCapitan(): string
    {
        return $this->capitan;
    }

    public function setCapitan(string $capitan): Starship
    {
        $this->capitan = $capitan;

        return $this;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): Starship
    {
        $this->class = $class;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): Starship
    {
        $this->status = $status;

        return $this;
    }
}
