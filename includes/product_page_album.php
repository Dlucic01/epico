<?php
include ("../../includes/config.php");
include ("../../includes/header.php");
session_start();

if(isset($_POST['product_id'])) {
  if(!isset($_SESSION['cart'])) {
	$_SESSION['cart']=array();
  }
    array_push($_SESSION['cart'], $_POST);
}

echo '<pre>'; print_r($_SESSION['cart']); echo '</pre>';

$stmt = $pdo->prepare('SELECT * FROM vinyl WHERE id = :id');
$stmt->execute([ ':id' => $serial_id]);
$show = $stmt->fetchAll();

foreach($show as $item) 
	{
		$album_image 	= $item['album_art_file'];
		$artist_name 	= $item['artist'];
		$album_name  	= $item['album_name'];
		$price 	 	= $item['price'];
		$description 	= $item['description'];
		$demo_song_name = $item['demo_song_name'];
		$demo_song_file = $item['demo_song_file'];
		$date_released  = $item['date_released'];
		$genre		= $item['genre'];


?>
<head>
<link rel="stylesheet" href="../../includes/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="product_price">
	<img class="image_product" src="../../product/vinyl/album-art/<?php echo $album_image; ?>" title="<?php echo $album_name ?>" width="200" height="200">
<div class="name_price">
<div class="album_title">
<h3 class=""><?php echo $album_name; ?> </h3>
<p class="">by <a href=""> <?php echo $artist_name; ?></a></p>
<hr style="margin-top:2em;">
	<h3 style="margin-left: 0.9em;"><?php echo $price . "€"?> </h3>
	
	<form method="post" action="" style="display:inline;">
	<input type="hidden" name="product_id" value="<?php echo $serial_id;?>">
	<input type="submit" name="text" class="button" style="font-size:16px;" value="Add to Cart">	
	</form>
	
	<button class="button" style="margin-left: 20px; font-size:16px; ">Buy Now  <i class="fa fa-money"></i></button>	

	
</div>

</div>
</br>
<?php
?>
</br>
</br
>
</br>


</br>
</br>



</br>
</br>
</br>

<img class="main_song" width="95" height="95" src="../../product/vinyl/album-art/<?php echo $album_image;?>">
	<p class="demo_name">Demo Song:</br> <?php echo $demo_song_name; ?></p>
	<audio controls class="music_player" >
	<source src="../../product/vinyl/music/<?php echo $demo_song_file; ?>" type="audio/mpeg">
	</audio>

<?php

}

?>
