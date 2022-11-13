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


    public function selectAll(string $table, string $class): array
    {
        $query = "SELECT * FROM ${table}";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function insert($table, $params)
    {
        $query = sprintf("INSERT INTO %s (%s) VALUES (%s) ",
            $table,
            implode(", ", array_keys($params)),
            ":" . implode(', :', array_keys($params)));
        $statement = $this->pdo->prepare($query);
        try{
            $statement->execute($params);
        }catch(Exception $exception){
            echo $exception->getMessage();
            die('Error insert DB');
        }
    }
}