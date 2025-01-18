<?php $title = "Blogs";?>
<?php require "components/header.php";?>
<?php require "components/navbar.php";?>
    <h1>Kategorijaaaaaas</h1>

    <form>
        <input name="search_query" value="<?= $_GET['search_query'] ?? ""?>"/>
        <button>🔍🔎</button>
    </form>

    <?php if(count($categories) == 0) { ?>
    <h3>That aint a real thing!<h3>
    <?php } ?>

    <ul>
    <?php foreach($categories as $category) { ?>
        <li><?= $category["category_name"] ?></li>
    <?php } ?>
    </ul>
    <?php require "components/footer.php";?>
    