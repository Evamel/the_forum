<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a7577a9f0e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300,400,500,600,800&display=swap" rel="stylesheet">
    <title>Topic</title>
</head>
<body>
    <header>
<h1>The forum</h1>
<div class="log">
    <a href="#"><i class="far fa-edit"></i> Register</a>
    <a href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
</div>
    </header>

    <div class="container-fluid">
        <div class="path">
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home </a></li>
                <li><a href="#">  < Board </a></li>
                <li><a href="#">  < Topics </a></li>
            </ul>
        </div>

        <h2>Titre du topic</h2>

        <div class="rules">
            <p>Forum rules</p>
        </div>

        <div class="btnMessages">
            <button class="reply"> Post reply <i class="fas fa-reply"></i></button>
            <button class="tool"><i class="fas fa-wrench"></i> <i class="fas fa-sort-down"></i></button>
            <div class="searchbarMessage">
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <button class="btnParam"><i class="fas fa-cog"></i></button>
                  </form>
            </div>
        </div>

        <article class="container-fluid messages">
            <div class="row message1">
                <div class="col-md-3 user">
                    <img class="avatar" src="css/2b2d36512e6c858fcd29edde12a4c9c2.jpg" alt="Minoo">
                    <p class="pseudo">Minoo</p>
                    <p class="level">Admin</p>
                    <p class="numberOfPosts">Posts: <div class="num">457</div></p>
                </div>
                <div class="col-md-8 detailsMessage">
                    <p class="date"><i class="far fa-clock"></i> Sun. 12 Aug 2039</p>
                    <p class="hour">6:56 pm</p>
                    <p class="textMessage">This is the comment that I post. Miaou</p>
                    <div class="lineMessSign"></div>
                    <p class="signatureMessage">This is my signature</p>
                </div>
                <div class="col-md-1 quote">
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>
            <div class="row message2">
                <div class="col-md-3 user">
                    <img class="avatar" src="css/2b2d36512e6c858fcd29edde12a4c9c2.jpg" alt="Minet">
                    <p class="pseudo">Minet</p>
                    <p class="level">Member</p>
                    <p class="numberOfPosts">Posts: <div class="num">47</p></div>
                </div>
                <div class="col-md-8 detailsMessage">
                    <p class="date"><i class="far fa-clock"></i> Sun. 1 Feb 2099</p>
                    <p class="hour">9:76 pm</p>
                    <p class="textMessage">Miaouuuuuuuu</p>
                    <div class="lineMessSign"></div>
                    <p class="signatureMessage">Sign</p>
                </div>
                <div class="col-md-1 quote"><i class="fas fa-quote-left"></i></div>
            </div>
        </article>

        <div class="btnMessageEnd">
            <button class="reply"> Post reply <i class="fas fa-reply"></i></button>
            <button class="tool"> <i class="fas fa-wrench"></i> <i class="fas fa-sort-down"></i></button>
        </div>

        <div class="pathEnd">
            <a href="#">< Return to topics</a>
        
            <select name="jump" id="jumpTo">
                <option value="">Jump to</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
            </select>
        </div>
    </div>
</body>
</html>