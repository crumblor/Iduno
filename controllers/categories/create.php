<?php  

require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["category_name"],min: 3 ,max: 25)) {
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 25 rakstzīmēm";
    }

    if(empty($errors)) {
        $sql = 'INSERT  INTO  categories
        (category_name)
        VALUES
        (:category_name)';
        $params = ["category_name" => $_POST["category_name"]];
        $post = $db->query($sql, $params)->fetch();
        header("Location: /categories"); 
        exit();
    }
}
require "views/categories/create.view.php";
?>