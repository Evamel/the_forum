<!-- liste topics -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a7577a9f0e.js" crossorigin="anonymous"></script>
    <title>The for homme</title>
</head>

<body>
    <header>
        <img src="../../../public/./images/tortue.jpg" alt="tortue">
        <h1>The for homme</h1>
        <div>
            <a href="#"><i class="far fa-edit"></i>Register</a>
            <a href="#"><i class="fas fa-sign-in-alt"></i>login</a>
        </div>
    </header>
    <div class="Container">
        <div>
            <a href="#"><i class="fas fa-home"></i>Home</a>
            <a href="#">
                < Boards</a>
        </div>
        <div class="BlocGauche">
            <h2>Category One</h2>
            <div class="BoardCategoryOne">
                <article class="BoardCategoryOneArticle">
                    <img class="" src="" alt="" />
                    <div class="textTopicCategoryOne">
                        <h3 class="titreTopicCategoryOne"></h3>
                        <p class="descriptionTopicCategoryOne"></p>
                    </div>
                    <ul class="numberTopic">
                        <li class="numberOfTopic">Topics</li>
                        <li class="numberOfPosts">Posts</li>
                        <li class="numberOfLastPost">Last post</li>
                    </ul>
                </article>
            </div>
            <h2>Category Two</h2>
            <div class="BoardCategoryTwo">
                <article class="BoardCategoryTwoArticle">
                    <img class="" src="" alt="" />
                    <div class="textTopicCategoryTwo">
                        <h3 class="titreTopicCategoryTwo"></h3>
                        <p class="descriptionTopicCategoryTwo"></p>
                    </div>
                    <ul class="numberTopic">
                        <li class="numberOfTopic">Topics</li>
                        <li class="numberOfPosts">Posts</li>
                        <li class="numberOfLastPost">Last post</li>
                    </ul>
                </article>
            </div>
            <h2>Category Three</h2>
            <div class="BoardCategoryThree">
                <article class="BoardCategoryThreeArticle">
                    <img class="" src="" alt="" />
                    <div class="textTopicCategoryThree">
                        <h3 class="titreTopicCategoryThree"></h3>
                        <p class="descriptionTopicCategoryThree"></p>
                    </div>
                    <ul class="numberTopic">
                        <li class="numberOfTopic">Topics</li>
                        <li class="numberOfPosts">Posts</li>
                        <li class="numberOfLastPost">Last post</li>
                    </ul>
                </article>
            </div>
        </div>
        <div class="BlocDroit">
            <div class="BlocDroitLogin">
                <input type="search" id="BlocDroitSearch" name="q" placeholder="Search...">
                <button>Search</button>
                <div class="BlocDroitLigneUn"></div>
                <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
                <div class="BlocDroitLigneDeux"></div>
                <form>
                    <label>Username:</label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                    <label>Password</label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                    <input type="submit" id='submit' value='LOGIN'>
                    <input type="checkbox" id="remember" name="rememberMe">
                    <label for="remember">Remember me</label>
                </form>
                <button class="BlocDroitButtonLogin">Login</button>
                <div class="BlocDroitLigneTrois"></div>
                <p>I forgot my password</p>
            </div>
            <div class="lastPost">
                <div class="lastpostcolor">
                    <h3>Last Posts</h3>
                </div>
                <div class="BlocDroitArticle">
                    <article class="article">
                        <h3 class="lastPostTitre"></h3>
                        <p class="lastPostHours"></p>
                        <p class="lastPostText"></p>
                        <p class="lastPostTags"></p>
                    </article>
                </div>
                <div class="lastActiveUser">
                    <div class="lastActiveUserColor">
                        <h3 class="lastActiveUserTitle">Last active user</h3>
                    </div>
                    <div class="blocArticleUser">
                        <article class="articleUser">
                            <img src="" alt="" />
                            <div class="lastActiveUserText">
                                <h4 class="nameUser"></h4>
                                <p class="shortDescription">
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="logos">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-apple"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-codepen"></i>
                <i class="fab fa-google-plus-g"></i>
                <i class="fab fa-digg"></i>
                <i class="fab fa-pinterest-p"></i>
            </div>
            <div class="endPagePath">
                <a href="#"><i class="fas fa-home"></i>Home</a>
                <a href="#">
                    < Boards</a>
            </div>
            <div class="endPageLinks">
                <a href="#"><i class="fas fa-envelope"></i>Contact us</a>
                <a href="#"><i class="fas fa-shield-alt"></i>The team</a>
                <a href="#"><i class="fas fa-check"></i>Terms</a>
                <a href="#"><i class="fas fa-lock"></i>Privacy</a>
                <a href="#"><i class="fas fa-users"></i>Members</a>
                <a href="#"><i class="fas fa-trash-alt"></i>Delete cookies</a>
                <p>All time are UTC</p>
            </div>
        </footer>
        <a class="btn-up" href="#top">^</a>
</body>

</html>