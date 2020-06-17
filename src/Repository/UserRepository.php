<?php

namespace App\Repository;

use App\Database\ConnectionHandler;
use Exception;

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class UserRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'user';

    /**
     * Erstellt einen neuen benutzer mit den gegebenen Werten.
     *
     * Das Passwort wird vor dem ausführen des Queries noch mit dem SHA1
     *  Algorythmus gehashed.
     *
     * @param $firstName Wert für die Spalte firstName
     * @param $lastName Wert für die Spalte lastName
     * @param $email Wert für die Spalte email
     * @param $password Wert für die Spalte password
     *
     * @throws Exception falls das Ausführen des Statements fehlschlägt
     */
    public function create($firstName, $lastName, $email, $password)
    {
        $password = sha1($password);

        $query = "INSERT INTO $this->tableName (firstName, lastName, email, password) VALUES (?, ?, ?, ?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ssss', $firstName, $lastName, $email, $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        return $statement->insert_id;
    }

    public function login($email, $password){

        //Abfrage auf der Datenbank
        $query = "Select email, password from $this->tableName where email = ?";

        //
        $statement = connectionHandler::getConnection()->prepare($query);
        $statement->bind_param('s', $email);

        // Das Statement absetzen
        $statement->execute();

        //Resultat der Abfrage auslesen
        $result = $statement->get_result();
        if (!$result) {
            throw new Exception($statement->error);
        }
        
        $row = $result->fetch_object();

        $result->close();
        if($row->email == $email && $row->password == sha1($password)){
            
            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $row->email;
        }
    }

    public function change($firstName, $lastName, $password, $id){

        $password = sha1($password);

        $query = "UPDATE $this->tableName SET firstName = ?, lastName = ?, password = ? where id = ?";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('sssi', $firstName, $lastName, $password, $id);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }
        return $statement->insert_id;
    }
}
