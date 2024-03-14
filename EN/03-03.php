<?php 
  $module = 3;
  $page = 3;
  $page_title = "Page ".$page;
  $page_description = "Developing a reusable template for building DFO elearning pages in the GCWeb theme";
  
  include "includes/before.php"; 
?>

<h2>Unit 3.1: Outputs</h2>

<figure style="max-width:50%">
  <img src="../images/capelin-bucket.jpg" alt="Capelin in a bucket">
  <figcaption>Photo credit: DFO</figcaption>

</figure>

<p>Models can test management options in a low-cost, low-risk, virtual environment. Scientists are responsible for communicating risk to managers by providing advice in a way that conveys the uncertainty associated with taking different management actions. </p>
<p>Here are some common examples of how stock assessment outputs may be communicated:</p>

<div class='collapsible blue' id="module1">
  <details>
    <summary>Sensitivity analysis</summary>
    <p><strong>Sensitivity analyses</strong> allows scientists to explore the impacts of uncertainty and assumptions by testing different scenarios (for example, random variation in recruitment or different environmental factors affecting natural mortality). They are sometimes included alongside science advice for context.</p>
  </details>
</div>


<div class='collapsible blue' id="module2">
  <details>
    <summary>Decision tables</summary>
    <p><strong>Decision tables</strong> are often used as a simple way to present advice regarding the potential consequences and trade-offs of making different decisions. For example, they can describe the probability that a stock will be above or below a reference point, or project yield at different levels of fishing.</p>
        <aside class='bg-info'>
        <h4>Definition: </h4>
         <strong>Probability</strong> is the extent to which an event or scenario is likely to occur. </aside>

    <h3>Decision table</h3>
<figure class="wb-mltmd video-embed">

  <iframe width="640" height="360" src="https://www.youtube.com/embed/QFWH4_FV5II" title="Unit 3-1  Outputs Decision Table" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  <figcaption>
    <details id="inline-captions">
      <summary>Video transcript</summary>      
      <p>[background music begins]</p>
      <p>[Visual: The words, “Example: Decision Table” appear.]</p>
      <p>Narrator: Example: Decision Table</p>
      <p>[Visual: The words, “Scientists use decision tables when providing advice about the status of fish stocks at different levels of fishing” appear.]</p>
      <p>Narrator: Scientists use decision tables when providing advice about the status of fish stocks at different levels of fishing. Let's look at an example.</p>

      <table ><tbody>
      <tr>
      <td>Annual Catch Level (t)</td>
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


      <p>[Visual: A table appears with the title, “Decision Table: Probability of being in the healthy zone”. 7 columns are titled, from left to right: Annual catch Level (t); 2013; 2014; 2015; 2016; 2017; 2018;. The table has 6 rows.]</p>
      <p>Narrator: The 1st column of the decision table shows different catch levels in tonnes. </p>
      <p>[Visual: The 1st column is highlighted in dark blue.]</p>
      <p>Narrator: The rows show the probability of a stock being in the healthy zone at the start of each year at each catch level (note: the probability in 2013 is the same because it is the starting point for all the projections).</p>
      <p>[Visual: The 2nd column (2013) is highlighted in dark blue.]</p>
      <p>Narrator: If catch is reduced to zero, the probability of the stock being in the healthy zone increases over time.</p>
      <p>[Visual: The 1st row (0) is highlighted in dark blue.]</p>
      <p>Narrator: At 600 tonnes of annual catch, the probability of the stock being in the healthy zone remains steady.</p>
      <p>[Visual: The 4th row (600) is highlighted in dark blue.]</p>
      <p>Narrator: If catch increases to 1000 tonnes, the probability of being in the healthy zone decreases over time.</p>
      <p>[Visual: The last row (1000) is highlighted in dark blue.]</p>


      <table ><tbody>
      <tr >
      <td>Annual Catch Level (t)</td>
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



      <p>Narrator: The decision table can also be reversed to show the probability of a stock falling below the healthy zone. </p>
      <p>[Visual: The values in the table are inversed.]</p>
      <p>Narrator: At a lower catch level, the probability of a stock falling below the healthy zone decreases over time.</p>
      <p>[Visual: The 3rd row (400) is highlighted in dark blue.]</p>
      <p>Narrator: At a higher catch level, the probability of a stock falling below the healthy zone increases over time.</p>
      <p>[Visual: The 5th row (800) is highlighted in dark blue.]</p>
      <p>Narrator: This is a helpful way to consider how risk increases with higher catch level.</p>
      <p>[Music ends]</p>
      <p>[Visual: Table fades out to black.]</p>
      <p>[Visual: The Fisheries and Oceans Canada logo appears.]</p>
      <p>[Visual: The Government of Canada logo appears.]</p>
    </details>
  </figcaption>
</figure>
  </details>
</div>




<?php include "includes/after.php"; ?>