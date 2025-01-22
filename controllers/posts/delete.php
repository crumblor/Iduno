<?php  

require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = 'DELETE FROM posts
    WHERE id = :id';
    $params = ["id" => $_POST["id"]];
    $post = $db->query($sql, $params)->fetch();
    $_SESSION["success"] = "Posts izdzēsts veiksmigi!";
    header('Location: /'); 
    exit();
} else {
    redirectIfNotFound();
}
?>