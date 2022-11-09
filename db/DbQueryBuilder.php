<?php

class DbQueryBuilder
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll(string $table,string $class):array{
        $query = "SELECT * FROM ${table}";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS,$class);
    }
}