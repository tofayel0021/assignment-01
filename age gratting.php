



  <?php

    function age($age){
      if($age <= 8){
        echo "$age year's old is range in <span style='color: darkblue; font-size: 20px;' >children</span>";
      }
      elseif($age >8 && $age<= 17){
          echo "$age year's old is range in <span style='color: #FC412F; font-size: 20px;' >teenage</span>";
      }
      elseif($age >17 && $age<= 42){
          echo "$age year's old is range in <span style='color: #FF318C; font-size: 20px;' >young man/girl</span>";
      }
      elseif($age > 42 && $age <=65){
          echo "$age year's old is range in <span style='color: #4189FC; font-size: 20px;' >oldman</span>";

      }elseif($age >= 66){
          echo "$age year's old is range in <span style='color: #DC4E41; font-size: 20px;' >old lady</span>";
      }
      else{
        echo "No result";
      }
    }

    age(24);
  ?>