<?php $title = "Blogs";?>
<?php $style = "css/all.css";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
    <h1>Blogs</h1>

    <form>
        <input name="search_query" placeholder="Search.." value="<?= $_GET['search_query'] ?? ""?>"/>
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

    <?php if(isset($_SESSION["flash"])) {?>
        <p style="animation: slide 2s ease-in-out forwards;" id="success" class="flash"><?= $_SESSION["flash"]?>
        <svg  xmlns="http://www.w3.org/2000/svg"  width="35"  height="35"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
        </p>
    <?php unset($_SESSION["flash"]); }?>
    <?php if(isset($_SESSION["create"])) {?>
        <p style="animation: slide 2s ease-in-out forwards;" id="success" class="flash"><?= $_SESSION["create"]?>
        <svg  xmlns="http://www.w3.org/2000/svg"  width="35"  height="35"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-browser-share"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8h16" /><path d="M12.5 20h-6.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7" /><path d="M8 4v4" /><path d="M16 22l5 -5" /><path d="M21 21.5v-4.5h-4.5" /></svg>
        </p>
    <?php unset($_SESSION["create"]); }?>
<?php require "views/components/footer.php";?>
    