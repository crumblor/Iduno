<?php $title = "Edit";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Edito "<?= $post["content"]?>"</h1>
<form method="POST">
    <input name="content" id="content" value="<?= $post["content"] ?? ""?>"/>
    <select name="category_id">
        <option value="">Bez kategorijas</option>
        <?php foreach($categories as $categorie) { ?>
            <option <?php if($categorie["id"] == $post["category_id"]){echo "selected";}?> value="<?= $categorie["id"]?>"><?= $categorie["category_name"]?></option>
        <?php } ?>
    </select>
    <input name="id" value="<?= $post["id"]?>" type="hidden">
    <button>
    <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
    </button>
</form>

<?php if(isset($_SESSION["flash"])) {?>
            <p style="animation: slide 2s ease-in-out forwards;" id="warning" class="flash"><?= $_SESSION["flash"]?>
            <svg  xmlns="http://www.w3.org/2000/svg"  width="35"  height="35"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-alert-square-rounded"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>
            </p>
        <?php unset($_SESSION["flash"]); }?>
<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
    <?php } ?>
<?php require "views/components/footer.php";?>
    