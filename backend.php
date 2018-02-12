<?php
  function attribution ($input) {
    if (isset($_POST[$input])) {
      return $_POST[$input];
    } else { echo "Erreur";};
  };
  function check ($test) {
    if (!preg_match("/^[a-zA-Z ]*$/", $_POST[$test])) {
      return "Erreur";
    } else {return attribution($test);};
  };
  function checkMail ($testMail) {
    return filter_input(INPUT_POST,$testMail, FILTER_SANITIZE_EMAIL);
  };
  function checkText ($text) {
    return filter_input(INPUT_POST,$text, FILTER_SANITIZE_STRING);
  };
  $pays = attribution('pays');
  $nom = check('Nom');
  $prenom = check('Prénom');
  $genre = attribution('genre');
  $mail = checkMail('mail');
  $sujet = attribution('sujet');
  $msg = checkText('msg-area');
?>
