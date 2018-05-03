<form action="">
<h3><b>NAMA :</b> <input type="text" name="NAMA" placeholder="NAMA"> </h3>
<h3><b>NRP :</b> <input type="text" name="NRP" placeholder="NRP"> </h3>
<h3><b>TGL LAHIR:</b>
<select name="TGL">
<?php
	for ($i=1; $i<=31; $i++)
	{
	?>
	<option value="<?php echo $i; ?>"> 
	<?php echo $i; ?>
	</option>
	<?php
	}
?>
</select>

<select name="bln">
<?php
	for ($i=1; $i<=12; $i++)
	{
	?>
	<option value="<?php echo $i; ?>"> 
	<?php echo $i; ?>
	</option>
	<?php
	}
?>
</select>

<select name="tahun">
<?php
	for ($i=date("Y"); $i>=date("Y")-60; $i--)
	{
	?>
	<option value="<?php echo $i; ?>"> 
	<?php echo $i; ?>
	</option>
	<?php
	}
?>
</select>

</h3>

<h3> <b>ALAMAT : </b> 
	<textarea name="ALMT"> </textarea>
</h3>
	
<h2> <b>JURUSAN : </b>
	<input type="radio" name="JURUSAN" value="IF">IF
	<input type="radio" name="JURUSAN" value="INDUSTRI">INDUSTRI
	<input type="radio" name="JURUSAN" value="EL">EL
</h2>
	
<h2> <b>MATKUL : </b><br>
	<input type="checkbox" name="pilihan" value="PBW">PBW<br>
	<input type="checkbox" name="pilihan" value="VB">VB<br>
	<input type="checkbox" name="pilihan" value="FORTRAN">FORTRAN<br>
	<input type="checkbox" name="pilihan" value="C++">C++<br>
</h2>
	
	
<h3> <b><input type="submit" value="Submit"></b></h3>
	 

</form>