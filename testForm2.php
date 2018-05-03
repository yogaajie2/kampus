<form action="">
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
</form>