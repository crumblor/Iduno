<?php  

require "Validator.php";

$select = "SELECT * FROM  categories";
$params = [];
$categories = $db->query($select, $params)->fetchAll();

if(isset($_GET["id"])) {
    $sql = "SELECT * FROM posts WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["content"], max: 50)) {
        $_SESSION["flash"] = "Ieraksts nederigs!";
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

    if(empty($errors)) {
        $sql = 'UPDATE posts
        SET content = :content, category_id = :category_id
        WHERE id = :id';
        $params = ["content" => $_POST["content"], "id" => $_POST["id"], "category_id" => $_POST["category_id"]];
        $post = $db->query($sql, $params)->fetch();
        $_SESSION["flash"] = "Ieraksts editots!";
        header('Location: /show?id=' . $_POST["id"]); 
        exit();
    }
}
if(!empty($post)) {
    require "views/posts/edit.view.php";
}
?>