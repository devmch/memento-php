<?php
    include_once 'db/includes/header.php';
?>

<body> <!-- class="aalign"  ondragstart="return false;" ondrop="return false;"-->

<div id="preloader" class="loader"></div>

<header id="header">
    <a class="h-logo" href="/home.html">
        <img src="assets/head-logo-bw.svg" alt="memento logo" class="logo">
    </a>

    <nav>
        <ul class="nav_links">
            <li>
                <div class="divclr">
                    <a id="p1" class="diva" href="#">Projects</a>
                    <a id="p2" class="divb bi bi-chevron-down"></a>
                </div>
            </li>
            <li><a class="pro" href="/?about">Go Pro</a></li>
            <!-- <li><i class="bi bi-gear-fill bri popup"></i></li> -->
        </ul>
    </nav>



    <a href="#" class="cta">
        <div class="profilepicture">
            <img src="https://res.cloudinary.com/coolors/image/upload/t_60x60/v1636729140/live/custom-avatars/fzhn1oqool8tpb2am7hx.jpg"></img>
        </div>
    </a>

</header>

<main class="centerMain">
    <p style="margin-bottom: -10px;">welcome to..</p>
    <h1>memento</h1>
    <!-- <p style="margin-top: 10px;">by <a href="https://magnushvidtfeldt.com" target="_blank">Magnus Hvidtfeldt</a> -->
    <p style="margin-bottom: 35px;margin-top:15px;">simplifying projects into <br />comprehensible tasks on the go.<br><br/> suggestions? <a href="https://twitter.com/hvidtfldt" target="_blank">tweet me.</a></p>
    <a href="https://memento.today"><button>try it today!</button></a>

    <small>
        <br />
        <br />
        <br />
        Left click to toggle complete. Left click and drag to reorder.
        <br />
        Right click to delete the todo.
    </small>

</main>

<footer class="footer">
    <p>
        adfasdasd
        <br/><br/>
    </p>
    <p class="copy">© Memento by <a href="https://magnushvidtfeldt.com" target="_blank"> Magnus Hvidtfeldt</a></p>

</footer>


<?php
    include_once 'db/includes/footer.php';
?>