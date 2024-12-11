<?php

class Database {
    public function query($sql) {
        $dsn = "mysql:host=localhost;port=3306;user=root;password=root;dbname=blog_ipb23;charset=utf8mb4";
        $pdo = new PDO($dsn);

        $statement = $pdo->prepare($sql);
        $statement->execute();
        
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}