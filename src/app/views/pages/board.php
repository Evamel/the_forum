<!-- category of topics -->
<?php
foreach ($data['boards'] as $board) {
   echo " Boards:" . $board->board_name;
   echo "<br>";
}
?>