<html>
   <body>
      
      <?php
         /* First method to associate create array. */
         $salaries = array("DJ" => 2000, "SR" => 1000, "SA" => 500);
         
         echo "Salary of SA is ". $salaries['SA'] . "<br />";
         echo "Salary of SR is ".  $salaries['SR']. "<br />";
         echo "Salary of DJ is ".  $salaries['DJ']. "<br />";
         
         echo "<br/>";
         /* Second method to create array. */
         $salaries['DJ'] = "high";
         $salaries['SR'] = "medium";
         $salaries['SA'] = "low";
         
         echo "Salary of DJ is ". $salaries['DJ'] . "<br />";
         echo "Salary of SR is ".  $salaries['SR']. "<br />";
         echo array_key_exists("DJ",$salaries);
         array_push($salaries,"LA");
         echo $salaries["LA"];
         echo "Salary of SA is ".  $salaries['SA'].array_keys($salaries). "<br />";
      ?>
   
   </body>
</html>