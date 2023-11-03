
<?php
include_once "Database.php";
session_start();
if (isset($_POST['submit']))
 {
 	$moviename=$_POST['moviename'];
 	$director=$_POST['director'];
 	$category=$_POST['category'];
 	$Language=$_POST['Language'];
 	$date=$_POST['date'];
    $time=$_POST['time'];
    $link=$_POST['link'];
    $action=$_POST['action'];
    $Description=$_POST['Description'];
	$filename=$_FILES['image']['name'];
	$filename1 = $_FILES["file"]["name"];
    $filedir = $_FILES["file"]["tmp_name"];
	echo "<script>alert(".$filename1.","."$filedir".");</script>";
    
$location='admin/image/'.$filename;
$file_extension=pathinfo($location,PATHINFO_EXTENSION);
$file_extension=strtolower($file_extension);
$image_ext=array('jpg','png','jpeg','gif','PNG');

$response=0;

if(in_array($file_extension,$image_ext)){

	if (move_uploaded_file($_FILES['image']['tmp_name'].$_FILES['image']['name'], $location)) {
    	$response = $location;
		echo $_FILES['image']['name'];
		echo "<script>alert('image problem...');</script>";

	}
}else{
	echo "<script>alert('extension problem...');</script>";
}


$status=1;
	$insert_record=mysqli_query($conn,"INSERT INTO add_movie (`movie_name`,`directer`,`release_date`,`categroy`,`language`,`you_tube_link`,`show`,`action`,`decription`,`image`,`status`)
    VALUES('".$moviename."','".$director."','".$date."','".$category."','".$Language."','".$link."','".$time."','".$action."','".$Description."','".$filename."','1')");
	if(!$insert_record){
		echo "</br>"	.$conn->error;
	}
	else
	{
        echo "<script>alert('New Movie Data Saved Succssfully...');</script>";
		echo "<script>window.location = 'Add-movie.php';</script>";
	}

}
?>