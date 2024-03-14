
<?php 

if (!isset($module)) {

}

?>

<nav role="navigation" id="wb-sec" typeof="SiteNavigationElement" class="wb-sec col-md-3 col-md-pull-9">
  <h2>Menu</h2>
  <ul class="list-group menu list-unstyled">
    <li>
      <h3><a href="00-01.php">Objectifs du cours</a> </h3>
    </li>

    <li>
      <h3><a href="01-01.php">Module 1 : Principes de l’évaluation des stocks</a> </h3>
      <?php if ($module == 1) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="01-02.php" class="list-group-item">
        <strong>Unité 1.1 :</strong> Approche canadienne des sciences halieutiques</a></li>
        <li><a href="01-09.php" class="list-group-item">
        <strong>Unité 1.2 :</strong> Qu’est-ce que l’évaluation des stocks?</a></li>
        <li><a href="01-11.php" class="list-group-item">
        <strong>Unité 1.3 :</strong> État des stocks et points de référence</a></li>
      </ul>
      <?php } ?>
    </li>

    <li>
      <h3><a href="02-01.php">Module 2 : Réaliser des évaluations des stocks</a> </h3>
      <?php if ($module == 2) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="02-02.php" class="list-group-item">
        <strong>Unité 2.1 :</strong> Types de données</a></li>
        <li><a href="02-04.php" class="list-group-item">
        <strong>Unité 2.2 :</strong> Collecte de données</a></li>
        <li><a href="02-08.php" class="list-group-item">
        <strong>Unité 2.3 :</strong> Recherche</a></li>
        <li><a href="02-09.php" class="list-group-item">
        <strong>Unité 2.4 :</strong> Évaluations des stocks fondées sur des modèles</a></li>
        <li><a href="02-11.php" class="list-group-item">
        <strong>Unité 2.5 :</strong> Évaluations des stocks sans modèle</a></li>
      </ul>
      <?php } ?>
    </li>

    <li>
      <h3><a href="03-01.php">Module 3 : Résultats des évaluations de stocks </a> </h3>
      <?php if ($module == 3) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="03-02.php" class="list-group-item">
        <strong>Unité 3.1 :</strong> Produits</a></li>
        <li><a href="03-04.php" class="list-group-item">
        <strong>Unité 3.2 :</strong> Évaluation de la stratégie de gestion</a></li>
        <li><a href="03-06.php" class="list-group-item">
        <strong>Unité 3.3 :</strong> Incertitude</a></li>
      </ul>
      <?php } ?>
    </li>

    <li>
      <h3><a href="04-01.php">Module 4 : Avis scientifiques</a></h3>
      <?php if ($module == 4) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="04-02.php" class="list-group-item">
        <strong>Unité 4.1 :</strong> Le Secrétariat canadien des avis scientifiques </a></li>
        <li><a href="04-05.php" class="list-group-item">
        <strong>Unité 4.2 :</strong> Participer aux réunions d’examen par les pairs</a></li>
        <li><a href="04-06.php" class="list-group-item">
        <strong>Unité 4.3 :</strong> Atteindre un consensus</a></li>
        <li><a href="04-07.php" class="list-group-item">
        <strong>Unité 4.4 :</strong> Conflits d’intérêts</a></li>
      </ul>
      <?php } ?>
    </li>


    <li>
      <h3><a href="course-summary-resume-du-cours.php">Résumé du cours</a></h3>
    </li>

    <li>
      <h3><a href="resource-ressources.php">Ressources</a></h3>
    </li>

    <li>
      <h3><a href="glossary-glossaire.php">Glossaire</a></h3>
    </li>

  </ul>
</nav>