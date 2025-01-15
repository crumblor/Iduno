<?php $title = "Create";?>
<?php $css = "css/styles_v3.css";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Izveidot bloga ierakstu!</h1>

<form method="POST">
    <label for="content">Kas sodien galvã?</label>
    <input name="content" id="content" value="<?= $_POST['content'] ?? ""?>"/>
    <?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
    <?php } ?>
    <button>Post!</button>
</form>
<?php require "views/components/footer.php";?>
    