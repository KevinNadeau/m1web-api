<?php
namespace App\API\Repository;

use App\API\Core\Database;



class CityRepository
{

    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect();
    }

    public function findAll():array
    {
        $sql = "
        SELECT city.*
        FROM destination.city;
        ";
        $query = $this->connection->query($sql);
        $query->execute();
        $results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\City');
        return $results;
    }
}