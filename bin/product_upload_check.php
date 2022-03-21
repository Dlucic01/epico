<?php
include "../includes/config.php";
include "../includes/header.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);


?>
  
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">    

  <!--If user tries to enter the page without loging in send them back. -->




</head>
      

<body>

<?php


if(isset($_POST['submit']))
{
	echo "Error post";
	$countfiles = count($_FILES['song']['name']);


	$artist = $_POST['artist'];
	$album_name = $_POST['album_name'];
	$genre = $_POST['genre'];
	$length = $_POST['length'];
	$date_released = $_POST['date_released'];
	$price = $_POST['price'];
	$media_con = $_POST['media_con'];
	$sleeve_con = $_POST['sleeve_con'];
	$quantity = $_POST['quantity'];
	$description = $_POST['description'];
	$serial_number = $_POST['serial_number'];
	$demo_song_name = $_POST['demo_song_name'];


	$sql = "INSERT INTO vinyl (artist, album_name, genre, length, date_released, price, media_con, sleeve_con, quantity, description, serial_number, demo_song_name, album_art_file, album_art_path, demo_song_file, demo_song_path) VALUES (:artist, :album_name, :genre, :length, :date_released, :price, :media_con, :sleeve_con, :quantity, :description, :serial_number, :demo_song_name, :album_art_file, :album_art_path, :demo_song_file, :demo_song_path)";
	
	$statement = $pdo->prepare($sql);
	
	
# File Name

for($i = 0; $i <$countfiles; $i++)
{

	$songfilename  = $_FILES['song']['name'][$i];
	$albumartfilename = $_FILES['albumart']['name'][$i];



	# Location
	$songfile = '../product/vinyl/music/' . $songfilename;
	$albumartfile = '../product/vinyl/album-art/' . 	$albumartfilename ;
	
	
	
	
echo "ERROR 5";

	# File Extension - Song
	$file_extension_song = pathinfo(
		$songfile, PATHINFO_EXTENSION);
	$file_extension_song = strtolower($file_extension_song);
	$valid_extension_song = array("mp3");
	
	
	
	
echo "ERROR 6";


	
	
	
	# File Extension - Album Art
	$file_extension_albumart = pathinfo(
		$albumartfile, PATHINFO_EXTENSION);



$file_extension_albumart = strtolower($file_extension_albumart);
	$valid_extension_albumart = array("jpg", "png", "jpeg");


echo "ERROR 7";
echo $file_extension_song . "  " . $valid_extension_song[0];
	if(in_array($file_extension_song, $valid_extension_song) )
	{
		
echo "ERROR 8";

	if(move_uploaded_file(
			$_FILES['song']['tmp_name'][$i], $songfile)
			&& 
		   move_uploaded_file( 
			$_FILES['albumart']['tmp_name'][$i], $albumartfile
		))
		{
		echo "lol1";
		$statement->execute([ 
		':artist' =>	$artist, 
		':album_name' =>	$album_name, 
		':genre' => $genre,
		':length' => $length,
		':date_released' => $date_released,
		':price' => $price,
		':media_con' => $media_con,
		':sleeve_con' => $sleeve_con,
		':quantity' => $quantity,
		':description' => $description,
		':serial_number' => $serial_number,
		':demo_song_name' => $demo_song_name,
		':album_art_file'=>	$albumartfilename, 
		':album_art_path'=>	$albumartfile,
		':demo_song_file'=>	$songfilename, 
		':demo_song_path'=>	$songfile 
	]);	
 echo "lo2";
		}
	echo "lo3";
	}

}

echo "Song Uploaded Succesfully";
$product_id = $pdo->lastInsertId();
$serial_string = '$serial_id';
$file_name = $artist . "-" . $album_name . ".php";
$file_name = strtolower($file_name);
$file_name = str_replace(' ', '_', $file_name);
$product_file = fopen("../public/albums/$file_name", "w") or die ("Unable to open file!");


$txt = "<?php 

$serial_string = $product_id;

include('../../includes/product_page_album.php');


?>";

fwrite($product_file, $txt);
fclose($product_file);

}


?>
<?php


?>














</div>
<a href="product_upload.php">Return to Product Upload</a>
    <?php

    ?> 
</div>
</body>
  
</html>
