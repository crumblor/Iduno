<?php $title = "Edit";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Edito "<?= $post["category_name"]?>"</h1>

<form method="POST">
    <input name="category_name" value="<?= $post["category_name"] ?? ""?>"/>
    <input name="id" value="<?= $post["id"]?>" type="hidden">
    <button>
    <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
    </button>
</form>
<?php if(isset($errors["category_name"])) { ?>
       <p><?= $errors["category_name"] ?></p>
    <?php } ?>
<?php require "views/components/footer.php";?>
    