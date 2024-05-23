<?php
include_once("connection.php");
?>
<!-- <style>
<?php
$file_location = $_SERVER['PHP_SELF'];
switch($file_location){
	case '/vinay/sarkari_result/results.php' : 
		echo ".nav div:nth-child(3) a";
		break;
	case '/vinay/sarkari_result/admit_card.php':
		echo ".nav div:nth-child(4) a";
		break;
	case '/vinay/sarkari_result/contact_us.php':
		echo ".nav div:nth-child(8) a";
		break;
	case '/vinay/sarkari_result/syllabus.php':
		echo ".nav div:nth-child(6) a";
		break;
	case '/vinay/sarkari_result/latest_job.php':
		echo ".nav div:nth-child(2) a";
		break;	
   case '/vinay/sarkari_result/answer_key.php':
		echo ".nav div:nth-child(5) a";
		break;	
	default:	
	echo ".nav div:nth-child(1) a";
	break;	
}
?>
{
	color:red !important;
}
</style> -->


<?php
$sql = "SELECT `links`,`name` FROM `nav_items`";


$query= mysqli_query($conn,$sql);
?>
<div class="nav">
	<?php
	 while($nav_item=mysqli_fetch_assoc($query))
	 {
		?>
			<div><a href="<?php echo $nav_item['links']; ?>.php"><?php echo $nav_item['name']; ?></a></div>
		<?php
	 }
	?>

	
</div>