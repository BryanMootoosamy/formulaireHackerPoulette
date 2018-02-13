<?php
  if (isset($_POST['submit'])) {
    function attribution ($input, $errorcheck = true) {
      if (isset($_POST[$input])) {
        return $_POST[$input];}
        elseif ($errorcheck == true) {echo "erreur";};};
    function check ($test, $errorcheck = true) {
      if (!preg_match("/^[a-zA-Z ]*$/", $_POST[$test]) || $errorcheck == true) {
        echo "Erreur";
      } else {return attribution($test, $errorcheck);};
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
    $pays = check('pays', false);
    $sujet = check('sujet', false);
    $nom = check('Nom', false);
    $prenom = check('Prénom', false);
    $mail = checkMail('mail', false);
    $msg = checkText('msg-area', false);
    $genre = attribution('genre', false);
  };


?>
