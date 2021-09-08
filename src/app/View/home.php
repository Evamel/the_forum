<?php require '../app/View/includes/header.php'?>

<?php // Use any data loaded in the controller here 
echo '<tr>';
echo '<td class="leftpart">';
    echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
echo '</td>';
echo '<td class="rightpart">';                
        echo '<a href="topic.php?id=">Topic subject</a>';
echo '</td>';
echo '</tr>';
?>

<section>
    <h1>Welcome to The Forum!</h1>
</section>


<?php require '../app/View/includes/footer.php'?>