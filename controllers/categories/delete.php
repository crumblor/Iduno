<?php  

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = 'DELETE FROM categories
    WHERE id = :id;
    UPDATE posts
    SET category_id = NULL
    WHERE category_id = :category_id;';
    $params = ["id" => $_POST["id"], "category_id" => $_POST["id"]];
    $post = $db->query($sql, $params)->fetch();
    header('Location: /categories'); 
    exit();
} else {
    redirectIfNotFound();
}
?>