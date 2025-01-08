<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="css/styles_v1.css">
</head>
<body>
    <h1>Blogs</h1>

    <form>
        <input name="search_query" value="<?= $_GET['search_query'] ?? ""?>"/>
        <button>🔍🔎</button>
    </form>

    <?php if(count($posts) == 0) { ?>
    <h3>That aint a real thing!<h3>
    <?php } ?>

    <ul>
    <?php foreach($posts as $post) { ?>
        <li><?= $post["content"] ?></li>
    <?php } ?>
    </ul>
</body>
</html>
    