<?php  

require "Validator.php";

$select = "SELECT * FROM  categories";
$params = [];
$categories = $db->query($select, $params)->fetchAll();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        $_SESSION["flash"] = "Ieraksts nederigs!";
    }
    if(!Validator::number($_POST["category_id"])) {
        $errors["content"] = "Kautkas tev nav ar category_id";
        $_SESSION["flash"] = "Ieraksts nederigs!";
    }

    if(empty($errors)) {
        $sql = 'INSERT  INTO  posts
        (content, category_id)
        VALUES
        (:content, :category_id)';
        $params = ["content" => $_POST["content"], "category_id" => $_POST["category_id"]];
        $post = $db->query($sql, $params)->fetch();
        $_SESSION["create"] = "Ieraksts izveidots!";
        header("Location: /"); 
        exit();
    }
}
require "views/posts/create.view.php";
?>