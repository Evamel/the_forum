<!-- category of topics -->
<?php
foreach ($data['boards'] as $board) {
    echo " Board : " . $board->board_name;
    echo " -> Description : " . $board->board_description;
    echo "<br>";
}
?>
<!-- When showing the list of the boards, you need to show the Topics: the three one with the most recent message -->