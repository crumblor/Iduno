<?php

    $select = "SELECT * FROM  posts";
    $params = [];
    if(isset($_GET["search_query"]) && ($_GET["search_query"]) !== "") {
        $search_query = "%" . $_GET["search_query"] . "%";
        $select .= " WHERE content LIKE :nam";
        $params = ["nam" => $search_query];
    }
        $posts = $db->query($select, $params)->fetchAll();

    require "views/index.view.php";
