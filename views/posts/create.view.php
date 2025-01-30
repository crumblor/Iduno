<?php $title = "Create";?>
<?php $style = "css/create.css";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Izveidot bloga ierakstu!</h1>

<form method="POST">
    <input name="content" placeholder="Whats up?" value="<?= $_POST['content'] ?? ""?>"/>
    <select name="category_id">
        <?php foreach($categories as $categorie) { ?>
            <option value="<?= $categorie["id"]?>"><?= $categorie["category_name"]?></option>
        <?php } ?>
    </select>
    <button>
    <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-browser-share"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8h16" /><path d="M12.5 20h-6.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7" /><path d="M8 4v4" /><path d="M16 22l5 -5" /><path d="M21 21.5v-4.5h-4.5" /></svg>
    </button>
</form>
<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
        <?php if(isset($_SESSION["flash"])) {?>
            <p style="animation: slide 2s ease-in-out forwards;" id="warning" class="flash"><?= $_SESSION["flash"]?>
            <svg  xmlns="http://www.w3.org/2000/svg"  width="35"  height="35"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-alert-square-rounded"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>
            </p>
        <?php unset($_SESSION["flash"]); }?>
    <?php } ?>
<?php require "views/components/footer.php";?>
    