<?php
class Task {
    public int $id;
    public string $description;
    public bool $completed;

    /**
     * @param int $id
     * @param string $description
     * @param bool $completed
     */
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        return $this->completed;
    }


}