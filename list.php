<?php
session_start();

$msg = "";

if(isset($_POST["addtodo"])) {
    $text = mysqli_real_escape_string($conn, $_POST["todo"]);
    $user_id = $_SESSION["userid"];

    // insert
    $sql = "INSERT INTO todos (todo, user_id) VALUES ('$text', '$user_id')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $msg = "Todo added";
    } else {
        $msg = "Failed to add todo";
    }
}

?>

<!DOCTYPE html>
<!-- 
    @author: Magnus Hvidtfeldt
    @author-website: https://magnushvidtfeldt.com
    @website: https://memento.today
 -->
<html lang="en">
<head>
    <title>memento - todo list1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pageload.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/dragging.css">
    <link rel="stylesheet" href="css/theme-popup.css">
    <link rel="stylesheet" href="css/checkbox.css">
    <link rel="stylesheet" href="css/destroy.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="jquery-ui-1.13.2/"></script>  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script rel="preload" src="scripts/check.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="memento - todo list">
    <meta name="description" content="A todo list app for simplifying projects into comprehensible tasks on the go.">
    <meta name="keywords" content="todo, list, help, routines, memento todo list, todo-list, to do list, 
    keep tracks of routine, daily todo list, the todo list, best free todo list app, todo list template, 
    todo relatos, checklist, easy to do list, easy todo list, rapid, todo, list, app, --go, creation, todo list app, todo list google">

    <meta name="author" content="Magnus Hvidtfeldt"> 
    <meta name="start_url" content="https://memento.today">
    <meta name="robots" content="index, follow">

    <meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="memento">
	<meta name="twitter:description" content="Simplifying projects into comprehensible tasks on the go.">
	<meta name="twitter:image" content="https://i.imgur.com/oPHJQWZ.png"> 
    <meta name="twitter:site" content="@hvidtfldt">

	<meta property="og:locale" content="en_US">
	<meta property="og:title" content="memento">
	<meta property="og:description" content="A todo list app for simplifying projects into comprehensible tasks on the go.">
	<meta property="og:url" content="https://memento.today">
	<meta property="og:image" content="https://i.imgur.com/oPHJQWZ.png">
	<meta property="og:type" content="website">

    <link rel="icon" type="image/x-icon" href="/assets/favicon.svg">
</head>
<body onload="checklist()"> <!--  ondragstart="return false;" ondrop="return false;"-->

<div id="preloader" class="loader"></div>


<header style="text-align: center;">
    <h1>memento</h1>
    <p style="margin-top: -35px;">by <a href="https://magnushvidtfeldt.com" target="_blank">Magnus Hvidtfeldt</a>
    <p>rapid todo list app on-the-go.<br> suggestions? <a href="https://twitter.com/hvidtfldt" target="_blank">tweet me.</a></p>

</header>


<main class="centerMain">
    <!--    LIST 1     -->
    <div class="container">
        <!-- <hr> -->
        <div class="todow">
                <div class="list-container">
                    <a class="list-title" style="cursor: default;" id="date">list name...</a>
                </div>
            <div>
                <a class="hovEl" id="clear1" onclick="confirmation()">clear</a>
            </div>
        </div>
    </div>

    <form id="form" method="POST" class="form" style="margin-bottom: 3rem;">
        <input 
            type="text" 
            name="todo"
            id="input" 
            class="input" 
            placeholder="add a task..." 
            autocomplete="off"
            spellcheck="false"
        />

        <button class="btn" id="btn" type="submit" name="addtodo">add</button>

        <ul class="todos" id="todos">
            
        </ul>

        <!-- <a>tjek</a> -->
        <?php echo $msg; ?>
    </form>

    <!-- NEW LIST 1 -->
    <a id="newli" data-modal-target="#modal2" class="newli hovEl"><button>new list<br/></button></a>

    <!--    LIST 2     -->
    <div class="tomorrow" id="tmr">
        <div class="container">
            <hr>
            <div class="todow">
                <div class="list-container">
                    <a class="list-title" id="nameoflist1" style="cursor: default;">list name...</a>
                </div>
                <div>
                    <a class="hovEl" onclick="deletelist()" style="margin-right: 25px;">delete </a>
                    <a class="hovEl" id="clear2" onclick="confirmit()">clear</a>
                </div>
            </div> 
        </div>
    </div>

    <form id="form1" method="POST" class="form form1" style="margin-bottom: 3rem;">
        <input 
            type="text" 
            name="todo"
            id="input1" 
            class="input" 
            placeholder="add a task..." 
            autocomplete="off"
            spellcheck="false"
        />
        <ul class="todos" id="todos1">
        </ul>
    </form>
    </div>

    <!-- NEW LIST 2 id="newli2" -->
    <a id="newli2" data-modal-target="#modal1" class="newli hovEl"><button>new list<br/></button></a>

    <!--    LIST 3     -->
    <div class="tomorrow" id="tmr1">
        <div class="container">
            <hr>
            <div class="todow">
                <div class="list-container">
                    <a class="list-title" id="nameoflist2" style="cursor: default;">list name...</a>
                </div>
                <div class="butActions list-container">
                    <a class="hovEl" onclick="deletelist1()" style="margin-right: 25px;">delete </a>
                    <a class="hovEl" id="clear3" onclick="confirmit2()">clear</a>
                </div>
            </div> 
        </div>
    </div>
    
    <form id="form2" method="POST" class="form form2" style="margin-bottom: 3rem;">
        <input 
            type="text" 
            name="todo"
            id="input2" 
            class="input" 
            placeholder="add a task..." 
            autocomplete="off"
            spellcheck="false"
        />
        <ul class="todos" id="todos2" draggable="true" >
        </ul>
    </form>
    </div>

