 <?php 

 if ($exporting == true) {
    $filetype = ".html";
 } else {
    $filetype = ".php";
 }

 ?>

  <!--- Begin custom page content --->

    <nav id="wb-bc" property="breadcrumb">
      <h2>Vous êtes içi:</h2>
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="https://www.canada.ca/fr.html">Canada.ca</a></li>
          <li><a href="https://www.dfo-mpo.gc.ca/index-fra.html">Pêches et Océans Canada</a></li>
          <li><a href='00-01<?=$filetype ?>'>TBD</a></li>
          <li><a href='00-01<?=$filetype ?>'>Introduction à l’évaluation des stocks</a></li>

          <?php
            $pagecount = 0;

            if ($module == 0) {
              $pagecount = 1;
              echo "<li><a href='00-01".$filetype."'>Objectifs du cours</a></li>";
            }

            if ($module == 1) {
              $pagecount = 14;
              echo "<li><a href='01-02".$filetype."'>Principes de l’évaluation des stocks</a></li>";
            }

            if ($module == 2 ) {
              $pagecount = 12;
              echo "<li><a href='02-01".$filetype."'>Réaliser des évaluations des stocks</a></li>" ;
  
            }

            if ($module == 3 ) {
              $pagecount = 7;
              echo "<li><a href='03-01".$filetype."'>Résultats des évaluations de stocks </a></li>" ;

            }

            if ($module == 4 ) {
            $pagecount = 8;
             echo "<li><a href='04-01".$filetype."'>Avis scientifiques</a></li>" ;

            }

            if ($module == 9) {
              $pagecount = 0;
              echo "<li><a href=''>".$page_title."</a></li>";
            }
          ?>
        </ol>
      </div>
    </nav>