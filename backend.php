<?php
  function attribution ($input) {
    if (isset($_POST[$input])) {
      return $_POST[$input];
    } else { echo "Erreur";};
  };

  $pays = attribution('pays');
  $nom = attribution('Nom');
  $prenom = attribution('Prénom');
  $genre = attribution('genre');
  $mail = attribution('mail');
  $sujet = attribution('sujet');
  $msg = attribution('msg-area');
  
?>
