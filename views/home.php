	<?php foreach ($lista as $li) { ?>
		
		<form method="POST" id="form">
			<?php echo $li['produto'];?>
			<input type="hidden" name="produto" id="produto" value="<?php echo $li['Id'];?>"/>
			<input type="hidden" name="valor" id="valor" value="<?php echo $li['valor'];?>"/>

				<select name="quantidade" id="quantidade">

				<?php for($i=0; $i<=10; $i++) { ?>

				<option value="<?php echo $i;?>"><?php echo $i;?></option>

				<?php }	?>

				</select>
			<?php echo $li['valor'];?>
			<input type="submit" value="+"/>
		</form>

	<?php }	?>

	