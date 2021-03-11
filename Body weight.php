


<p>The formula is BMI = mass/height*height</p>


  <?php
    function bodyDetails($mass,$height){
      $bmi=$mass/($height*$height);
      echo "Your weight is $mass kg, height is $height mitre, BMI Index is $bmi kg/m<sup>2</sup>.";
    }
  bodyDetails(65,5.08);
