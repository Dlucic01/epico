<?php
include ("../includes/header.php");
include ("../includes/config.php");
session_start();

?>
<style>

</style>
<table>

<?php
$int= 0;
$item_number = 0;
$total_price = 0;
foreach ($_SESSION['cart'] as $cart_item){
       $item_id = intval($_SESSION['cart'][$int]['product_id']);
  
 
  $stmt = $pdo->prepare('SELECT * FROM vinyl WHERE id = :id');
  $stmt->execute([ ':id' => $item_id]);
  $show = $stmt->fetchAll();
	
  	foreach($show as $item) {
		$album_image    = $item['album_art_file'];
                $artist_name    = $item['artist'];
                $album_name     = $item['album_name'];
                $price          = $item['price'];

		$html_int = $int;
		
?>

<tr>
<td><img src="../product/vinyl/album-art/<?php echo $album_image; ?>" title="<?php echo $album_name ?>" width="75" height="75"></td>
<td><p><?php echo $album_name; ?> <p></td>
<td><p class="">by <a href=""> <?php echo $artist_name; ?></a></p>
<td><p><?php echo $price . "€"?> <p></td>
<td> <form name="remove_item_cart" action="" method="post">
 <button class="button_delete" type="submit" name="delete_item_cart" value="<?php echo $html_int;?>">Delete</button>
</tr>
<?php
		$int_link = $_POST['delete_item_cart'];
	}

 



$int++;
$item_number++;
$total_price += $price;
}

echo "Total Items: " . $item_number;
echo "<br>Total Price: " . $total_price . "€";

if (isset($_POST['delete_item_cart'])) 
	{
		unset($_SESSION['cart'][$int_link]);
		header("Refresh:0");	
		
}
?>
</table>
</div>
