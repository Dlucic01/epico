<?php
include ("../includes/config.php");
include ("../includes/header.php");
session_start();


$stmt = $pdo->prepare('SELECT * FROM vinyl');
$stmt->execute();
$show = $stmt->fetchAll();

?>
<table>
<?php
foreach($show as $item)
        {
                $album_image    = $item['album_art_file'];
                $artist_name    = $item['artist'];
                $album_name     = $item['album_name'];
                $price          = $item['price'];
                $description    = $item['description'];
                $demo_song_name = $item['demo_song_name'];
                $demo_song_file = $item['demo_song_file'];
                $date_released  = $item['date_released'];
                $genre          = $item['genre'];


?>

<form method="post" action="">
<tr>
<td><img src="../product/vinyl/album-art/<?php echo $album_image; ?>" title="<?php echo $album_nme; ?>" width="75" height="75"></td>
<td><input type="text" name="album_name" placeholder="<?php echo $album_name; ?>"/>
<p class="">by <input type="text" name="album_name" placeholder="<?php echo $artist_name; ?>"></p>
<td><input type="number" step="0.01" placeholder="<?php echo $price . "€"?> ">
</td>
<td> <form name="remove_item_cart" action="" method="post">
 <button class="button_delete" type="submit" name="delete_item_cart" value="<?php echo $html_int
?>">Delete</button>
</tr>
</form>
<?php


}

?>
</table>

