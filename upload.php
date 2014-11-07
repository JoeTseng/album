<?php
if ($_FILES["file"]["error"] > 0){
echo "Error: " . $_FILES["file"]["error"];
}
else{
echo "Success upload: " . $_FILES["file"]["name"]."<br/>";
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
}
$url = "albums.php"; 
?>
<html>   
<head>   
<meta http-equiv="refresh" content="1;url=<?php echo $url; ?>">   
</head>   
<body> 
It's transit station.
</body>
</html>