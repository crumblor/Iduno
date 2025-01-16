<?php $title = "Posts";?>
<?php $css = "css/styles_v3.css";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1><?= htmlspecialchars($post["content"])?></h1>
<a href="edit?id=<?= $post["id"]?>"> Edit!</a>
<form method="POST" action="/delete">
    <input name="id" value="<?= $post["id"]?>" type="hidden">
    <button>Delete!</button>
</form>
<?php require "views/components/footer.php";?>
    