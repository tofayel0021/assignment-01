



  <?php
    function head($header='We are PHP developer', $tag='h3', $align='center', $color='red', $font='Arial'){
      echo "<$tag style='text-align:$align; color:$color; font-family:$font'>$header</$tag>";
    }
    head('We are Laravel developer','h1','center','blue','Impact');
