<?php

class Data
{
    private string $date;
    private string $deathReason;
    private array $nonViolent;
    private array $violentDeath;
    private array $violationType;

    public function __construct(string $date, string $deathReason, array $nonViolent, array $violentDeath, array $violationType)
    {

        $this->date = $date;
        $this->deathReason = $deathReason;
        $this->nonViolent = $nonViolent;
        $this->violentDeath = $violentDeath;
        $this->violationType = $violationType;
    }
    public function getDeathReason(): string
    {
        return $this->deathReason;
    }
    public function getNonViolent(): array
    {
        return $this->nonViolent;
    }
    public function getViolentDeath(): array
    {
        return $this->violentDeath;
    }
    public function getViolationType(): array
    {
        return $this->violationType;
    }
}