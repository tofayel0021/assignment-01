<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 8</title>


</head>
<body>
  <?php
    function heading($header='We Are PHP developer',$color=''){
      if($color=='purple'){
      echo "<h1 style= 'color: red; text-align:center;' >$header</h1>";
    }
    elseif($color=='green'){
      echo "<h1 style='color:green; text-align:center;'>$header</h1>";
    }
    elseif($color=='pink'){
      echo "<h1 style='color:blue; text-align:center;'>$header</h1>";
    }
    elseif($color=='blue'){
      echo "<h1 style='color:purple; text-align:center;'>$header</h1>";
    }
    elseif($color=='black'){
      echo "<h1 style='color:black; text-align:center;'>$header</h1>";
    }
    else{
      echo "Invalid input";
    }
  }
    heading('We are Laravel developer','purple');
  ?>
