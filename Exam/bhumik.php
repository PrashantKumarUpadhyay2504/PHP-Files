<?php 
//Print Double digit number, 1 to 10 in table 
echo "<table style ='border: 2px solid red;border-collapse:collapse'>";
for($row =0 ; $row <=10; $row++)
{
    echo "<tr>";
    for($col =0; $col<=10; $col++)
    {
      echo "<td style = 'border : 2px solid '>".($col.$row)."</td>"; 
    }
    echo"</tr>";
}
echo "</table>";
echo"<br>";

//Print table of 1 to 10 in table  
echo"<table style= 'border:2px solid;border-collapse:collapse'>";
for($row=0;$row<=10;$row++)
{
    echo"<tr>";
    for($col=0;$col<=10;$col++)
    {
        $result=$row*$col;
        echo"<td style='border:2px solid'>$row*$col=$result</td>";
    }
    echo"</tr>";
}
echo"</table>";
echo"<br>";


//Print a Chessboard
echo"<table style='border:2px solid;border-collapse:collapse'>";
for($row=1;$row<=8;$row++)
{
    echo"<tr>";
    for($col=1;$col<=8;$col++)
    {
        $total=$row+$col;
        if($total%2==0)
        {
            echo"<td style='border:2px solid;background-color:white; width:100px; height:100px'></td>";
        }
        else
        {
            echo"<td style='border:2px solid;background-color:black; width:100px; height:100px'></td>";
        }
    }
    echo"</tr>";
}
echo"</table>";
echo"<br>";

//Print Floyd's Triangle
echo"<table style='border-collapse:collapse;'>";
$count=1;
for($row=0;$row<10;$row++)
{
    echo"<tr>";
    for($col=0;$col<=$row;$col++)
    {
        echo"<td style='border:2px solid;border-collapse:collapse;width:30px;height:30px;'>$count</td>";        
        $count++;
    }
    
    echo"</tr>";
}
echo"</table>";
echo"<br>";

//User define function to find greatest number between three integers
function greatest_of_three(int $num_1, int $num_2, int $num_3)
{  
  switch ($num_1 > $num_2) {
    case 1:
      switch ($num_1 > $num_3) {
        case 1:
          echo $num_1 . " is greatest.";
          break;
        case 0:
          echo $num_3 . " is greatest.";
          break;
      }
      break;
    case 0:
      switch ($num_2 > $num_3) {
        case 1:
          echo $num_2 . " is greatest.";
          break;
        case 0:
          echo $num_3 . " is greatest.";
          break;
      }
      break;
  }
}
greatest_of_three(20,25,30);

//Adam Number
$n=12;
$m=strrev($n);
if($n*2==strrev($m*2))
{
  print("True");
}
else
{
  print("false");
}

//CC-Bravo-1-4

?>