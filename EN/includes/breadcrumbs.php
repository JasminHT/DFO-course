    <nav id="wb-bc" property="breadcrumb">
      <h2>You are here:</h2>
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="https://www.canada.ca/en.html">Canada.ca</a></li>
          <li><a href="https://www.dfo-mpo.gc.ca/index-eng.html">Fisheries and Oceans Canada</a></li>
          <li><a href='00-01.php'>TBD</a></li>
          <li><a href='00-01.php'>Introduction to stock assessment</a></li>

          <?php 
            $pagecount = 0;

            if ($module == 0) {
              $pagecount = 1;
              echo "<li><a href='00-01.php'>Course objectives</a></li>";
            }

            if ($module == 1) {
              $pagecount = 15;
              echo "<li><a href='01-01.php'>Module 1: Principles of stock assessment</a></li>";

              /*if ($page < 9) 
                { echo "<li><a href='01-02.php'>Unit 1.1: Canada’s approach to fisheries science</a></li>"; }
              else if ($page >= 9 && $page < 12)
                { echo "<li><a href='01-09.php'>Unit 1.2: What is stock assessment?</a></li>"; }
              else 
                { echo "<li><a href='01-12.php'>Unit 1.3: Stock status and reference points</a></li>"; }*/
            }

            if ($module == 2 ) {
              $pagecount = 12;
              echo "<li><a href='02-01.php'>Module 2: Conducting stock assessments</a></li>" ;

              /*if ($page <  4) 
                { echo "<li><a href='02-02.php'>Unit 2.1: Types of data</a></li>"; }
              else if ($page >= 4 && $page < 8)
                { echo "<li><a href='02-04.php'>Unit 2.2: Data collection</a></li>"; }
              else if ($page >= 8 && $page < 9)
                { echo "<li><a href='02-08.php'>Unit 2.3: Research</a></li>"; }
              else if ($page >= 9 && $page < 11)
                { echo "<li><a href='02-09.php'>Unit 2.4: Model-based stock assessments</a></li>"; }
              else if ($page >= 11 && $page < 11)
                { echo "<li><a href='02-11.php'>Unit 2.5: Model-free stock assessments</a></li>"; }
              else { 
                echo "<li><a href='02-12.php'>Summary</a></li>"; }*/
  
            }

            if ($module == 3 ) {
              $pagecount = 7;
              echo "<li><a href='03-01.php'>Module 3: Stock assessment results</a></li>" ;
/*
              if ($page <  4) 
                { echo "<li><a href='02-02.php'>Unit 3.1: Outputs</a></li>"; }
              else if ($page >= 4 && $page < 7)
                { echo "<li><a href='02-04.php'>Unit 3.2: Management Strategy Evaluation</a></li>"; }
              else
                { echo "<li><a href='02-06.php'>Unit 3.3: Uncertainty</a></li>"; }*/
            }

            if ($module == 4 ) {
            $pagecount = 8;
             echo "<li><a href='04-01.php'>Module 4: Science Advice</a></li>" ;
             /*
              if ($page <  5) 
                { echo "<li><a href='04-02.php'>Unit 4.1: Canadian Science Advisory Secretariat</a></li>"; }
              else if ($page == 5)
                { echo "<li><a href='04-05.php'>Unit 4.2: Participating in peer review meetings</a></li>"; }
              else if ($page == 6)
                { echo "<li><a href='04-06.php'>Unit 4.3: Reaching consensus</a></li>"; }
              else if ($page == 7)
                { echo "<li><a href='04-07.php'>Unit 4.4: Conflicts of interest</a></li>"; }
                */
            }

            if ($module == 9) {
              $pagecount = 0;
              echo "<li><a href='.'>".$page_title."</a></li>";
            }
          ?>


          </a></li>

            <?php 
            //if ($pagecount > 0)
              //{ echo "<li>Page ".$page." of ".$pagecount."</li>"; }
            ?>
        </ol>
      </div>
    </nav>