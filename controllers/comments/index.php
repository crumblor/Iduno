<?php

    $select = "SELECT * FROM categories";
    $params = [];
    $posts = $db->query($select, $params)->fetchAll();

    require "views/categories/index.view.php";
