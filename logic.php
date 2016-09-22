<?php
  # form validation, make sure number is entered and it's between 0-9
  if (isset($_GET["number_of_words"])){
        if ($_GET["number_of_words"] != strval(intval($_GET["number_of_words"]))) {
        $error = "Please enter a number";
      } elseif (($_GET["number_of_words"] < 1) || ($_GET["number_of_words"] > 9)) {
        $error = "Please enter a number between 1 and 9";
      };
  };
$password="";

#created a list of words
$wordList = array("dog", "cow", "cat", "mouse", "elephant", "snake", "rabbit","bird","hourse");

#randomly shuffle the word list
shuffle($wordList);

#pulls word from the shuffled array into the password variable
if (isset($_GET["number_of_words"])){
      for ($i = 0; $i <= $_GET["number_of_words"]-1; $i++) {
        $password .= $wordList[$i];
          # making sure no "-" is added after the final word
              if ($i != $_GET["number_of_words"]-1) {$password .= " - ";}
      };
};

# add a number or a character is the checkbox is marked
  if (isset($_GET["add_number"])){
      if ($_GET["add_number"]=="on") {$password .= rand(0,9);};
  };
  if (isset($_GET["add_symbol"])){
      if ($_GET["add_symbol"]=="on") {$password .= chr(rand(32,47));};
  };
?>
