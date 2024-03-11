
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


<ul class="pagntn-prv-nxt"> 

  <?php if (!isset($no_prev)) { ?>
    <li class="btn btn-default">
      <?php 
        if (isset($custom_prev)) {
          $prev_link = $custom_prev;
        } else {
          $prev_link = $prev_module_string."-".$prev_page_string.".html";
        }
      ?>
      <a href=<?php echo $prev_link; ?> >
          
          ⬅ Previous
      </a>
    </li>
  <?php } ?>
  &nbsp;&nbsp;

  <?php if (!isset($no_next )) { ?>
    <li class="btn btn-default">
      <?php 
        if (isset($custom_next)) {
          $next_link = $custom_next;
        } else {
          $next_link = $next_module_string."-".$next_page_string.".html";
        }
      ?>
      <a href=<?php echo $next_link; ?> >
        
          Next ➞
      </a>
    </li>
  <?php } ?>
</ul>