<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
    require "functions.php";
    require "Database.php";
    $config = require("config.php");

    $db = new Database($config["database"]);

    $posts = $db->query("SELECT * FROM posts")->fetchAll();

    if(isset($_GET["search_query"]) && ($_GET["search_query"]) !== "") {
        $posts = $db->query("SELECT * FROM  posts WHERE content LIKE  '%" . $_GET["search_query"]. "%'")->fetchAll();
    }

    echo "<h1>Blooooogs</h1>";

    echo "<form>";
        echo '<input name="search_query"/>';
        echo '<button>🔍🔎</button>';
    echo "</form>";

    echo "<ul>";
    foreach($posts as $post) {
        echo "<li>" . $post["content"] . "</li>";
    }
    echo "</ul>";
?>
</body>
</html>