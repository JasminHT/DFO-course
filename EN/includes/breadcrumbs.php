 <?php 

 if ($exporting == true) {
    $filetype = ".html";
 } else {
    $filetype = ".php";
 }

 ?>
 <!--- Begin custom page content --->

     <nav id="wb-bc" property="breadcrumb">
      <h2>You are here:</h2>
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="https://www.canada.ca/en.html">Canada.ca</a></li>
          <li><a href="https://www.dfo-mpo.gc.ca/index-eng.html">Fisheries and Oceans Canada</a></li>
          <li><a href='00-01<?=$filetype ?>'>TBD</a></li>
          <li><a href='00-01<?=$filetype ?>'>Introduction to stock assessment</a></li>
          <?php 
            $pagecount = 0;

            if ($module == 0) {
              $pagecount = 1;
              echo "<li><a href='00-01".$filetype."'>Course objectives</a></li>";
            }

            if ($module == 1) {
              $pagecount = 14;
              echo "<li><a href='01-01".$filetype."'>Module 1: Principles of stock assessment</a></li>";
            }

            if ($module == 2 ) {
              $pagecount = 12;
              echo "<li><a href='02-01".$filetype."'>Module 2: Conducting stock assessments</a></li>" ;
  
            }

            if ($module == 3 ) {
              $pagecount = 7;
              echo "<li><a href='03-01".$filetype."'>Module 3: Stock assessment results</a></li>" ;

            }

            if ($module == 4 ) {
            $pagecount = 8;
             echo "<li><a href='04-01".$filetype."'>Module 4: Science Advice</a></li>" ;

            }

            if ($module == 9) {
              $pagecount = 0;
              echo "<li><a href=''>".$page_title."</a></li>";
            }
          ?> 
        </ol>
      </div>
    </nav>