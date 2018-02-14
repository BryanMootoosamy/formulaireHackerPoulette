<section class="formulaire">
  <h1>Aperçu de vos informations</h1>
  <section class="corps">
    <p class="intro">Nous avons bien reçu votre demande et la traiterons dans les plus brefs délais.<br/> Voici un récapitulatif des informations que vous nous avez fournies:</p>
    <div class="textBox">
      <?php echo $nom;
        print_r("&nbsp");
        echo $prenom;
        print_r("&nbsp");
        echo $genre;
        print_r("<br/>");
        echo $mail;
        print_r("<br/>");
        echo $sujet;
        print_r("<br/>");
        echo $msg;
      ?>
    </div>
  </section>
</section>
