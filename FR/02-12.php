<?php 
  $module = 2;
  $page = 12;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";

  $next_module = 3;
  $next_page = 1;
  
  include "includes/before.php"; 
?>

<h2>Module 2 : Résumé</h2>

<figure>
  <img src="../images/american-lobster.jpg">
  <figcaption>Homard en Nouvelle-Écosse.<br>
    Source de la photo : Ben Zisserson, MPO
  </figcaption>
</figure>

<ul class='summary lst-spcd'>
<li>Les évaluations des stocks peuvent demander de grandes quantités de données, recueillies sur plusieurs années. </li>
<li>Les données dépendantes de la pêche sont recueillies directement auprès des pêches commerciales, récréatives ou autochtones à des fins alimentaires, sociales et rituelles (ASR). Les données indépendantes de la pêche sont recueillies en dehors des pêches. Les deux catégories jouent un rôle important et complémentaire dans l’évaluation des stocks.</li>
<li>Le MPO effectue régulièrement des relevés de surveillance pour recueillir des données indépendantes de la pêche. La surveillance entreprise par les détenteurs de droits et les intervenants (tels que les peuples Autochtones et les industries de la pêche) au-delà de leurs activités de récolte est également une source essentielle de connaissances, d’expertise et de capacité indépendantes des pêches au Canada. </li>
<li>Il peut exister des lacunes dans les connaissances entre les données dépendantes de la pêche et les données indépendantes de la pêche. Des recherches précises sur les pêches sont menées pour combler ces lacunes.</li>
<li>La modélisation permet aux scientifiques de combiner des observations diverses et complexes pour mieux comprendre l’état passé, présent et futur du stock dans différentes conditions de récolte et environnementales. Des modèles peuvent également servir à déterminer les <span class="gc-dwnld-info"><abbr title="Point de référence : un repère par rapport auquel la biomasse ou l’abondance du stock ou le taux de mortalité par pêche (ou taux d’exploitation) peuvent être mesurés afin de déterminer son état. Ces points de référence peuvent être des objectifs, des seuils ou des limites, selon l’usage auquel ils sont destinés.">points de référence</abbr></span>. </li>
<li>Plusieurs méthodes sans modèle qui ne nécessitent pas de calculs intensifs peuvent être utilisées pour les stocks pour lesquels les données sont limitées. Elles cherchent plutôt à dégager des tendances dans les données à l’aide de séries chronologiques.</li>

</ul>

<aside class='bg-warning'>
<p>Félicitations : vous avez terminé le module 2, Réaliser des évaluations des stocks.</p> 
<p>À suivre : Module 3, Résultats des évaluations de stocks.</p>
</aside>


<?php include "includes/after.php"; ?>