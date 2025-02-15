<?php  

require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["comment"], max: 255)) {
        $errors["comment"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

    if(empty($errors)) {
        $sql = 'UPDATE comments
        SET comment = :comment
        WHERE id = :comment_id';
        $params = ["comment" => $_POST["comment"], "comment_id" => $_POST["comment_id"]];
        $post = $db->query($sql, $params)->fetch();
        header('Location: /show?id=' . $_POST["post_id"]); 
        exit();
    }
}

$sql = "SELECT posts.*, categories.category_name FROM posts
        LEFT JOIN categories
        ON posts.category_id = categories.id
        WHERE posts.id = :id;";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

$sql = "SELECT id, name, comment, date 
        FROM comments 
        WHERE post_id = :post_id";
$params = ["post_id" => $_GET["id"]];
$comments = $db->query($sql, $params)->fetchAll();

$comen = count($comments);

require "views/comments/edit.view.php";
?>