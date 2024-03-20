<?php 
  $module = 2;
  $page = 9;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";
  include "includes/before.php"; 
?>

<h2>Unit 2.4: Model-based stock assessments</h2>

<aside class='bg-info'>
  <h4>Definition: </h4>
<p><strong>Models</strong> are tools used to simplify a natural system so it can be more easily understood. Mathematics and statistics are the language used to write models down. Different models can be used for different stock assessments based on data availability and assessment objectives.</p>
</aside>

<figure class="wb-mltmd video-embed">

  <iframe width="640" height="360" src="https://www.youtube.com/embed/IBt4zFygzNw" title="Model Based Stock Assessment" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


  <figcaption>
    <details id="inline-captions">
      <summary>Video transcript</summary>      
      <p>[Background music begins]</p>
      <p>[Visual: The words, “Model-Based Stock Assessment” appear.]</p>
      <p>Narrator: Model-Based Stock Assessment.</p>

      <p>[Visual: A blue box appears on the left of the screen with the words, “CURRENT BALANCE” inside. An icon showing a small stack of coins appears beneath the box.]</p>
      <p>Narrator: A fish stock can be compared to a bank account. In banking, your current balance increases as you accumulate interest.</p>
      <p>[Visual: A green box appears on the left of the screen (next to the first box) with the word, “INTEREST” inside. An icon showing a piggy-bank appears beneath the box.]</p>

      <p>[Visual: A red box appears in the middle of the screen with the word, “WITHDRAWALS” inside. An icon showing a hand holding money appears beneath the box.]</p>
      <p>Narrator: Your balance decreases when you make withdrawals and are charged with banking fees.</p>
      <p>[Visual: Another red box appears on the right of the third box with the words, “BANKING FEES” inside. An icon showing an empty hand appears beneath the box.]</p>

      <p>Narrator: Together, these factors influence your future bank account balance.</p>
      <p>[Visual: A purple box appears on the far right of the screen with the words, “FUTURE BALANCE” inside. An icon showing a large stack of coins appears beneath the box.]</p>


      <p>Narrator: Now consider a scenario where biomass (the total weight of all fish in a stock) is being used to assess a fish stock.</p>
      <p>[Visual: The text in the first blue box is replaced with the words, “CURRENT BIOMASS”. The icon beneath the box is replace with three fish of the same size.]</p>
      <p>Narrator: The current biomass of the fish stock is similar to the current balance of the bank account.</p>
      <p>[Visual: The text in the green box is replaced with the word, “GROWTH”. The icon beneath the box is replace with five fish of different sizes.]</p>
      <p>Narrator: Reproduction and growth of fish in the stock are like accumulating interest.</p>
      <p>Narrator: Fishing and natural mortality reduce the biomass of the stock like how withdrawals and banking fees reduce your bank account balance.</p>
      <p>[Visual: The text in both of the red boxes is replaced with the words, “FISHING” and “NATURAL MORTALITY’. The icons beneath the boxes are replace with a fish hook and a fish skeleton.]</p>
      <p>[Visual: The text inside the purple box on the far right of the screen is replaced with the words, “FUTURE STOCK”. The icon beneath the box is replace with five fish of different sizes.]</p>


      <p>Narrator: At their most basic level, stock assessment models assume that fish in a stock are born, grow, reproduce, and die. In the same way that we can use math and statistics to calculate our estimated future bank balance, we can use stock assessment models to project how a stock may change over time.</p>
      <p>[Visual: Fish icons of different sizes appear across the screen. Some are replaced with fish skeletons, to signify the fish growing and dying.]</p>
      <p>Narrator: In reality, there are many additional considerations that influence fish stocks. Modelling allows scientists to combine diverse and complex observations into a clearer understanding of past, present, and future stock status under different harvest and environmental conditions.</p>

      <p>[Music ends]</p>
      <p>[Visual: Animation fades out to black.]</p>
      <p>[Visual: The Fisheries and Oceans Canada logo appears.]</p>
      <p>[Visual: The Government of Canada logo appears.]</p>

    </details>
  </figcaption>
</figure>






<p>Integrated stock assessments combine various data types (such as length and age composition of the stock, indicators or indices of current and historical abundance, catch) into a framework of different models that provide specific pieces to a larger puzzle. </p>
<p>The following drop-down boxes explore some of the types of models that may be used in integrated stock assessments to explain how fish are born, grow, reproduce, and die.</p>



<div class="collapsible blue">
  <details id="inline-captions">
    <summary>Individual growth models</summary>    
      <figure class='image-transcript' >
        <img src="../images/individual-growth-models.jpg" alt='individual growth models'>
        <figcaption style="margin-top: 5px !important">
          <details id="inline-captions">
            <summary>Long description<br></summary>
            <div class="mwsbodytext text parbase section">
            <p>A graph with size on the y-axis and time on the x-axis. Six fish icons are used to show how fish grown over time, starting with smallest on the left to largest on the right. The size of a fish increases rapidly in the beginning, but reaches a plateau in maximum size over time.</p>
            </div>
          </details>
        </figcaption>
      </figure>

      <p><strong>Individual growth models</strong> assume that growth (either length or weight) increases with age towards a maximum size. The rate at which a fish approaches that maximum size decreases over its lifetime. </p>
  </details>
</div>

