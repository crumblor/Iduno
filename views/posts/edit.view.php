<?php $title = "Create";?>
<?php $css = "css/styles_v3.css";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Editooo!</h1>

<form method="POST">
    <label for="content">Kļūda?</label>
    <input name="content" id="content" value="<?= $post["content"] ?? ""?>"/>
    <input name="id" value="<?= $post["id"]?>" type="hidden">
    <button>Confirm!</button>
</form>
<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
    <?php } ?>
<?php require "views/components/footer.php";?>
    