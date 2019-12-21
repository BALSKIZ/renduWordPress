<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
      $bandeau1= get_field('banner_conf');
      $bandeau2= get_field('pro_img');
      $bandeau3= get_field('ora_photo');
      $bandeau4= get_field('infos_image');
      $bandeau5= get_field('actus_image');

      $image = get_field('gps');
      $image2 = get_field('horloge');
      $image3 = get_field('miam');

      $bouton = get_field('banner_button');
      $bouton2 = get_field('conf_button');
      $ora = get_field('ora_bouton');
      $actus = get_field('actus_bouton');

      $videos1 = get_field('video1');
      $videos2 = get_field('video2');
      $videos3 = get_field('video3');
      $videos4 = get_field('video4');
      $videos5 = get_field('video5');
      $videos6 = get_field('video6');
?>
  <h2><?php the_title(); ?></h2>
  <?php the_author(); ?>
  <a href="<?php the_permalink(); ?>"> Lire la suite</a>
<?php
    }
}
?>

</div>
<?php get_footer(); ?>
<!-- CODE HTML ICI -->
<section class="section-1">
  <div class="texte1">
    <h4><?php the_field('banner_baseline'); ?></h4>
      <h3> <?php the_field('banner_title1'); ?></h3>
          <h3> <?php the_field('banner_title2'); ?></h3>
          <div class="rencontre">
             <a class="banner_button" href="<?php echo $bouton['url']?>"><?php echo $bouton['title']; ?></a>
          </div>
    </div>
</section>

<section class="section-2">
  <div class="texte2">
    <div class="titre">
      <h3> <?php the_field('conference_title'); ?>   </h3>
    </div>
            <br/>
          <div class="txt1">
              <p> <?php the_field('conference_texte'); ?></p>
              <p> <?php the_field('conference_texte2'); ?></p>
              <p> <?php the_field('conference_texte3'); ?></p>
              <p> <?php the_field('conference_texte4'); ?></p>
          </div>
        <img class="image1" src="<?php echo $bandeau1['url']; ?>" alt=""/>
    </div>
</section>

<section class="section-3">
  <div class="texte3">
    <div class="titre">
      <h3> <p> <?php the_field('programme_title'); ?></p>  </h3>
    </div>
    <div class="textepgm">
      <div class="txtgauche">
        <div class="sstitre">
          <h4> <?php the_field('conf_sstitle1'); ?> </h4> <br/>
         </div>
            <?php
            $programs = get_field('programs');
            //var_dump($programs);
            foreach($programs as $program){
              echo "<div class='gauche'>";
              echo "<div class='hour'><b>".$program['hour']."</b></div>";
              echo $program['descrption'];
              echo "<br/>";
              echo "</div>";
            }
            ?>

        </div>

        <div class="txtdroite">
          <div class="sstitre">
            <h4>  <?php the_field('conf_sstitle2'); ?></h4><br/>
         </div>

         <?php
         $programs2 = get_field('programs2');
         //var_dump($programs);
         foreach($programs2 as $program1){
           echo "<div class='droite'>";
           echo "<div class='hour'> <b>".$program1['hour']."</b> </div>";
           echo $program1['descrption'];
           echo "<br/>";
           echo "</div>";
         }
         ?>
        </div>



      </div>
<a class="conf_button" href="<?php echo $bouton2['url']?>"><?php echo $bouton2['title']; ?></a>
<img class="image2" src="<?php echo $bandeau2['url']; ?>" alt=""/>

</section>

<section class="section-4">
  <div class="texte4">
    <div class="titre">
      <h3> <p> <?php the_field('ora_title'); ?></p>  </h3>
    </div>

    <div class="txt1">
      <p> <?php the_field('ora_sstitle'); ?></p>
    </div>
    <br/>
      <br/>
        <br/>
          <br/>

  <div class="oo">

    <div class="orateurs">

      <?php
      $orateurs = get_field('orateurs');
      //var_dump($programs);
      foreach($orateurs as $orateur){
        echo "<div class='orateur_personne'>";
        echo "<img class='image3' src=".$orateur['ora_photo']['url']." alt='' />";
        echo "<p class='ora_nom'>".$orateur['ora_nom']."</p>";
        echo "<p class='ora_fonction'>".$orateur['ora_fonction']."</p>";
        echo "<div class='ora_bouton'><a href=".$orateur['ora_bouton']['url'].">".$orateur['ora_bouton']['title']."</a></div>";
         echo "</div>";
      }
      echo "  </div>";
      echo "</br>";
        echo "<div class='orateurs'>";
      $orateurs2 = get_field('orateurs2');
      //var_dump($programs);
      foreach($orateurs2 as $orateur1){
        echo "<div class='orateur_personne'>";
        echo "<img class='image3' src=".$orateur1['ora_photo']['url']." alt='' />";
        echo "<p class='ora_nom'>".$orateur1['ora_nom']."</p>";
        echo "<p class='ora_fonction'>".$orateur1['ora_fonction']."</p>";
        echo "<div class='ora_bouton'><a href=".$orateur1['ora_bouton']['url'].">".$orateur1['ora_bouton']['title']."</a></div>";
         echo "</div>";
      }
      echo "</div>";
      ?>



        </div>
      </div>