<div class="collapsible blue">
  <details id="inline-captions">
    <summary>Age-based models</summary>      

    <p><strong>Age-based models</strong> follow a <span class="gc-dwnld-info"><abbr title="Cohort: (also known as a year-class) fish of a stock born in the same spawning year.">cohort</abbr></span> through time to determine past and present abundance. At each time step, the number of fish removed by fishing is known and natural mortality is estimated or assumed to project abundance in the following year(s). </p>

    <aside>
    <h3>Example: A cohort through time</h3>

    <figure class="wb-mltmd video-embed">

      <iframe width="640" height="360" src="https://www.youtube.com/embed/_JKQKvIVUa0" title="Unit 2 4 Model based Stock Assessments" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <figcaption>
        <details id="inline-captions">
          <summary>Video transcript</summary>      
          <p>[Background music begins]</p>
          <p>[Visual: The words, “A Cohort Through Time” appear.]</p>
          <p>Narrator: Cohorts move through fisheries over time. A cohort, also known as a year-class, is a group of fish in a stock born in the same spawning season. </p>
          <p>[Visual: Graph appears with Year on the y-axis, starting with the most recent year (2022) at the bottom and moving upwards until 1985. Age is on the x-axis from 0 on the left to 13 on the right. Blue circles are displayed at the intersection for each age and each year, varying in size based on the number of fish in the cohort.]</p>
          <p>Narrator: As cohorts get older from one year to the next, the number of fish in that year-class declines as they die naturally and are fished.</p>
          <p>Narrator: This graph has Year on the y-axis, starting with the most recent year (2022) at the bottom and moving upwards until 1985. Age is on the x-axis, starting from 0 on the left to 13 on the right. Blue circles are displayed at the intersection for each age and each year, varying in size based on the number of fish in the cohort.</p>

          <p>Narrator: The yellow circles represent the 2013 year-class at age 1 in 2014 to age 9 in 2022. </p>
          <p>[Visual: The 2013 year 1 age-class is highlighted at the intersection of 2013 and 1 with a large yellow circle. More yellow circles appear in a diagonal descending slope from Age 1 to 9 that gradually reduce in size as time progresses to the most recent year (2022).]</p>
          <p>Narrator: The size of the circles represents the total number of fish at each age for each year. </p>
          <p>Narrator: Cohort size varies between years: 1995, 1999, and 2000 had many 1-year-old fish, </p>
          <p>[Visual: 3 large circles in the age 1 column are highlighted in yellow in sequence, starting with 1995, 1999, and 2000, respectively.]</p>
          <p>Narrator: while 1991, 1992, and 2009 had fewer.</p>
          <p>[Visual: 3 small circles in age 1 are highlighted in yellow in sequence, starting with 1991, 1992, and 2009, respectively.]</p>
          <p>[Music ends]</p>
          <p>[Visual: Graph fades out to black.]</p>
          <p>[Visual: The Fisheries and Oceans Canada logo appears.]</p>
          <p>[Visual: The Government of Canada logo appears.]</p>

        </details>
      </figcaption>
    </figure>
    </aside>

    <p><strong>Statistical catch-at-age models</strong> are used to reconstruct historical abundance based on the age of fish caught. From this, mortality rates per cohort can be inferred.</p>

  </details>
</div>



<div class="collapsible blue">
  <details id="inline-captions">
    <summary>Stock-recruitment models</summary>    
    <figure class='image-transcript' >
      <img src="../images/difference-between-models.jpg?v=1">
      <figcaption style="margin-top: 5px !important">
        <details id="inline-captions">
          <summary>Long description<br></summary>
          <div class="mwsbodytext text parbase section">
          <p>This figure shows the difference between the Beverton-Holt and Ricker stock-recruitment models. The 2 models use slightly different methods of calculating stock-recruitment relationships, so the shapes of their curves differ; however, they both aim to explain the same concept. The Ricker model tends to underestimate the population growth rate and carrying capacity, whereas the Beverton–Holt model tends to overestimated these parameters.</p>
          </div>
        </details>
      </figcaption>
    </figure>

    <p><strong>Stock-recruitment models</strong>, such as Beverton-Holt and Ricker, explore the relationship between the number of spawners and recruits in a stock. From this, scientists can predict the number of future recruits. </p>
  </details>
</div>

<div class="collapsible blue">
  <details id="inline-captions">
    <summary>Delay-difference models</summary>    
    <p><strong>Delay-difference (stage-based) models</strong> introduce a time lag to individual growth models. Recruitment is based on the number of individuals in the stock from a certain number of years ago.</p>

  </details>
</div>


<div class="collapsible blue">
  <details id="inline-captions">
    <summary>Surplus production models</summary>  
    <p><strong>Surplus production (or biomass dynamics) models</strong> assume that:</p>
    <ul>
      <li>stock size is limited by environmental factors and resource availability (for example, food, habitat, mates), also known as <b>carrying capacity (K)</b></li>
      <li>fish produce more offspring than necessary to replenish the stock</li>
      <li>removing fish promotes productivity by increasing resource availability</li>
      <li>this increased productivity can create a surplus of fish in a stock that can be harvested without affecting the sustainability of the stock over time</li>
    </ul>

    <p>Schaefer, Fox, and Pella-Tomlinson are common types of surplus production models.</p>

    <figure>    
      <img src="../images/surplus-production-curve.jpg" alt='surplus production curve'>

      <figcaption>
        <details >
          <summary>Long description</summary>
          This figure is a simplified version of a surplus production curve. The rate of production is shown by the solid white line. The rate of production is highest when the stock is at half of the carrying capacity of the environment. Beyond K/2, competition for resources increases, so the rate of production decreases. In theory, fishing surplus fish to keep the stock size at K/2 will maintain the greatest rate of production.


        </details>
      </figcaption>
    </figure>
  </details>
</div>

<?php include "includes/after.php"; ?>