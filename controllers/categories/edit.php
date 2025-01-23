<?php  

require "Validator.php";

if(isset($_GET["id"])) {
    $sql = "SELECT * FROM categories WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["category_name"], max: 50)) {
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

    if(empty($errors)) {
        $sql = 'UPDATE categories
        SET category_name = :category_name
        WHERE id = :id';
        $params = ["category_name" => $_POST["category_name"], "id" => $_POST["id"]];
        $post = $db->query($sql, $params)->fetch();
        header('Location: /show?id=' . $_POST["id"]); 
        exit();
    }
}
if(!empty($post)) {
    require "views/categories/edit.view.php";
}
?>