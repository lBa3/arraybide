


	2 8 5 4 
  9 3 2 1
  8 7 4 5
  1 9 8 3
  
  
  $arr = [[2,8,5,4], [9,3,2,1], [8,7,4,5], [1,9,8,3]];
	$totaArray = Count ($arr); // 0-3
  
  
  // acendentes diagonal 1
  [0,0], [1,1], [2,2], [3,3]
  
  
  <?php
      $arr = [[2,8,5,4], [9,3,2,1], [8,7,4,5], [1,9,8,3]];
      $totaArray = Count ($arr); // 0-3
      $arrDes = []; 
      $SumDes = 0;
      for ($row = 0; $row < $totaArray; $row++){
        for ($col = 0; $col < $totaArray; $col++){
          $ar = $arr[$row][$col];
            //print ("[".$row."],[".$col."]<br/>");
        }
       print ("[".$row."],[".$row."]<br/>");
       $a = $arr[$row];
       array_push($arrDes,$a[$row]);
      }

    for ($t = 0; $t < Count($arrDes); $t++){
        $SumDes += $arrDes[$t];
      print ("[".$arrDes[$t]."]<br/>");
    }

    echo "Suma del Desc-> ".$SumDes;
    if ($SumDes == 20){
      echo "Es = a 20";
    }else{
      echo "Es != a 20";
    }
?>
  
