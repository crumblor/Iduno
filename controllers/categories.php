<?php
    echo '<link rel="stylesheet" href="css/styles_v1.css">';

    $select = "SELECT * FROM categories";
    $params = [];
   if(isset($_GET["search_query"]) && ($_GET["search_query"]) !== "") {
        $search_query = "%" . $_GET["search_query"] . "%";
        $select .= " WHERE category_name LIKE :nam";
        $params = ["nam" => $search_query];
    }
        $categories = $db->query($select, $params)->fetchAll();

    require "../views/categories.view.php";