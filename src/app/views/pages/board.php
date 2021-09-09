<!-- liste topics -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a7577a9f0e.js" crossorigin="anonymous"></script>
    <title>deux poids deux tortues</title>
</head>

<body>
    <header>
        <img src="../../../public/./images/tortue.jpg" alt="tortue">
        <h1>deux poids deux tortues</h1>
        <div>
            <a href="#"><i class="far fa-edit"></i>Register</a>
            <a href="#"><i class="fas fa-sign-in-alt"></i>login</a>
        </div>
    </header>
    <div class="Container">
        <div>
            <a href="#"><i class="fas fa-home"></i>Home</a>
            <a href="#">
                < Board</a>
        </div>
        <div class="BlocGauche">
            <h2>Category One</h2>
            <div class="BoardCategoryOne">

            </div>
            <h2>Category Two</h2>
            <div class="BoardCategoryTwo">

            </div>
            <h2>Category Three</h2>
            <div class="BoardCategoryThree">

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
            </div>
        </div>
    </div>
</body>

</html>