<?php
include ("../includes/header.php");
include ("../includes/config.php");
session_start();



  $stmt = $pdo->prepare('SELECT * FROM vinyl');
  $stmt->execute();
  $show = $stmt->fetchAll();

        foreach($show as $item) {
                $album_image    = $item['album_art_file'];
                $artist_name    = $item['artist'];
                $album_name     = $item['album_name'];
                $price          = $item['price'];

		$file_name = $artist_name . "-" . $album_name . ".php";
		$file_name = strtolower($file_name);
		$file_name = str_replace(' ', '_', $file_name);

?>


 


 <div class="grid-container"> 

<div class="pdfbutton">
<a href="../public/albums/<?php echo $file_name;?>">
<img  src="../product/vinyl/album-art/<?php echo $album_image; ?>" title="<?php echo $album_name ?>" width="125" height="125">
<p><?php echo $album_name; ?> <p>
<p>by <a href=""> <?php echo $artist_name; ?></a></p>
       <p><?php echo $price . "€"?> </p>
</a>
</div>
</div>
<?php
        }



?>
