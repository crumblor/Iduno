<?php  

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!isset($_POST["content"]) || strlen($_POST["content"]) == 0 || strlen($_POST["content"]) > 50) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

    if(empty($errors)) {
        $sql = 'INSERT  INTO  posts
        (content)
        VALUES
        (:content)';
        $params = ["content" => $_POST["content"]];
        $post = $db->query($sql, $params)->fetch();
        header("Location: /"); 
        exit();
    }
}
require "views/posts/create.view.php";
?>