</main>



<footer class="centerFooter" style="margin-bottom: 5rem">
    <small>
        <br />
        <br />
        <br />
        Left click to toggle complete. Left click and drag to reorder.
        <br />
        Hover over a task to see the delete button.
    </small>
    <br />
    <br />
    <br />
    <i class="bi bi-brightness-high-fill bri" id="toggleLight"></i>

    <i data-modal-target="#modal" class="bi bi-gear-fill bri popup" style="margin-left: 20px"></i> <!-- bi bi-gear-fill - bi bi-palette-fill -->


    <!-- <p class="copy">2022 © Memento by <a href="https://magnushvidtfeldt.com" target="_blank"> Magnus Hvidtfeldt</a></p> -->
</footer>



<!-- settings modal -->
<div class="modal" id="modal">
    <div class="modal-header">
        <div class="title">Settings</div>
        <!-- <button data-close-button class="close-button"></button> -->
        <i class="bi bi-x close-button" data-close-button></i>
    </div>
    <div class="modal-body">

        <div class="title">Your themes</div>
        <br>
        <a class="select hvr" onclick="magenta()"><button class="memento">Memento</button></a>
        <a class="select hvr" onclick="blue()"><button class="blueberry">Cobalt</button></a>
        <a class="select hvr" onclick="yellow()"><button class="mandarin">Mandarin</button></a>
        <a class="select hvr" onclick="red()"><button class="crimson">Crimson</button></a>
        <a class="select hvr" onclick="grey()"><button class="greyy">Dusk</button></a>

        <br />
    </div>
</div>
<div id="overlay"></div>


<!-- prompt modal 1 -->
<div class="modal" id="modal1">
    <div class="modal-header">
        <div class="title">What would you like to call your list?</div>
        <!-- <button data-close-button class="close-button"></button> -->
        <i class="bi bi-x close-button" data-close-button></i>
    </div>
    <div class="modal-body">

        <!-- <div class="title">What would you like to call your new list?</div> -->
        <p style="text-align: left;margin-top:-5px;opacity:0.8;">
            This will be the name of your new list.
        </p>

        <input 
            type="text" 
            id="input3" 
            placeholder="e.g. Issues to solve..." 
            autocomplete="off"
            onkeypress="clickPress(event)"
            spellcheck="false"
        >

        <div class="modal-spc">
            <button class="modal-btn" id="promptCancel">Cancel</button>
            <button class="modal-btn" id="promptConfirm">Confirm</button>
        </div>
    </div>
</div>
<div id="overlay"></div>



<!-- prompt modal 2 -->
<div class="modal" id="modal2">
    <div class="modal-header">
        <div class="title">What would you like to call your list?</div>
        <!-- <button data-close-button class="close-button"></button> -->
        <i class="bi bi-x close-button" data-close-button></i>
    </div>
    <div class="modal-body">

        <!-- <div class="title">What would you like to call your new list?</div> -->
        <p style="text-align: left;margin-top:-5px;opacity:0.8;">
            This will be the name of your new list.
        </p>

        <input 
            type="text" 
            id="input4" 
            placeholder="e.g. Issues to solve..." 
            autocomplete="off"
            onkeypress="clickPress2(event)"
            spellcheck="false"
        />

        <div class="modal-spc">
            <button class="modal-btn" id="promptCancel2">Cancel</button>
            <button class="modal-btn" id="promptConfirm2">Confirm</button>
        </div>
    </div>
</div>
<div id="overlay"></div>



</body>
<script src="scripts/script.js" defer></script>
<script src="scripts/primary-list.js"></script>
<script src="scripts/secondary-list.js"></script>
<script src="scripts/tertiary-list.js"></script>
<script src="scripts/palette-selector.js"></script>
<link rel="stylesheet" href="css/palette-selector.css">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4GLZENNWMK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4GLZENNWMK');
</script>

<script>
    window.addEventListener('load', function() {
        setTimeout(() => {
        document.querySelector('.loader').classList.add('loader--hidden');
        }, 500)

        document.querySelector('.loader').addEventListener('transitionend', function() {
            document.querySelector('.loader').style.display = 'none';
        })
    });
</script>
</html>