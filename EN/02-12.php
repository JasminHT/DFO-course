<?php 
  $module = 2;
  $page = 12;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";

  $next_module = 3;
  $next_page = 1;
  
  include "includes/before.php"; 
?>

<h2>Module 2: Summary</h2>

<figure>
  <img src="../images/american-lobster.jpg">
  <figcaption>American Lobster in Nova Scotia.<br>
    Photo credit: Ben Zisserson, DFO
  </figcaption>
</figure>

<ul class='summary lst-spcd'>
<li>Stock assessments can require large amounts of data, collected over multiple years.</li>
<li>Fishery-dependent data are collected directly from commercial, recreational, or Indigenous FSC fisheries. Fishery-independent data are collected from outside of fisheries. Both play important and complementary roles in stock assessments.</li>
<li>DFO regularly carries out monitoring surveys to collect fishery-independent data. Monitoring undertaken by <span class="gc-dwnld-info"><abbr title="Rights-holders: modern successors to the Indigenous collectives that signed treaties, occupied and used land, and engaged in historic practices that support a finding of an Aboriginal right or Aboriginal title.">Rights-holders</abbr></span> and stakeholders, such as Indigenous Peoples and fishing industries, beyond their harvesting activities is also a critical source of fishery-independent knowledge, expertise, and capacity in Canada.</li>
<li>Knowledge gaps can exist between fishery-dependent and fishery-independent data. Dedicated fisheries research is carried out to fill these gaps.</li>
<li><span class="gc-dwnld-info"><abbr title="Models: tools used to simplify a natural system so it can be more easily understood.">Modelling</abbr></span> allows scientists to combine diverse and complex observations into a clearer understanding of past, present, and future <span class="gc-dwnld-info"><abbr title="Stock status: refers to a determination made, on the basis of stock assessment results, about the current condition of the stock.">stock status</abbr></span>  under different harvest and environmental conditions. Models can also be used to identify <span class="gc-dwnld-info"><abbr title="Reference point: a benchmark against which the biomass or abundance of the stock or the fishing mortality rate (or exploitation rate) can be measured in order to determine its status. These reference points can be targets, thresholds or limits depending on their intended use.">reference points</abbr></span>.</li>
<li>There are several model-free methods that can be used for data-limited stocks that do not require intensive computations. These approaches instead look for patterns in the data using time series.</li>
</ul>

<aside class='bg-warning'>
<p>Congratulations: you have completed Module 2, Conducting stock assessments.</p> 
<p>Next up: Module 3, Stock assessment results.</p>
</aside>


<?php include "includes/after.php"; ?>