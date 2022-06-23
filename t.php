<?php 
function Test()
{
  $sth = $dbh->prepare("SELECT COUNT(*) FROM `hotspot`.`hotspot_nas_profile` WHERE (`id` = ? AND `customer_id` = ?)");
}
?>
