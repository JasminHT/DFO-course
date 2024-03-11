
<?php


  if (!function_exists('twodigits')) {
    function twodigits($number) {
      return str_pad($number, 2, '0', STR_PAD_LEFT);
    }
  }

  //SET PREVIOUS PAGE
  if (isset($prev_page)) {
    $prev_page_string = twodigits($prev_page);
  } else {
    $prev_page_string = twodigits($page-1);
  }

  //SET NEXT PAGE
  if (isset($next_page)) {
    $next_page_string = twodigits($next_page);
  } else {
    $next_page_string = twodigits($page+1);
  }

  //SET PREVIOUS MODULE
  if (isset($prev_module)) {
    $prev_module_string = twodigits($prev_module);
  } else {
    $prev_module_string = twodigits($module);
  }

  //SET NEXT MODULE
  if (isset($next_module)) {
    $next_module_string = twodigits($next_module);
  } else {
    $next_module_string = twodigits($module);
  }

?> 


<ul class="pager"> 

  <?php if (!isset($no_prev)) { ?>
    <li>
      <?php 
        if (isset($custom_prev)) {
          $prev_link = $custom_prev;
        } else {
          $prev_link = $prev_module_string."-".$prev_page_string.".php";
        }
      ?>
      <a href=<?php echo $prev_link; ?> rel="prev">
          
          Previous
      </a>
    </li>
  <?php } ?>
  &nbsp;&nbsp;

  <li class='pagecount'>        
  <?php 

  if ($pagecount > 0)
    { echo "Page ".$page." of ".$pagecount; }
  else 
    { echo $page_title;}
  ?>
 </li>

  <?php if (!isset($no_next )) { ?>
    <li >
      <?php 
        if (isset($custom_next)) {
          $next_link = $custom_next;
        } else {
          $next_link = $next_module_string."-".$next_page_string.".php";
        }
      ?>
      <a href=<?php echo $next_link; ?> rel="next">
        
          Next
      </a>
    </li>
  <?php } ?>
</ul>