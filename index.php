
<!DOCTYPE html>
<html>
<head>

	<title>Password Generator</title>
	<meta charset='utf-8'>

	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css' rel="stylesheet">
	<link href='css/style.css' rel='stylesheet'>
  <?php require 'logic.php'; ?>

</head>
<body>

	<div class='container'>
		<h1>xkcd Password Generator</h1>

		<p class='password'>
		<?php echo $password ?>	</p>

		<form action="index.php" method="get">
			<p class='options'>

				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 9)
				<br>

				<input type='checkbox' name='add_number' id='add_number' >
				<label for='add_number'>Add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' >
				<label for='add_symbol'>Add a symbol</label>
			</p>

			<input type='submit' class='btn btn-default' value='Get password'>

      <?php if(isset($error)): ?>
           <div class='error'><?php echo $error; ?></div>
       <?php endif ?>

		</form>

	</div>

	<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>

</body>
</html>
