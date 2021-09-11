<!-- Conversation, messages -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a7577a9f0e.js" crossorigin="anonymous"></script>
    <title>Messages</title>
</head>
<body>
    <header>
<h1>Nom du forum</h1>
    </header>

    <div class="container">
        <div class="path">
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Home </a></li>
                <li><a href="#"> < Board </a></li>
                <li><a href="#"> < Topics </a></li>
            </ul>
        </div>

        <h2>Titre du topic</h2>

        <div class="rules">
            <p>Forum rules</p>
        </div>

        <div class="btnMessages">
            <button class="reply"> Post reply <i class="fas fa-reply"></i></button>
            <button class="tool"> <i class="fas fa-wrench"></i></button>
            <div class="searchbarMessage">
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <button class="btnParam"><i class="fas fa-cog"></i></button>
                  </form>
            </div>
        </div>


        <article class="messages">
            <div class="message">
                <div class="user">
                    <img src="" alt="">
                    <p class="pseudo">Minette</p>
                    <p class="level">Admin</p>
                    <p class="numberOfPosts">345 Posts</p>
                </div>
                <div class="detailsMessage">
                    <p class="date">Sun. 12 Aug 2039</p>
                    <p class="hour">6:56 pm</p>
                    <p class="textMessage">This is the comment that i post. Miaou</p>
                    <p class="signatureMessage">This is my signature</p>
                </div>
                
            </div>
        </article>

        <div class="btnMessageEnd">
            <button class="reply"> Post reply <i class="fas fa-reply"></i></button>
            <button class="tool"> <i class="fas fa-wrench"></i></button>
        </div>

        <div class="pathEnd">
            <a href="#">Return to topics</a>
        
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