</section>


<section class="section-5">
  <div class="titre">
      <h3> <p> <?php the_field('info_title'); ?></p>  </h3>
  </div>

  <div class="infos">
    <div class="infos_image" style="background-image:url('<?php echo $bandeau4['url'];?>'); background-repeat: no-repeat; background-size:cover;">
      <div class="barrevert">
        <div class="icone1">
          <img class="gps" src="<?php echo $image['url']; ?>"  alt=""/>
          <p> <?php the_field('infos_txt1'); ?></p>
        </div>

        <div class="icone2">
          <img class="gps" src="<?php echo $image2['url']; ?>"  alt=""/>
          <p> <?php the_field('infos_txt2'); ?></p>
        </div>

        <div class="icone3">
          <img class="gps" src="<?php echo $image3['url']; ?>"  alt=""/>
          <p> <?php the_field('infos_txt3'); ?></p>
        </div>
    </div>


  </div>
</div>






</section>





<section class="section-6">
  <div class="titre">
  <p class="videos_title"><?php the_field('video_title'); ?></p>
</div>
      <div class="videos_grande">
            <p class="video_premiere" style="background-image: url('<?php echo $videos1['url'];  ?>'); background-size: cover; height: 60vh;     width: 46%;"></p>
            <p class="video_premiere" style="background-image: url('<?php echo $videos2['url']; ?>'); background-size: cover; height: 60vh;     width: 46%;"></p>
      </div>
      <div class="videos_petite">
          <div class="videos_gauche">

              <div class="videos_display">
                  <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos3['url'];  ?>'); background-size: cover; height: 40vh;"></p>
                    <div class="videos_texte_presentation">
                      <p class="videos_texte"><?php the_field('videos_txt'); ?></p>
                      <p class="videos_texte_noms"><?php the_field('videos_nom1'); ?></p>
                    </div>
              </div>

                  <div class="videos_display">
                    <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos4['url'];  ?>'); background-size: cover; height: 40vh;"></p>
                        <div class="videos_texte_presentation">
                          <p class="videos_texte"><?php the_field('videos_txt2'); ?></p>
                          <p class="videos_texte_noms"><?php the_field('videos_nom2'); ?></p>
                        </div>
                  </div>

          </div>
        <div class="videos_droite">

          <div class="videos_display">
            <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos5['url'];  ?>'); background-size: cover; height: 40vh;"></p>
                <div class="videos_texte_presentation">
                  <p class="videos_texte"><?php the_field('videos_txt3'); ?></p>
                  <p class="videos_texte_noms"><?php the_field('videos_nom3'); ?></p>
                </div>
          </div>

              <div class="videos_display">
                <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos6['url'];  ?>'); background-size: cover; height: 40vh;"></p>
                    <div class="videos_texte_presentation">
                      <p class="videos_texte"><?php the_field('videos_txt4'); ?></p>
                      <p class="videos_texte_noms"><?php the_field('videos_nom4'); ?></p>
                    </div>
              </div>

        </div>
      </div>
</section>

<section class="section-7">

  <div class="titre">
  <h3><p class="actus_title"><?php the_field('actus_title'); ?></p></h3>
  </div>

    <?php
    $actus = get_field('repeteur');
    //var_dump($programs);
    foreach($actus as $actu){
      echo "<div class='actus'>";
      echo "<div class='ee'> </div>";
      echo "<img class='actus_image' src=".$actu['actus_image']['url']." alt='' />";
      echo "<p class='actus_texte1'>".$actu['actus_texte1']."</p>";
      echo "<p class='actus_texte2'>".$actu['actus_texte2']."</p>";
      echo "<div class='actus_bouton'><a href=".$actu['actus_bouton']['url'].">".$actu['actus_bouton']['title']."</a></div>";
      echo "<p class='date'>".$actu['date']."</p>";
       echo "</div>";
    }
    ?>
  </div>
</section>

<section class="section-8">

<?php


?>

</div>

<?php get_footer(); ?>
