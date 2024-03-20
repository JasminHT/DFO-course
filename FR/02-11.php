<?php 
  $module = 2;
  $page = 11;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";

  
  include "includes/before.php"; 
?>

<h2>Unité 2.5 : Évaluations des stocks sans modèle</h2>

<p>Il peut ne pas être possible d’utiliser des <span class="gc-dwnld-info"><abbr title="Modèles : Des outils utilisés pour simplifier un système naturel afin qu'il soit plus facile à comprendre.">modèles</abbr></span> pour les évaluations de certains stocks. Plusieurs méthodes sans modèle qui ne demandent pas de calculs intensifs peuvent être utilisées pour les stocks pour lesquels les données sont limitées. Elles cherchent plutôt à dégager des tendances dans les données à l’aide de séries chronologiques. On peut alors suivre les changements dans le stock pour estimer comment il réagira à différentes mesures de gestion. </p>

<figure>
  <img src="../images/pile-of-fish.png">
  <figcaption>Source de la photo : Gregory Puncher, MPO
</figcaption>
</figure>


<p>Les <b>évaluations des stocks sans modèle</b> utilisent souvent des séries chronologiques de <span class="gc-dwnld-info"><abbr title="Abondance (N) : Nombre total de poissons dans un stock.">l’abondance</abbr></span> relative ou de la <span class="gc-dwnld-info"><abbr title="Biomasse (B) : Le poids total de tous les poissons d’un stock.">biomasse</abbr></span> comme base pour l’évaluation des stocks plutôt que des modèles complexes qui estiment l’abondance absolue. Les évaluations des stocks sans modèle peuvent également estimer la biomasse moyenne dans le temps ou le taux moyen de <span class="gc-dwnld-info"><abbr title="Mortalité par pêche : Mesure des mortalités dans un stock attribuables à toutes les activités de pêche, y compris la pêche ciblée, les prises accessoires et les autres mortalités fortuites dans d’autres pêches.">mortalité par la pêche</abbr></span> qui n’a pas entraîné la diminution des stocks au fil du temps. </p>

<p>Les séries chronologiques de la biomasse relative peuvent faciliter la détermination des <span class="gc-dwnld-info"><abbr title="Point de référence : un repère par rapport auquel la biomasse ou l’abondance du stock ou le taux de mortalité par pêche (ou taux d’exploitation) peuvent être mesurés afin de déterminer son état. Ces points de référence peuvent être des objectifs, des seuils ou des limites, selon l’usage auquel ils sont destinés.">points de référence</abbr></span>. Par exemple, on utilise parfois la plus faible biomasse à partir de laquelle un stock s’est rétabli pour calculer le <span class="gc-dwnld-info"><abbr title="Point de référence limite (PRL) : L’état d’un stock au-dessous duquel ce dernier subit de graves dommages.">point de référence limite (PRL)</abbr></span>. La biomasse relative moyenne dans le temps peut servir à estimer le <span class="gc-dwnld-info"><abbr title="Point de référence supérieur du stock (PRS) : Un seuil au-dessous duquel il faut réduire la pêche afin d’éviter d’atteindre le PRL.">point de référence supérieur du stock (PRS)</abbr></span>. Les niveaux de récolte recommandés peuvent également être établis en fonction de la mortalité relative par la pêche au fil du temps.</p>


<?php include "includes/after.php"; ?>