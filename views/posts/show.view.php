<?php $title = "Show";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>

<h1><?= htmlspecialchars($post["content"])?></h1>

<div class="show-actions">
    <div>
        <p id="categorie"><?= $post["category_name"] ?></p>
        <div class="show-buttons">
            <a href="edit?id=<?= $post["id"]?>">
                Edit!
                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
            </a>
            <form method="POST" action="/delete">
                <input name="id" value="<?= $post["id"]?>" type="hidden">
                <button>
                    Delete!
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                </button>
            </form>
        </div>
    </div>
</div>
    <h2>Comments!</h2>
<div class="comments" style="grid-template: repeat(<?=$comen?>, max-content) / 50% 50%">
    <?php foreach($comments as $comment) { ?>
        <?php $date = new DateTime($comment["date"]);?>
            <div class="comment">
                <div class="comment-stuff">
                    <div class="name-time">
                        <div><?= $comment["name"]?></div>
                        <div><?= date_format($date, "Y. \\g\\a\\d\\a j. M H:i")?></div>
                    </div>
                    <div class="comment-body">
                        <p><?= $comment["comment"]?></p>
                    </div>   
                </div>
                <div class="comment-buttons">
                    <div class="show-buttons">
                    <a href="comments/edit?id=<?= $post["id"]?>&comment_id=<?= $comment["id"]?>">
                            Edit!
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                        </a>
                        <form method="POST" action="/comments/delete">
                            <input name="id" value="<?= $comment["id"]?>" type="hidden">
                            <input name="post_id" value="<?= $post["id"]?>" type="hidden">
                            <button>
                                Delete!
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    <?php }?>
    <div class="comment" id="create-comment">
        <form method="POST" class="action-form" action="/comments/create" class="input-form">
            <div class="comment-stuff">
                <div>
                    <input id="name" name="name" placeholder="Name..">    
                </div>
                <div>
                    <textarea name="comment" placeholder="Your comment.."></textarea>
                    <input name="post_id" value="<?= $post["id"]?>" type="hidden">
                </div>   
            </div>
            <div class="comment-buttons">
                <div class="show-buttons">
                    <button class="comment">
                        Comment!
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-message"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                    </button>
                </div>
            </div>
                
        </form>
    </div>
</div>
    <?php if(isset($_SESSION["flash"])) {?>
        <p style="animation: slide 2s ease-in-out forwards;" id="success" class="flash"><?= $_SESSION["flash"]?>
            <svg  xmlns="http://www.w3.org/2000/svg"  width="35"  height="35"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
        </p>
    <?php unset($_SESSION["flash"]); }?>

<?php require "views/components/footer.php";?> 