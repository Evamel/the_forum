<!-- New topic and update topic, require database of the topic -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste topics</title>
</head>

<body>
    <div class="Container">
        <div>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
            <a href="board.php">
                < Boards</a>
                    <a href="category.php"></a>
                    <a href="newtopic.php">Liste topics</a>
        </div>
        <h2>liste topics</h2>
        <div class="rules">
            <p>Forum rules</p>
        </div>

        <div class="btnTopics">
            <button class="newTopic"> New topic<i class="fas fa-pen"></i></i></button>
            <div class="searchbarTopic">
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <button class="btnParam"><i class="fas fa-cog"></i></button>
                </form>
            </div>
        </div>
        <div class="annouce">
            <div class="annouceTitre">
                <p>Annoucements</p>
                <i class="fas fa-comments"></i>
                <i class="fas fa-eye"></i>
                <i class="far fa-clock"></i>
            </div>
            <div class="annouceText">
                <i class="fas fa-bullhorn"></i>
                <p class="annouceText"></p>
                <p class="annouceDetails"> by Carla in Unread forum</p>
                <i class="fas fa-bullhorn"></i>
                <p class="numberOfMessages"></p>
                <p class="numberOfviews"></p>
                <p class="details">by</p>
            </div>
        </div>
        <div class="topics">
            <p>Topics</p>
            <i class="fas fa-comments"></i>
            <i class="fas fa-eye"></i>
            <i class="far fa-clock"></i>
        </div>
    </div>

</body>

</html>