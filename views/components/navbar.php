<header>
    <nav>
        <ul>
            <li class='<?= ($_SERVER["REQUEST_URI"] == "/") ? "highlight" : ""?>'>
            <a class="nav" href="/" >Kategorijas</a></li>
            <li class='<?= ($_SERVER["REQUEST_URI"] == "/create") ? "highlight" : ""?>'>
            <a class="nav" href="/create" >Izveidot Postu</a></li>
            <li class='<?= ($_SERVER["REQUEST_URI"] == "/categories") ? "highlight" : ""?>'>
            <a class="nav" href="/categories" >Kategorijas</a></li>
            <li class='<?= ($_SERVER["REQUEST_URI"] == "/categories/create") ? "highlight" : ""?>'>
            <a class="nav" href="/categories/create" >Izveidot Kategoriju</a></li>
        </ul>
    </nav>
</header>