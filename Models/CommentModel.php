<?php

//https://www.codexworld.com/store-retrieve-image-from-database-mysql-php/

namespace Models;

use DbConnectionI;
use PDOStatement;

class CommentFields extends Fields {
    public const tableName = "tb_comments";
    public const ownerID = 'owner_id';
    public const gameID = 'game_id';
    public const comment = 'comment';

    public static function getFields(): array {
        return [
            self::ownerID, self::gameID, self::comment,
        ];
    }
}

class CommentModel extends Model {
    public function getData(): array { 
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `" . CommentFields::tableName . "` ORDER BY " . Fields::ID . " DESC"
        );

        $query -> execute();

        return $query -> fetchAll();
    }

    public function getByGameID(string $gamedID): array {
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `" . CommentFields::tableName . "` WHERE " . CommentFields::gameID ."=? "
        );

        $query -> execute([$gamedID]);

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
            "INSERT INTO `" . CommentFields::tableName . "`
             VALUES (null, ?, ?, ?)"
        );
        
        return $query -> execute($data);
    }

    public function updateData(array $newData): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "UPDATE `" . UserFields::tableName . "`
             SET `" .
             CommentFields::ownerID . "`=?, `" .
             CommentFields::gameID . "`=?, `" .
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