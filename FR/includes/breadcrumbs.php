    <nav id="wb-bc" property="breadcrumb">
      <h2>Vous êtes içi:</h2>
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="https://www.canada.ca/fr.html">Canada.ca</a></li>
          <li><a href="https://www.dfo-mpo.gc.ca/index-fra.html">Pêches et Océans Canada</a></li>
          <li><a href='00-01.php'>TBD</a></li>
          <li><a href='00-01.php'>Introduction à l’évaluation des stocks</a></li>

          <?php
            $pagecount = 0;

            if ($module == 0) {
              $pagecount = 1;
              echo "<li><a href='00-01.php'>Objectifs du cours</a></li>";
            }

            if ($module == 1) {
              $pagecount = 15;
              echo "<li><a href='01-02.php'>Principes de l’évaluation des stocks</a></li>";

              /*if ($page < 9) 
                { echo "<li><a href='01-02.php'>Unité 1.1 : Approche canadienne des sciences halieutiques </a></li>"; }
              else if ($page >= 9 && $page < 12)
                { echo "<li><a href='01-09.php'>Unité 1.2 : Qu’est-ce que l’évaluation des stocks?</a></li>"; }
              else 
                { echo "<li><a href='01-12.php'>Unité 1.3 : État des stocks et points de référence</a></li>"; }*/
            }

            if ($module == 2 ) {
              $pagecount = 12;
              echo "<li><a href='02-01.php'>Réaliser des évaluations des stocks</a></li>" ;

              /*if ($page <  4) 
                { echo "<li><a href='02-02.php'>Unité 2.1 : Types de données</a></li>"; }
              else if ($page >= 4 && $page < 8)
                { echo "<li><a href='02-04.php'>Unité 2.2 : Collecte de données</a></li>"; }
              else if ($page >= 8 && $page < 9)
                { echo "<li><a href='02-08.php'>Unité 2.3 : Recherche</a></li>"; }
              else if ($page >= 9 && $page < 11)
                { echo "<li><a href='02-09.php'>Unité 2.4 : Évaluations des stock fondée sur un modèle</a></li>"; }
              else if ($page >= 11 && $page < 11)
                { echo "<li><a href='02-11.php'>Unité 2.5 : Évaluations des stocks sans modèle</a></li>"; }
              else { 
                echo "<li><a href='02-12.php'>Résumé</a></li>"; }*/
  
            }

            if ($module == 3 ) {
              $pagecount = 7;
              echo "<li><a href='03-01.php'>Résultats des évaluations de stocks </a></li>" ;

              /*if ($page <  4) 
                { echo "<li><a href='02-02.php'>Unité 3.1 : Produits</a></li>"; }
              else if ($page >= 4 && $page < 7)
                { echo "<li><a href='02-04.php'>Unité 3.2 : Évaluation de la stratégie de gestion</a></li>"; }
              else
                { echo "<li><a href='02-06.php'>Unité 3.3 : Incertitude</a></li>"; }*/
            }

            if ($module == 4 ) {
            $pagecount = 8;
             echo "<li><a href='04-01.php'>Avis scientifiques</a></li>" ;

              /*if ($page <  5) 
                { echo "<li><a href='04-02.php'>Unité 4.1 : Le Secrétariat canadien des avis scientifiques</a></li>"; }
              else if ($page == 5)
                { echo "<li><a href='04-05.php'>Unité 4.2 : Participer aux réunions d’examen par les pairs</a></li>"; }
              else if ($page == 6)
                { echo "<li><a href='04-06.php'>Unité 4.3 : Atteindre un consensus</a></li>"; }
              else if ($page == 7)
                { echo "<li><a href='04-07.php'>Unité 4.4 : Conflits d’intérêts</a></li>"; }*/
            }

            if ($module == 9) {
              $pagecount = 0;
              echo "<li><a href='.'>".$page_title."</a></li>";
            }
          ?>


          </a></li>
            <?php 
            /*if ($pagecount > 0)
              { echo "<li>Page ".$page." de ".$pagecount."</li>"; }*/
            ?>
        </ol>
      </div>
    </nav>