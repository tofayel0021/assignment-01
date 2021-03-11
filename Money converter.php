


  <?php
    function convertCurrency($bdt,$currency){
      if($currency=='usd'){
        $convert=$bdt/85;
        echo "$bdt TK = $$convert USD";
      }
      elseif($currency=='cd'){
          $convert=$bdt/67;
        echo "$bdt TK = $$convert Canadian Dollar";
      }
      elseif($currency=='uk'){
          $convert=$bdt/116;
        echo "$bdt TK = &pound$convert UK Pound";
      }
      else{
        echo "Invalid";
      }
    }
  convertCurrency(100,'usd');

