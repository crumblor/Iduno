<?php $title = "Blogs";?>
<?php $style = "css/all.css";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
    <h1>Blogs</h1>

    <form>
        <input name="search_query" placeholder="Search" value="<?= $_GET['search_query'] ?? ""?>"/>
        <button>
        <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
        </button>
    </form>

    <?php if(count($posts) == 0) { ?>
    <h3>Nav ierakstu!</h3>
    <?php } ?>

    <ul>
    <?php foreach($posts as $post) { ?>
        <li><a href="show?id=<?= $post["id"]?>"> <?= htmlspecialchars($post["content"]) ?></a></li>
    <?php } ?>
    </ul>
<?php require "views/components/footer.php";?>
    