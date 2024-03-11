<?php 
  $module = 3;
  $page = 2;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";

  
  include "includes/before.php"; 
?>

<h2>Unit 3.1: Outputs</h2>

<p>Model-based stock assessments can often be used to project how stocks could react to different management actions. Projections are usually short-term (for example, 2 to 4 years), but can also be long-term (for example, 20 to 40 years). The farther into the future projections look, the greater uncertainty becomes. Long-term projections are more useful for evaluating overall management strategies than for making short-term decisions.</p>


    <figure>
      <img src="../images/module-3-chart.png" alt='Graph of historical and projected spawning stock biomass at various catch levels'>
    </figure>
    <div class="mwsaccordion-html section">
      <details>
          <summary>Long description<br></summary>
          <div class="mwsbodytext text parbase section">
            <p>Historical (black) and projected (red) spawning biomass for various catch levels. The length of each bar indicates the amount of uncertainty for each year. Note that as projections progress in years, uncertainty increases.</p>
          </div>
      </details>
    </div>


    <aside class='bg-warning'>Projections are not predictions. <strong>Predictions</strong> aim to forecast the most likely scenario, whereas <strong>projections</strong> explore and compare the outcomes of many scenarios that could happen. </aside>

    <p>The results of projections can change as <span class="gc-dwnld-info"><abbr title="Assumption: a statement introduced into an argument that is accepted as being true.">assumptions</abbr></span> change (for example, about environmental factors or catch levels).</p>



<?php include "includes/after.php"; ?>