<?php
  if (isset($_POST['submit'])) {
    function attribution ($input) {
      if (isset($_POST[$input])) {
        return $_POST[$input];
      } else { echo "Erreur";};
    };
    function check ($test) {
      if (!preg_match("/^[a-zA-Z ]*$/", $_POST[$test])) {
        echo "Erreur";
      } else {return attribution($test);};
    };
    function checkMail ($testMail) {
      if (isset($_POST[$testMail]) && filter_var($_POST[$testMail], FILTER_VALIDATE_EMAIL)) {
      return filter_input(INPUT_POST,$testMail, FILTER_SANITIZE_EMAIL);}
      else {
        echo "Erreur";};
      };

    function checkText ($text) { if (strlen($_POST[$text]) < 100) {
      echo "votre description doit faire minimum 100 caractères";
    } else
      {return filter_input(INPUT_POST,$text, FILTER_SANITIZE_STRING);};
    };
    $pays = attribution('pays');
    $sujet = attribution('sujet');
    $mail = checkMail('mail');
    mail($mail, "test", "test");
  };


?>
