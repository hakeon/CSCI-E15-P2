<div class="container">
	
	<h2 class='greeting'> <?php echo $greeting; ?> </h2>
	
	<div>
		<h4>this is a</h4>
		<h1>xkcd Password Generator</h1>
		<h3>a mo' better password creator*</h3>
		<p id='password'>Your password is: </p>
		<p id='password'> <?= $password ?> </p>
	</div>
	
	<div class='options'>
		<form method="POST" action="index.php">
			<fieldset>
			<legend>OPTIONS</legend>
			
			<label name="count">How many words would you like to use?</label>
			<select name="count">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select><br>

			<label name="uppercase">Do you want to uppercase the first letter?</label>
			<input type="checkbox" name="uppercase" value="uppercase"/><br>

			<label name="symbol">Would you like to use a symbol?</label>
			<input type="checkbox" name="symbol" value="symbol"/><br>

			<label name="number">Would you like to include a number?</label>
			<input type="checkbox" name="number" value="number"/><br>
		
		</fieldset>
		<input type="submit" name="submit" value="submit"/>
		</form>
	</div>
	<p>*for an explanation of why an xkcd password is mo' better, click here: <a href="http://xkcd.com/936/" target="_blank" >xkcd</a> </p>
</div>