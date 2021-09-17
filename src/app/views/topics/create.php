<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">

    <?php
    var_dump($_SESSION);
    ?>

    <?php
    require APPROOT . '/views/includes/navigation.php';
    ?>

    <?php
    require APPROOT . '/views/includes/right.php';
    ?>

    <div class="container">

        <div class="container-center">
            <h2> Your topic </h2>
            <form action="<?php echo URLROOT . "/topics/create?id=" . $_GET['id'] ?>" method="POST">
                <div class='form-item'>
                    <textarea name="subject" placeholder="Your topic"></textarea>
                    <span class="invalidFeedback">
                        <?php echo $data['subjectError']; ?>
                    </span>
                </div>
                <button class="btn-green" name="submit" type="submit">
                    Submit
                </button>
            </form>
        </div>

        <?php
        require APPROOT . '/views/includes/footer.php';
        ?>
    </div>