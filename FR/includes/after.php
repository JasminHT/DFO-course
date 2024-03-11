

        <?php include "includes/pager.php"; ?>

        <?php 
          $date_modified = "2024-02-28";
          include 'includes/pagedetails.php' ;
        ?>


      </div>
      <?php include 'includes/sidebar.php' ?>

    </div>
  </main>

</div>
</div>

  <?php include 'includes/footer.php' ?>


  <?php   

  if (!function_exists('twodigits')) {
    function twodigits($number) {
      return str_pad($number, 2, '0', STR_PAD_LEFT);
    }
  }
    //save the page as an html file
    //the opening argument is found in the before.php file
  
    //$page_html = ob_get_contents(); 
    //file_put_contents( twodigits($module)."-".twodigits($page).".html", $page_html );
    //ob_flush();
    
  ?>





