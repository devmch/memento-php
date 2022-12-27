<header id="header" class="head">
    <a class="h-logo" href="/">
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

            <?php
                if(isset($_SESSION["useruid"])){
                    echo "<li><a class='pro' href='profile.php'>Profile</a></li>";
                    echo "<li><a class='pro' href='db/includes/logout.inc.php'>Logout</a></li>";
                }
                else{
                    echo "<li><a class='pro' href='signup.php'>Sign Up</a></li>";
                    echo "<li><a class='pro' href='login.php'>Login</a></li>";
                }
            ?>
        </ul>
    </nav>


    <!-- <a href="#" class="cta">
    <div class="profilepicture">
        <img src="https://res.cloudinary.com/coolors/image/upload/t_60x60/v1636729140/live/custom-avatars/fzhn1oqool8tpb2am7hx.jpg"></img>
        </div>
    </a> -->


</header>