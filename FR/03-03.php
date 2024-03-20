<?php 
  $module = 3;
  $page = 3;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";
  
  include "includes/before.php"; 
?>

<h2>Unité 3.1 : Produits</h2>

<figure style="max-width:50%;    margin-left: 7em;    margin-top: 2em;">  
        <img src="../images/capelin-bucket.jpg" alt="Des capelans dans un seau.">
        <figcaption>
Source de la photo : MPO
</figcaption>

      </figure>

<p>Les <span class="gc-dwnld-info"><abbr title="Modèles : Des outils utilisés pour simplifier un système naturel afin qu'il soit plus facile à comprendre.">modèles</abbr></span> peuvent mettre à l’essai des options de gestion dans un environnement virtuel à faible coût et à faible risque. Les scientifiques doivent communiquer les risques aux gestionnaires en produisant des avis qui expriment l’incertitude associée à la prise de différentes mesures de gestion.</p>

<p>Voici quelques exemples courants de la manière dont les résultats de l'évaluation des stocks peuvent être communiqués :
</p>

<div class='collapsible blue' id="module1">
  <details>
    <summary>Analyse de sensibilité</summary>
    <p>Une <strong>analyse de sensibilité</strong> permet aux scientifiques d’explorer les effets de l’incertitude et des <span class="gc-dwnld-info"><abbr title="Hypothèse : Énoncé introduit dans un argument et (temporairement) accepté comme étant vrai.">hypothèses</abbr></span> en testant différents scénarios (comme une variation aléatoire dans le <span class="gc-dwnld-info"><abbr title="Recrutement : Le recrutement a lieu lorsque de nouveaux poissons sont ajoutés à une population. Il est mesuré lorsque des poissons petits ou jeunes sont assez grands ou assez vieux pour être capturés dans une pêcherie (qui peut être affectée par les limites de capture ou le type d'engin) ou dans une étude scientifique.">recrutement</abbr></span> ou différents facteurs environnementaux ayant une incidence sur la <span class="gc-dwnld-info"><abbr title="Mortalité naturelle : La mesure des mortalités dans un stock dues à toutes les causes autres que la pêche, comme : la prédation, la maladie, la disponibilité des proies, et la concurrence pour les ressources.>">mortalité naturelle</abbr></span>). Ils sont parfois inclus dans les conseils scientifiques pour les replacer dans leur contexte.</p>
  </details>
</div>


<div class='collapsible blue' id="module2">
  <details>
    <summary>Tableaux de décision</summary>
    <p>Ils utilisent souvent des <strong>tableaux de décision</strong> comme moyen simple de présenter des avis sur les conséquences et les compromis possibles qui accompagnent différentes décisions. Par exemple, les tableaux de décision peuvent décrire la probabilité qu’un stock soit au-dessus ou au-dessous d’un <span class="gc-dwnld-info"><abbr title="Point de référence : Un repère par rapport auquel la biomasse ou l’abondance du stock ou le taux de mortalité par pêche (ou taux d’exploitation) peuvent être mesurés afin de déterminer son état. Ces points de référence peuvent être des objectifs, des seuils ou des limites, selon l’usage auquel ils sont destinés.">point de référence</abbr></span>, ou le rendement <span class="gc-dwnld-info"><abbr title="Projections : Explorer et comparer les résultats de nombreux scénarios qui pourraient se produire.">projeté</abbr></span> à différents niveaux de pêche.</p>
    <aside class='bg-info'>
      <h4>Définition : </h4>
      <p>La <strong>probabilité</strong> est la mesure dans laquelle un événement ou un scénario est susceptible de se produire.</p> </aside>

    <h3>Tableaux de décision</h3>
