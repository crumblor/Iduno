<?php  

require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        $_SESSION["flash"] = "Ieraksts nederigs!";
    }

    if(empty($errors)) {
        $sql = 'INSERT  INTO  posts
        (content)
        VALUES
        (:content)';
        $params = ["content" => $_POST["content"]];
        $post = $db->query($sql, $params)->fetch();
        $_SESSION["create"] = "Ieraksts izveidots!";
        header("Location: /"); 
        exit();
    }
}
require "views/posts/create.view.php";
?>