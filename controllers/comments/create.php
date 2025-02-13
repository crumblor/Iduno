<?php  

require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["name"], max: 25)) {
        $errors["name"] = "Saturam jābūt ievadītam, bet ne garākam par 25 rakstzīmēm";
    }
    if(!Validator::string($_POST["comment"], max: 255)) {
        $errors["comment"] = "Saturam jābūt ievadītam, bet ne garākam par 255 rakstzīmēm";
    }

    date_default_timezone_set('Europe/Kyiv');
    $date = date("Y-m-j H:i:s");

    if(empty($errors)) {
        $sql = 'INSERT  INTO  comments
        (name, comment, post_id, date)
        VALUES
        (:name, :comment , :post_id, :date)';
        $params = ["name" => $_POST["name"], "comment" => $_POST["comment"], "post_id" => $_POST["post_id"], "date" => $date];
        $post = $db->query($sql, $params)->fetch();
        header('Location: /show?id=' . $_POST["post_id"]); 
        exit();
    } else {
        redirectIfNotFound('/show?id=' . $_POST["post_id"]);
    }
}
?>