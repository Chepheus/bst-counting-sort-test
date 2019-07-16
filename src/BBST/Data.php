<?php

namespace BBST;

class Data
{
    private $name;
    private $city;
    private $year;

    public function __construct(string $name, string $city, int $year)
    {
        $this->name = $name;
        $this->city = $city;
        $this->year = $year;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}