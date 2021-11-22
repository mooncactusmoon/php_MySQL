<?php include_once "db.php"; ?>

<?php
$cash=find('detail',2);
echo $cash['cash']; 
?>