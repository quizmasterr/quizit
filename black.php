<?php 


$t = $_GET["t"];
$t1 = $_GET["t1"];
$ad_name = $_GET["ad_name"];
header("Location: https://getlinks.xyz/click.php"."?"."key=".$t."&"."t1=".$t1. "&"."ad_name=".$ad_name);
die();