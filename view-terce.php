<?php stoic_hour_page_start("Terce"); ?>


<?php
$yetgo = true;
if ( $yetgo ) { $yetgo = stoic_hour_cycle_res(realpath(__DIR__ . '/enchiridion.xml'),2017,4,29,array()); }
if ( $yetgo ) { $yetgo = stoic_hour_cycle_res(realpath(__DIR__ . '/enchiridion.xml'),2017,4,17,array('fixcycle'=>18)); }
?>

<?php
$yetgo = true;
if ( $yetgo ) { $yetgo = stoic_hour_cycle_res(realpath(__DIR__ . '/eoc-instruct.xml'),2017,4,20,array('chosen-in-ray'=>0)); }
?>

<?php stoic_hour_page_stop(); ?>
