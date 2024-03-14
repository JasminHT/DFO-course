<?php 
  $module = 2;
  $page = 2;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";
  include "includes/before.php"; 
?>

<h2>Unit 2.1: Types of data</h2>

<figure>
  <img src="../images/fishing-rod.png">
  <figcaption>Field technician fishing.<br> Photo credit: DFO</figcaption>
</figure>
  

<aside class='bg-info'>
  <h4>Definition: </h4>
<p>Scientific data used in stock assessments can come from a variety of sources that are grouped into 2 categories:</p>
<ul>
  <li><strong>fishery-dependent data</strong> are collected directly from commercial, recreational, or Indigenous food, social, and ceremonial (FSC) fisheries </li>
  <li><strong>fishery-independent data</strong> are collected from outside of fisheries</li>
</ul>
</aside>
<p>Each category plays an important and complementary role in stock assessments.</p>


<aside class='bg-warning'>
<h4>Key concept: </h4>
  <p>The primary difference between the 2 categories of data is that: </p>
  <ul>
    <li>fishery-dependent data are collected when and where fishing occurs</li>
    <li>fishery-independent data are often collected from broader geographic areas at different times</li>
  </ul>



</aside>


<h3>Fishery-dependent data</h3>
  
<p>Fishery-dependent data collected by commercial, recreational, and Indigenous FSC fisheries include: </p>
<ul>
  <li>catch </li>
  <li> <span class="gc-dwnld-info"><abbr title="Fishing effort: a measure of fishing activity using metrics such as the number of nets or lines used, the number of fishing vessels deployed, the number of hours spent fishing, etc.">fishing effort</abbr></span></li>
  <li>size (length and weight), number, and species of fish caught </li>
  <li><span class="gc-dwnld-info"><abbr title="Bycatch: the unintentional catch of a species when meaning to catch another. The retained portion of bycatch is called incidental catch, whereas the portion returned to the water is called discards.">bycatch</abbr></span> and discards</li>
</ul>

<p>Sources of fishery-dependent data collected by commercial, recreational, and Indigenous FSC fisheries can include:</p>
<ul>
	<li>landing records</li>
	<li>commercial sampling</li>
	<li>logbooks</li>
</ul>

<aside>
  <h3>Example: Verifying fishery-dependent data</h3>
<div class='row imagetext'>

  <div class='col-sm-6'>

    <figure>
      <img src="../images/orange-helmet.png" alt="DFO At-Sea Observer watching a fishing vessel">
      <figcaption>DFO At-Sea Observer.<br>
    Photo credit: DFO</figcaption>
    </figure>
    


  </div>
  <div class='col-sm-6'>
      <p>DFO’s At-Sea Observer and Dockside Monitoring programs provide independent third-party verification of fish harvesting activities. Observers are assigned to fishing vessels to collect accurate and timely information on fish harvest levels and sizes. </p>
  </div>
</div>
</aside>





<p>Where possible, the following indices may be estimated from fishery-dependent data: </p>
<ul>
<li><span class="gc-dwnld-info"><abbr title="Catch per unit effort: the quantity of fish caught with one standard unit of fishing effort (e.g., the number of fish taken per 1000 hooks per day or the weight of fish taken per hour of trawling). CPUE is often assumed to be a relative abundance index (i.e., proportional to the portion of the stock biomass (or numbers) vulnerable to the gear).">catch per unit effort</abbr></span> </li>
<li> <span class="gc-dwnld-info"><abbr title="Abundance (N): total number of fish in a stock.">abundance</abbr></span>, <span class="gc-dwnld-info"><abbr title="Biomass (B): the total weight of all fish in a stock.">biomass</abbr></span>, and <span class="gc-dwnld-info"><abbr title="Spawning stock biomass (SSB): the total weight of all fish in a stock that have reached reproductive maturity.">spawning stock biomass</abbr></span> </li>
<li>population metrics (for example, age structure and sex ratio)</li>
<li><span class="gc-dwnld-info"><abbr title="Recruitment: Recruitment occurs when new fish are added to a population. It is measured when small or young fish grow large or old enough to be caught in a fishery (which may be affected by catch limits or gear type) or scientific survey.">recruitment</abbr></span></li>
<li>metrics of individual fish condition (for example, weight-to-length ratios) </li>
<li><span class="gc-dwnld-info"><abbr title="Fishing mortality (F): measure of deaths in a stock due to all fishing activities, including targeted fishing, bycatch and discards, and other incidental mortality in other fisheries.">fishing mortality</abbr></span></li>

<li><span class="gc-dwnld-info"><abbr title="Gear selectivity: the likelihood of retention once a fish enters fishing gear. Gear selectivity is affected by gear design, such as mesh type and size, escape panels, hook size).">gear selectivity</abbr></span></li>
</ul>
<p>Fishery-dependent data can be collected over time to produce valuable data time series for stock assessment. For example, information on total catch over time is a common and key input to many stock assessment <span class="gc-dwnld-info"><abbr title="Models are tools used to simplify a natural system so it can be more easily understood.">models</abbr></span>.</p>


<?php include "includes/after.php"; ?>