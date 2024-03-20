<?php 
  $module = 2;
  $page = 11;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";

  
  include "includes/before.php"; 
?>

<h2>Unit 2.5: Model-free stock assessments</h2>

<p>For some stocks, <span class="gc-dwnld-info"><abbr title="Models: tools used to simplify a natural system so it can be more easily understood.">models</abbr></span> may not be used for stock assessment. There are several model-free methods that can be used for data-limited stocks that do not require intensive computations. These approaches instead look for patterns in the data using time series. This allows for tracking stock changes to estimate how it will respond to different management actions. </p>

<figure>
  <img src="../images/pile-of-fish.png">
  <figcaption>Photo credit: Gregory Puncher, DFO</figcaption>
</figure>


<p><b>Model-free stock assessments</b> often use time series of relative  <span class="gc-dwnld-info"><abbr title="Abundance (N): total number of fish in a stock.">abundance</abbr></span> or <span class="gc-dwnld-info"><abbr title="Biomass (B): the total weight of all fish in a stock.">biomass</abbr></span> as the basis for stock assessment instead of complex models that estimate absolute abundance. Model-free stock assessments may also estimate average biomass over time or the average <span class="gc-dwnld-info"><abbr title="Fishing mortality (F): measure of deaths in a stock due to all fishing activities, including targeted fishing, bycatch and discards, and other incidental mortality in other fisheries.">fishing mortality</abbr></span> rate that did not lead to stock decline over time. </p>

<p>Time series of relative biomass can support the identification of <span class="gc-dwnld-info"><abbr title="Reference point: a benchmark against which the biomass or abundance of the stock or the fishing mortality rate (or exploitation rate) can be measured in order to determine its status. These reference points can be targets, thresholds or limits depending on their intended use.">reference points</abbr></span>. For example, the lowest biomass from which a stock has recovered is sometimes used as a way to identify the <span class="gc-dwnld-info"><abbr title="Limit reference point (LRP): the stock status below which serious harm is occurring to the stock.">limit reference point</abbr></span>. The average relative biomass over time may be used to estimate the <span class="gc-dwnld-info"><abbr title="Upper stock reference point (USR): a threshold below which fishing must be reduced to avoid reaching the limit reference point.">upper stock reference</abbr></span>. Recommended harvest levels can also be set based on relative fishing mortality over time. </p>


<?php include "includes/after.php"; ?>