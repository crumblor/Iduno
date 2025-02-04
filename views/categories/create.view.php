<?php $title = "Create";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Izveidot jaunu kategoriju!</h1>

<form method="POST">
    <input name="category_name" placeholder="Jaunu kategoriju?" value="<?= $_POST['category_name'] ?? ""?>"/>
    <button>
    <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
    </button>
</form>
<?php if(isset($errors["category_name"])) { ?>
       <p><?= $errors["category_name"] ?></p>
    <?php } ?>
<?php require "views/components/footer.php";?>
    