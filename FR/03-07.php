<?php 
  $module = 3;
  $page = 7;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";
  
  $next_module = 4;
  $next_page = 1;

  include "includes/before.php"; 
?>

<h2>Module 3 : Résumé</h2>

<figure>
  <img src="../images/fishing-landscape-trimmed.png">
  <figcaption>Source de la photo : Shutterstock
</figcaption>
</figure>

<ul class='summary lst-spcd'>
  <li>Les projections peuvent estimer la réaction possible des stocks aux mesures de gestion futures. </li>
  <li>Plus les projections regardent loin dans l’avenir, plus l’incertitude est grande. </li>
  <li>Les scientifiques doivent communiquer les risques aux gestionnaires en produisant des avis qui expriment l’incertitude associée à la prise de différentes mesures de gestion. </li>
  <li>L’évaluation de la stratégie de gestion fournit aux gestionnaires des renseignements pour évaluer les compromis entre les différentes stratégies de gestion.</li>

</ul>


<aside class='bg-warning'>
<p>Félicitations : vous avez terminé le module 3, Résultats des évaluations de stocks.</p> 
<p>À suivre : Module 4, Avis scientifiques.</p>
</aside>



<?php include "includes/after.php"; ?>