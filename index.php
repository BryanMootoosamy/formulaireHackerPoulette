<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/awesome/on-server/css/fontawesome-all.css">
    <meta charset="utf-8">
    <title>Hackers Poulette - Formulaire de contact</title>
  </head>
  <body>
    <?php require "backend.php";
     if (isset($nom) == false || isset($genre) == false || isset($prenom) == false || isset($mail) == false || $robot != "a") {
       require "formulaire.php"; }
     elseif (isset($nom) && isset($prenom) && isset($mail) && isset($msg) && isset($genre) && $robot == "a") {
      $textmsg = "Nous avons bien reçu votre formulaire de contact récapitulant les infos suivantes
        $nom $prenom $genre

        $mail

        $sujet

        $msg
      ";
      mail($mail, "test", $textmsg );
      require "resume.php";
    }
    ?>
  </body>
</html>
