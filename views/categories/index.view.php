<?php $style = "css/categorie.css";?>
<?php $title = "Kategorijas";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
    <h1>Kategories</h1>

    <?php if(count($posts) == 0) { ?>
    <h3>Nav ierakstu!</h3>
    <?php } ?>

    <ul>
    <?php foreach($posts as $post) { ?>
        <li><a href="show?id=<?= $post["id"]?>"> <?= htmlspecialchars($post["category_name"]) ?></a></li>
    <?php } ?>
    </ul>
<?php require "views/components/footer.php";?>
    