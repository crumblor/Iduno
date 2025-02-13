<?php  


if(!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

$sql = "SELECT posts.*, categories.category_name FROM posts
        LEFT JOIN categories
        ON posts.category_id = categories.id
        WHERE posts.id = :id;";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

$sql = "SELECT name, comment, date 
        FROM comments 
        WHERE post_id = :post_id";
$params = ["post_id" => $_GET["id"]];
$comments = $db->query($sql, $params)->fetchAll();

if(!$post) {
    redirectIfNotFound();
}

require "views/posts/show.view.php";
?>