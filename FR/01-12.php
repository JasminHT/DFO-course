<?php 
  $module = 1;
  $page = 12;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";
  include "includes/before.php"; 
?>

<h2>Unité 1.3 : État des stocks et points de référence</h2>

<p>Une approche courante utilisée pour définir les points de référence consiste à les estimer sur la base de le rendement maximal durable d'un stock.</p>

<aside class='bg-info'>
  <h4>Définition : </h4>
  <p>Le <strong>rendement maximal durable (RMD)</strong> est la prise annuelle moyenne maximale qui peut être prélevée d’un stock sur une période indéfinie dans les conditions environnementales actuelles. Autrement dit, il s’agit de la récolte maximale qu’un stock peut soutenir sans nuire à sa croissance naturelle et à sa reconstitution. </p></aside>

<p>La <span class="gc-dwnld-info"><abbr title="Biomasse (B) : Le poids total de tous les poissons d’un stock.">biomasse</abbr></span> du stock qui produit le rendement maximal durable est appelée la <strong>B<sub>RMD</sub></strong>.</p>

<p>La B<sub>RMD</sub> est couramment utilisée pour éclairer les points de référence. Par exemple, un stock peut être considéré comme étant dans : </p>
<ul>
  <li>la zone critique, si la biomasse est inférieure à 40&nbsp;% de la B<sub>RMD</sub>&nbsp;;</li>
  <li>la zone de prudence, si la biomasse est supérieure à 40&nbsp;% mais inférieure à 80&nbsp;% de la B<sub>RMD</sub>&nbsp;;</li>
  <li>la zone saine, si la biomasse est supérieure à 80&nbsp;% de la B<sub>RMD</sub>.</li>
</ul>

<p>Il est possible que les points de référence pour un stock emploient d’autres mesures et soient inférieurs ou supérieurs à ce qui est présenté dans cet exemple, en fonction de la biologie du stock et des objectifs de la pêche. Dans tous les cas, les points de référence doivent résister à l’incertitude et être adaptés au stock et à la récolte afin de respecter la <a href="https://www.dfo-mpo.gc.ca/reports-rapports/regs/sff-cpd/precaution-fra.htm">Politique sur l’approche de précaution</a> du MPO.</p>

<figure class='image-transcript' >
      <img alt=''      src="../images/MSY-FR.png">
        <figcaption style="margin-top: 5px !important">
          <details id="inline-captions">
            <summary>Description<br></summary>
            <div class="mwsbodytext text parbase section">
          <p>Cette figure illustre de façon simplifiée la relation entre le rendement, sur l’axe des ordonnées, et la biomasse du stock, sur l’axe des abscisses. Le rendement en biomasse est indiqué par la ligne courbe noire pleine. Le sommet de la courbe, identifié par RMD, est le point correspondant aux prises annuelles moyennes les plus importantes à long terme qui peuvent être prélevées d’un stock dans les conditions environnementales en vigueur. La ligne en pointillé indique le point où le rendement maximal durable est atteint. </p>

            </div>
        </details>
      </figcaption>
</figure>




<?php include "includes/after.php"; ?>