<?php
    echo '<link rel="stylesheet" href="css/styles_v1.css">';

    require "functions.php";
    require "Database.php";
    $config = require("config.php");

    $db = new Database($config["database"]);

    $select = "SELECT * FROM categories";
    $params = [];
   if(isset($_GET["search_query"]) && ($_GET["search_query"]) !== "") {
        $search_query = "%" . $_GET["search_query"] . "%";
        $select .= " WHERE category_name LIKE :nam";
        $params = ["nam" => $search_query];
    }
        $categories = $db->query($select, $params)->fetchAll();


    echo "<h1>Kategorijaaaaaas</h1>";

    echo "<form>";
        echo '<input name="search_query"/>';
        echo '<button>🔍🔎</button>';
    echo "</form>";

 if (count($categories) == 0) {
    echo "<h3>" . $_GET["search_query"] . " aint a real ting!<h3>";
 }

    echo "<ul>";
    foreach($categories as $categorie) {
        echo "<li>" . $categorie["category_name"] . "</li>";
    }
    echo "</ul>";