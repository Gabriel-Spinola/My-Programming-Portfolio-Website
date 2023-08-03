<?php

//https://www.codexworld.com/store-retrieve-image-from-database-mysql-php/

namespace Models;

use PDOStatement;

class CommentFields extends Fields {
    public const tableName = "tb_comments";

    public const ownerID = 'owner_id';
    public const comment = 'comment';

    public static function getFields(): array {
        return [
            self::ownerID, self::comment,
        ];
    }
}

class CommentModel extends Model {
    public function getData(): array { 
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `" . UserFields::tableName . "` ORDER BY " . UserFields::ID . " DESC"
        );

        $query -> execute();

        return $query -> fetchAll();
    }

    public function findData(string $id): PDOStatement {
        $query = $this->pdo->connect()->prepare(
            "SELECT * FROM `" . UserFields::tableName . "`
             WHERE `" . Fields::ID . "`=?"
        );

        $query->execute([$id]);
        
        return $query;
    }

    // public function findByName(string $name, string $key): PDOStatement {
    //     $id = -1;
    
    //     foreach ($this->getData() as $$key => $row) {
    //         if ($row[UserFields::username] == $name && $row[UserFields::password] == $key) {
    //             $id = $row[Fields::ID];

    //             break;
    //         }
    //     }

    //     return $this->findData($id);
    // }

    public function insertData(array $data): bool { 
        $query = $this -> pdo -> connect() -> prepare(
            "INSERT INTO `" . UserFields::tableName . "`
             VALUES (null, ?, ?)"
        ); 
        
        return $query -> execute($data);
    }

    public function updateData(array $newData): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "UPDATE `" . UserFields::tableName . "`
             SET `" .
             CommentFields::ownerID . "`=?, `" .
             CommentFields::comment . "`=?, `
             WHERE `" . UserFields::ID . "` = ?"
        ); 
        
        return $query -> execute($newData);
    }

    public function deleteData(int $id): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "DELETE FROM `" . UserFields::tableName . "` WHERE `" . UserFields::ID . "`=?"
        );

        return $query -> execute([$id]);
    }
}