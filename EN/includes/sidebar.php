
<?php 

if (!isset($module)) {

}

?>

<nav role="navigation" id="wb-sec" typeof="SiteNavigationElement" class="wb-sec col-md-3 col-md-pull-9">
  <h2>Menu</h2>
  <ul class="list-group menu list-unstyled">
    <li>
      <h3><a href="00-01.php">Course objectives</a> </h3>
    </li>

    <li>
      <h3><a href="01-01.php">Module 1: Principles of stock assessment</a> </h3>
      <?php if ($module == 1) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="01-02.php" class="list-group-item">
        <strong>Unit 1.1:</strong> Canada’s approach to fisheries science</a></li>
        <li><a href="01-09.php" class="list-group-item">
        <strong>Unit 1.2:</strong> What is stock assessment?</a></li>
        <li><a href="01-12.php" class="list-group-item">
        <strong>Unit 1.3:</strong>  Stock status and reference points</a></li>
      </ul>
      <?php } ?>
    </li>

    <li>
      <h3><a href="02-01.php">Module 2: Conducting stock assessments</a> </h3>
      <?php if ($module == 2) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="02-02.php" class="list-group-item">
        <strong>Unit 2.1:</strong> Types of data</a></li>
        <li><a href="02-04.php" class="list-group-item">
        <strong>Unit 2.2:</strong> Data collection</a></li>
        <li><a href="02-08.php" class="list-group-item">
        <strong>Unit 2.3:</strong> Research</a></li>
        <li><a href="02-09.php" class="list-group-item">
        <strong>Unit 2.4:</strong> Model-based stock assessments</a></li>
        <li><a href="02-11.php" class="list-group-item">
        <strong>Unit 2.5:</strong> Model-free stock assessments</a></li>
      </ul>
      <?php } ?>
    </li>

    <li>
      <h3><a href="03-01.php">Module 3: Stock assessment results</a> </h3>
      <?php if ($module == 3) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="03-02.php" class="list-group-item">
        <strong>Unit 3.1:</strong> Outputs</a></li>
        <li><a href="03-04.php" class="list-group-item">
        <strong>Unit 3.2:</strong> Management Strategy Evaluation</a></li>
        <li><a href="03-06.php" class="list-group-item">
        <strong>Unit 3.3:</strong> Uncertainty</a></li>
      </ul>
      <?php } ?>
    </li>

    <li>
      <h3><a href="04-01.php">Module 4: Science advice</a></h3>
      <?php if ($module == 4) { ?>
      <ul class="list-group menu list-unstyled">
        <li><a href="04-02.php" class="list-group-item">
        <strong>Unit 4.1:</strong> Canadian Science Advisory Secretariat </a></li>
        <li><a href="04-05.php" class="list-group-item">
        <strong>Unit 4.2:</strong> Participating in peer review meetings</a></li>
        <li><a href="04-06.php" class="list-group-item">
        <strong>Unit 4.3:</strong> Reaching consensus</a></li>
        <li><a href="04-07.php" class="list-group-item">
        <strong>Unit 4.4:</strong> Conflicts of interest</a></li>
      </ul>
      <?php } ?>
    </li>


    <li>
      <h3><a href="course-summary-resume-du-cours.php">Course summary</a></h3>
    </li>

    <li>
      <h3><a href="resources-ressources.php">Resources</a></h3>
    </li>

    <li>
      <h3><a href="glossary-glossaire.php">Glossary</a></h3>
    </li>

  </ul>
</nav>