<figure class="wb-mltmd video-embed">

  <iframe width="640" height="360" src="https://www.youtube.com/embed/fGqTla1v7KU" title="Unit 3-1  Outputs Decision Table" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  <figcaption>
    <details id="inline-captions">
      <summary>Transcription de la vidéo</summary>      



      <p>[La musique de fond commence]</p>

      <p>[Visuel : Les mots « Exemple : Tableau de décision » apparaissent.]</p>

      <p>Narratrice: Exemple : Tableau de décision</p>

      <p>[Visuel : Les mots « Les scientifiques utilisent des tableaux de décision lorsqu’ils émettent des avis sur l’état des stocks de poissons à différents niveaux de pêche. » apparaissent.]</p>

      <p>Narratrice: Les scientifiques utilisent des tableaux de décision lorsqu’ils émettent des avis sur l’état des stocks de poissons à différents niveaux de pêche. Voici un exemple.</p>


      <table ><tbody>
            <tr>
            <td>Stratégie de capture annuelle (t)</td>
            <td>2013</td>
            <td>2014</td>
            <td>2015</td>
            <td>2016</td>
            <td>2017</td>
            <td>2018</td>
            </tr>
            <tr>
            <td>0</td>
            <td>0.87</td>
            <td>0.88</td>
            <td>0.90</td>
            <td>0.92</td>
            <td>0.93</td>
            <td>0.94</td>
            </tr>
            <tr><td>200</td>
            <td>0.87</td>
            <td>0.88</td>
            <td>0.89</td>
            <td>0.90</td>
            <td>0.91</td>
            <td>0.92</td>
            </tr>
            <tr >
            <td>400</td>
            <td>0.87</td>
            <td>0.87</td>
            <td>0.88</td>
            <td>0.88</td>
            <td>0.89</td>
            <td>0.90</td>
            </tr>
            <tr >
            <td>600</td>
            <td>0.87</td>
            <td>0.86</td>
            <td>0.86</td>
            <td>0.86</td>
            <td>0.87</td>
            <td>0.87</td>
            </tr>
            <tr >
            <td>800</td>
            <td>0.87</td>
            <td>0.86</td>
            <td>0.85</td>
            <td>0.85</td>
            <td>0.85</td>
            <td>0.85</td>
            </tr>
            <tr >
            <td>1000</td>
            <td>0.87</td>
            <td>0.85</td>
            <td>0.83</td>
            <td>0.83</td>
            <td>0.82</td>
            <td>0.81</td>
            </tr>
            </tbody>
            </table>


      <p>[Visuel : Un tableau apparaît avec le titre « Table de décision : Probabilité d’être dans la zone saine ». 7 colonnes sont intitulées, de gauche à droite : Niveau de capture annuel (t) ; 2013 ; 2014 ; 2015 ; 2016 ; 2017 ; 2018 ;. Le tableau comporte 6 lignes.]</p>

      <p>Narratrice: La première colonne du tableau de décision indique différents niveaux de capture en tonnes.</p>

      <p>[Visuel : la première colonne est surlignée en bleu foncé.]</p>

      <p>Narratrice: Les lignes indiquent la probabilité qu’un stock se trouve dans la zone saine au début de chaque année pour chaque niveau de capture (remarque : la probabilité en 2013 est la même parce qu’il s’agit du point de départ de toutes les projections).</p>

      <p>[Visuel : La deuxième colonne (2013) est surlignée en bleu foncé.]</p>

      <p>Narratrice: Si les captures sont réduites à zéro, la probabilité que le stock se trouve dans la zone saine augmente avec le temps.</p>

      <p>[Visuel: La première ligne (0) est surlignée en bleu foncé.]</p>

      <p>Narratrice: À 600 tonnes de captures annuelle, la probabilité que le stock se trouve dans la zone saine demeure stable.</p>

      <p>[Visuel: La 4ème ligne (600) est surlignée en bleu foncé.]</p>

      <p>Narratrice: Si les captures augmentent à 1 000 tonnes, la probabilité qu’il se trouve dans la zone saine diminue avec le temps.</p>

      <p>[Visuel: La dernière ligne (1000) est surlignée en bleu foncé.]</p>


      <table ><tbody>
            <tr >
            <td>Stratégie de capture annuelle (t)</td>
            <td>2013</td>
            <td>2014</td>
            <td>2015</td>
            <td>2016</td>
            <td>2017</td>
            <td>2018</td>
            </tr>
            <tr >
            <td>0</td>
            <td>0.13</td>
            <td>0.12</td>
            <td>0.10</td>
            <td>0.08</td>
            <td>0.07</td>
            <td>0.06</td>
            </tr>
            <tr >
            <td>200</td>
            <td>0.13</td>
            <td>0.12</td>
            <td>0.11</td>
            <td>0.10</td>
            <td>0.09</td>
            <td>0.08</td>
            </tr>
            <tr >
            <td>400</td>
            <td>0.13</td>
            <td>0.13</td>
            <td>0.12</td>
            <td>0.12</td>
            <td>0.11</td>
            <td>0.10</td>
            </tr>
            <tr >
            <td>600</td>
            <td>0.13</td>
            <td>0.14</td>
            <td>0.14</td>
            <td>0.14</td>
            <td>0.13</td>
            <td>0.13</td>
            </tr>
            <tr >
            <td>800</td>
            <td>0.13</td>
            <td>0.14</td>
            <td>0.15</td>
            <td>0.15</td>
            <td>0.15</td>
            <td>0.15</td>
            </tr>
            <tr >
            <td>1000</td>
            <td>0.13</td>
            <td>0.15</td>
            <td>0.17</td>
            <td>0.17</td>
            <td>0.18</td>
            <td>0.19</td>
            </tr>
            </tbody>
            </table>


      <p>Narratrice: Le tableau de décision peut également être inversé pour montrer la probabilité qu’un stock tombe sous la zone saine. </p>

      <p>[Visuel: Les valeurs du tableau sont inversées.]</p>

      <p>Narratrice: À un niveau de capture inférieur, la probabilité qu’un stock tombe en dessous de la zone saine diminue avec le temps.</p>
      <p></p>

      <p>[Visuel: La 3ème ligne (400) est surlignée en bleu foncé].</p>

      <p>Narratrice: À un niveau de capture plus élevé, la probabilité qu’un stock tombe en dessous de la zone saine augmente avec le temps.</p>

      <p>[Visuel: La 5ème ligne (800) est surlignée en bleu foncé.]</p>

      <p>Narratrice: Il s’agit d’une façon utile d’examiner comment le risque augmente avec le niveau de capture.</p>

      <p>[La musique se termine]</p>

      <p>[Visuel : Le texte passe au noir.]</p>

      <p>[Visuel : Le logo de Pêches et Océans Canada apparaissent.]</p>

      <p>[Visuel : Le logo du gouvernement du Canada apparaissent.]</p>

    </details>
  </figcaption>
</figure>

  </details>
</div>




<?php include "includes/after.php"; ?>