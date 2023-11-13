<?php

namespace Daw;

class UploadUser
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function registerUser($name, $surname, $adreca, $date, $file)
    {
        
        // Prepare the SQL INSERT statement
        $sql = "INSERT INTO Alumne (Nom, Cognoms, AdrecaCarrer, DataNaixement, ResguardPagament) 
                VALUES (:name, :surname, :adreca, :date, :file)";
        $stmt = $this->pdo->prepare($sql);

        // Bind the user input to the prepared statement
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':adreca', $adreca);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':file', $file);
        // $stmt->bindParam(':password', $password);
        // $stmt->bindParam(':telefon', $telefon, \PDO::PARAM_STR);
        // $stmt->bindParam(':num_targeta', $num_targeta, \PDO::PARAM_STR);
        // $stmt->bindParam(':rol', $rol);

        // Execute the INSERT statement
        return $stmt->execute();
    }

    public function isEmailExists($name, $surname)
    {
        // Prepare a SQL query to check if the email exists in the database
        $sql = "SELECT COUNT(*) FROM Alumne WHERE Nom = :name and Cognoms = :surname";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->execute();

        $count = $stmt->fetchColumn();

        // If count is greater than 0, the email already exists
        return $count > 0;
    }
}
