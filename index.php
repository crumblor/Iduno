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

    $select = "SELECT * FROM  posts";
    $params = [];
    if(isset($_GET["search_query"]) && ($_GET["search_query"]) !== "") {
        $search_query = "%" . $_GET["search_query"] . "%";
        $select .= " WHERE content LIKE :nam";
        $params = ["nam" => $search_query];
    }
        $posts = $db->query($select, $params)->fetchAll();


    echo "<h1>Blooooogs</h1>";

    echo "<form>";
        echo '<input name="search_query"/>';
        echo '<button>🔍🔎</button>';
    echo "</form>";

 if (count($posts) == 0) {
    echo "<h3>" . $_GET["search_query"] . " aint a real ting!<h3>";
 }

    echo "<ul>";
    foreach($posts as $post) {
        echo "<li>" . $post["content"] . "</li>";
    }
    echo "</ul>";
?>
</body>
</html>