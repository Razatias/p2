<?php
	# form validation, make sure number is entered and it's between 0-9

        if ($_GET["number_of_words"] != strval(intval($_GET["number_of_words"]))) {
        $error = "Please enter a number";
      } elseif (($_GET["number_of_words"] < 1) || ($_GET["number_of_words"] > 9)) {
        $error = "Please enter a number between 0 and 9";
      }

$password="";

#created a list of words
$wordList = array("dog", "cow", "cat", "mouse", "elephant", "snake", "rabbit","bird","hourse");

#randomly shuffle the word list
shuffle($wordList);

#pulls word from the shuffled array into the password variable
for ($i = 0; $i <= $_GET["number_of_words"]-1; $i++) {
  $password .= "-".$wordList[$i];
}
echo($password);
?>
