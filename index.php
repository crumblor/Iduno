<?php

echo "<style>
body {
    /*display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;*/
    color: white;
    background: linear-gradient(to bottom, black, #510080);
    font-size: 22px;
    font-family: 'Courier New', Courier, monospace;
}

h1 {
    color: #DB3FD1;
    transition: color 0.3s ease, transform 0.3s ease;
}

h1:hover {
    color: #EE0000;
    transform: scale(1.1);
}


</style>";

$dsn = "mysql:host=localhost;port=3306;user=root;password=root;dbname=blog_ipb23;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll();

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

dd($posts);