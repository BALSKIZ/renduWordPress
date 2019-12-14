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
?>
<!-- CODE HTML ICI -->
<section class="section-1">
  <div class="texte1">
    <h4><?php the_field('banner_baseline'); ?></h4>
      <h3> <?php the_field('banner_title1'); ?></h3>
          <h3> <?php the_field('banner_title2'); ?></h3>
          <div class="rencontre">
            <input href="#" type="button" value="S'INSCRIRE AUX RENCONTRES">
          </div>
    </div>
</section>

<section class="section-2">
  <div class="texte2">
    <div class="titre">
      <h3> <?php the_field('conference_title'); ?>   </h3>
    </div>
        <div class="trait">
          <p> __________________________ </p>
        </div>
            <br/>
          <div class="txt1">
              <p> <?php the_field('conference_texte'); ?></p>
              <p> <?php the_field('conference_texte2'); ?></p>
              <p> <?php the_field('conference_texte3'); ?></p>
              <p> <?php the_field('conference_texte4'); ?></p>
          </div>
        <div class="image1">
        </div>
    </div>
</section>

<section class="section-3">
  <div class="texte3">
    <div class="titre">
      <h3> <p> <?php the_field('programme_title'); ?></p>  </h3>
    </div>
    <div class="trait">
      <p> __________________________ </p>
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
              echo "<b>".$program['hour']."</b>";
              echo $program['descrption'];
              echo "<br/>";
            }
            ?>
        </div>

        <div class="txtdroite">
          <div class="sstitre">
            <h4>  </h4> <?php the_field('conf_sstitle2'); ?><br/>
         </div>

              <p><b> 11:15 </b> <?php the_field('p6'); ?> </p>
              <p><b> 11:35 </b> <?php the_field('p7'); ?></p>
              <p><b> 12:00 </b> <?php the_field('p8'); ?> </p>
              <p><b> 12:30 </b> <?php the_field('p9'); ?> </p>
        </div>
      </div>

    <div class="rencontre">
      <input href="#" type="button" value="S'INSCRIRE AUX RENCONTRES">
    </div>
          <img src="../img/programme.png"/>
</section>

<section class="section-4">
  <div class="texte4">
    <div class="titre">
      <h3> <p>  LES ORATEURS</p>  </h3>
    </div>
    <div class="trait">
      <p> __________________________ </p>
    </div>
    <div class="txt1">
      <p> Lorem ipsum calidae por portittor et sit amet dolor callis </p>
    </div>

  <div class="oo">

    <div class="orateurs">

      <div class="orateurs1">
        <img src="../img/portrait.jpg"/>
          <div class="nom"> <p> Wim de Fries </p> </div>
            <div class="fonctions">
              <p> Lorem ipsum calidae (1)</p>
            </div>
        <input type="submit" value="LIRE LA VIDEO"/>
      </div>

        <div class="orateurs2">
          <img src="../img/portrait.jpg"/>
            <div class="nom"> <p> Laurence Depezay </p> </div>
              <div class="fonctions">
                <p> Lorem ipsum calidae (6)</p>
              </div>
          <input type="submit" value="EN SAVOIR PLUS"/>
        </div>


          <div class="orateurs3">
            <img src="../img/portrait.jpg"/>
              <div class="nom"> <p> Armando Perez Cueto </p> </div>
                <div class="fonctions">
                  <p> Copenhagen University (3)</p>
                </div>
            <input type="submit" value="LIRE LA VIDEO"/>
          </div>


            <div class="orateurs4">
              <img src="../img/portrait.jpg"/>
                <div class="nom"> <p> Christophe </p> </div>
                  <div class="fonctions">
                    <p> Lorem ipsum calidae (4)</p>
                  </div>
              <input type="submit" value="LIRE LA TRIBUNE"/>
            </div>

          </div>

          <div class="orateursbis">

            <div class="orateurs5">
              <img src="../img/portrait.jpg"/>
                <div class="nom"> <p> Benjamin Alles </p> </div>
                  <div class="fonctions">
                    <p> Paris XII University (2)</p>
                  </div>
              <input type="submit" value="LIRE LA TRIBUNE"/>
            </div>

            <div class="orateurs6">
              <img src="../img/portrait.jpg"/>
                <div class="nom"> <p> Jacinthe Lafronière </p> </div>
                  <div class="fonctions">
                    <p> Lorem ipsum calidae (5)</p>
                  </div>
              <input type="submit" value="LIRE LA TRIBUNE"/>
            </div>

        </div>
      </div>
</section>

<section class="section-5">
  <div class="texte5">
    <div class="titre">
      <h3> <p>  INFORMATIONS PRATIQUES</p>  </h3>
    </div>
    <div class="trait">
      <p> __________________________ </p>
    </div>
    <div class="illustration">
      <div class="barrevert">
        <div class="tx">
        <p><u>Square Brussels<br/>
        Mont des Arts<br/>
        1000 Bruxelles<br/>
        Belgique</u>
        <br/></p>
        <p>_____________________________________</p>
        <p> Le 03.12.19<br/>
         de 8h30 à 12h30<br/>
        _____________________________________</p>
        <p> Healthy<br/>
         Walking Dinner</p>
       </div>
    </div>

</section>

<section class="section-6">
    <div class="texte5">
      <div class="titre">
        <h3> <p>VIDEOS</p>  </h3>
      </div>
      <div class="trait">
        <p> __________________________ </p><br/>
      </div>

</section>
<?php
  }
}
?>

</div>

<?php get_footer(); ?>
