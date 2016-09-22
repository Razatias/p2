
<!DOCTYPE html>
<html>
<head>

	<title>Password Generator</title>
	<meta charset='utf-8'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css' rel="stylesheet">
	<link href='css/style.css' rel='stylesheet'>
  <?php require 'logic.php'; ?>

</head>
<body>

	<div class='container'>
    <div class="row">
      <div class="twelve column">
        <h1>Password Generator</h1>
        <br>
		    <p class='password'>
		    <?php echo $password ?>	</p><br>
      </div>
    </div>

    <div class="row">
      <div class="twelve column">
    		<form action="index.php" method="get">
    				<label for='number_of_words'># of Words</label>
    				<input class="u-half-width" maxlength=1 type='text' name='number_of_words' id='number_of_words' value='' class="u-full-width" placeholder="1 - 9">  (Max 9)

        <label for='add_number'>Add a number</label>
				<input type='checkbox' name='add_number' id='add_number' >
        <label for='add_symbol'>Add a symbol</label>
				<input type='checkbox' name='add_symbol' id='add_symbol' >
			</p>

			<input type='submit' class='button button-primary' value='Get password'>

      <?php if(isset($error)): ?>
           <div class='error'><?php echo $error; ?></div>
       <?php endif ?>

		   </form>
     </div>
   </div>
</div>

</body>
</html>
