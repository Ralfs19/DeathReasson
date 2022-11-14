<?php
class Collection
{
    private array $data;
    public function __construct(array $data = [])
    {
        foreach ($data as $datum){
            $this->add($datum);
        }
    }
    public function add(Data $data)
    {
        $this->data[] = $data;
    }
    public function getData(): array
    {
        return $this->data;
    }
    public function deathReasonTotals(): array
    {
        $data = [];
        foreach ($this->data as $entry) {
            $data[] = $entry->getDeathReason();
        }
        return array_count_values($data);
    }

    public function nonViolent(): array
    {
        $data = [];
        foreach ($this->data as $entry) {
            $data[] = $entry->getNonViolent();
        }
        return array_count_values(array_merge(...$data));
    }

    public function violentDeath(): array
    {
        $data = [];
        foreach ($this->data as $entry) {
            $data[] = $entry->getViolentDeath();
        }
        return array_count_values(array_merge(...$data));
    }

    public function violentDeathTypeTotals(): array
    {
        $data = [];
        foreach ($this->data as $entry) {
            $data[] = $entry->getViolationType();
        }
        return array_count_values(array_merge(...$data));
    }

}