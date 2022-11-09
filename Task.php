<?php
class Task {
    private int $id;
    private string $description;
    private bool $completed;

    /**
     * @param int $id
     * @param string $description
     * @param bool $completed
     */
    public function __construct(string $description)
    {
        $this->description = $description;
        $this->completed = false;
    }

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
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        return $this->completed;
    }
    public function complete():void{
        $this->completed = true;
    }
    /**
     * @param bool $completed
     */
    public function setCompleted(bool $completed): void
    {
        $this->completed = $completed;
    }
}