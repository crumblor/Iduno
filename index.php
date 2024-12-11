<?php

echo "<style>
body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: left;
    color: white;
    background: linear-gradient(to bottom, black, #510080);
    font-size: 25px;
    font-family: 'Courier New', Courier, monospace;
}
li {
    background: linear-gradient(to bottom, #ff4fe7, #f433ff);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    transition: color 0.3s ease, transform 0.3s ease;
}
li:hover {
    color: #e000c2;
    transform: scale(1.01);
}
</style>";

require "functions.php";
require "Database.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts");

//dd($posts[0]["content"]);

echo "<ul>";
foreach($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";