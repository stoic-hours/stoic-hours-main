<?php
stoic_hour_page_start("Vespers");


$yetgo = true;
if ( $yetgo ) { $yetgo = stoic_hour_cycle_res(realpath(__DIR__ . '/enchiridion.xml'),2017,5,26,array()); }
if ( $yetgo ) { $yetgo = stoic_hour_cycle_res(realpath(__DIR__ . '/enchiridion.xml'),2017,4,9,array('fixcycle'=>18)); }


$yetgo = true;
if ( $yetgo ) { $yetgo = stoic_hour_cycle_res(realpath(__DIR__ . '/eoc-instruct.xml'),2017,4,20,array('chosen-in-ray'=>0)); }


$yetgo = true;
if ( $yetgo ) { $yetgo = stoic_hour_cycle_xres('poetry-main-cycle',2017,4,22,array('fixcycle'=>3)); }


stoic_hour_page_stop();
?>
