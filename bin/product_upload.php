 <?php
include "../includes/config.php";
include "../includes/header.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);


?>
 
    <h1 style="text-align:center;">Upload a Song</h1>

<div class="upload_product_form">
   <form method='post' action='product_upload_check.php' 
               enctype='multipart/form-data'>
	   
		<label for="artist">Artist:</label>
		<input id="artist" type='text' name='artist'></br>

		
		<label for="album_name">Album Name:</label>
		<input id="album_name" type='text' name='album_name'></br>
	     
		
		<label for="genre">Genre:</label>
		<select id="genre" type='text' name="genre"></br>
		<option value="Blues">Blues</option>
		<option value="Rock">Rock</option>
		<option value="Metal">Metal</option>
		<option value="Techno">Techno</option>
		<option value="Indie">Indie</option>
		<option value="Progressive">Progressive</option>
		<option value="Folk">Folk</option>
		</select><br>


		<label for="length">Length:</label> 
		<input id="length" type='text' name='length'></br>
		
		<label for="date_released">Date Released:</label>
		<input id="date_released" type='date' name='date_released'></br>
		
		<label for="price">Price:</label>
		<input id="price" type='number' step="0.01" name='price'></br>
	
		<h1 style="text-align:center";>Condition</h1>

		<label for="media_con">Media:</label>
		<select id="media_con" type='text' name="media_con">
		<option value="M">M</option>
		<option value="M-">M-</option>
		<option value="VG+">VG+</option>
		<option value="VG">VG</option>
		<option value="G+">G+</option>
		<option value="G">G</option>
		<option value="P">P</option>
		</select><br>
			
		<label for="sleeve_con">Sleeve:</label>
		<select id="sleeve_con" type='text' name="sleeve_con"></br>
		<option value="M">M</option>
		<option value="M-">M-</option>
		<option value="VG+">VG+</option>
		<option value="VG">VG</option>
		<option value="G+">G+</option>
		<option value="G">G</option>
		<option value="P">P</option>
		</select><br>



	
		<label for="quantity">Quantity:</label>
		<input id="quantity" type='number' name='quantity'></br>
		
		<label for="description">Description:</label>
		<textarea id="description" rows="4" cols="30" name='description'>
		</textarea> </br>

		<label for="serial_number">Serial Number:</label>
		<input id="serial_number" type='text' name='serial_number'></br>

		<label for="demo_song_name">Demo Song Name:</label>
		<input id="demo_song_name" type='text' name='demo_song_name'></br>




                <h3>Song File</h3>
        <input type='file' name='song[]' placeholder="Song File"/></br>
               <h3>Album Art</h3>
               <input type='file' name='albumart[]' placeholder="Album Art" /></br>
<br><br>
       <input class='button' type='submit' value='Submit' name='submit' />
  </form>
</div>
</div>
