<?php 
  $module = 1;
  $page = 12;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";
  include "includes/before.php"; 
?>

<h2>Unit 1.3:  Stock status and reference points</h2>

<p>A common approach used to define reference points is to estimate them based on a stock’s maximum sustainable yield.</p>

<aside class='bg-info'>
  <h4>Definition: </h4>
  <p><strong>Maximum sustainable yield (MSY)</strong> is the maximum average annual catch that can be removed from a stock over an indefinite period of time under current environmental conditions. In other words, it is the maximum harvest a stock can sustain over the long term without impairing the stock’s ability to replenish itself.</p></aside>

<p>The stock <span class="gc-dwnld-info"><abbr title="Biomass (B): the total weight of all fish in a stock.">biomass</abbr></span>  that produces the maximum sustainable yield is referred to as <strong>B<sub>MSY</sub></strong>.</p>

<p>B<sub>MSY</sub> is commonly used to inform reference points. For example, a stock may be considered in the:</p>
<ul>
<li>critical zone if the biomass is less than 40% of B<sub>MSY</sub></li>
<li>cautious zone if the biomass is above 40% but less than 80% of B<sub>MSY</sub></li>
<li>healthy zone if the biomass is higher than 80% of B<sub>MSY</sub></li>
</ul>
<p>Reference points for a stock may use other metrics and be set lower or higher than this example, depending on the biology of the stock and the objectives for the fishery. In any case, reference points should be suitably robust to uncertainty and appropriate for the stock and the fishery to be consistent with DFO’s <a href="https://www.dfo-mpo.gc.ca/reports-rapports/regs/sff-cpd/precaution-eng.htm">Precautionary Approach Policy</a>.</p>

<figure class='image-transcript' >
  <img alt=''      src="../images/MSY-EN.png">
  <figcaption style="margin-top: 5px !important">
    <details id="inline-captions">
      <summary>Long description<br></summary>
      <div class="mwsbodytext text parbase section">
      <p>This figure is a simplified illustration to show yield on the y-axis versus stock biomass on the x-axis. The yield in biomass is shown by the solid black curved line. The peak of the curve, shown as MSY, is the point at which the maximum average annual catch that can be removed from a stock over an indefinite period of time under current environmental conditions occurs. The dotted line shows the point at which the maximum sustainable yield is reached.</p>

      </div>
    </details>
  </figcaption>
</figure>

   




<?php include "includes/after.php"; ?>