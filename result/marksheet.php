<?php
include("connect.php");
//---------print marksheet-----------------------------
if(isset($_GET['action'])    &&    isset($_GET['rnum'] )  )
{
   $q = mysqli_query($conn,"select * from result where 
                                     unirollnum = '".$_GET['rnum']."'  ");

	$num = mysqli_num_rows($q);
	if($num>0)
	{
		$row = mysqli_fetch_array($q);
	}
}
?>

<table width="100%" border="1">
  <tr>
    <th width="17%" scope="col"><img src="Rajasthan_Technical_University_logo.jpg" width="132" height="99";/></th>
    <th colspan="3" scope="col"><h3>University Department</h3>
    <h3>Rajasthan Technical University Kota, Rajasthan</h3></th>
  </tr>
  <tr>
    <th scope="row">Student Name</th>
    <td width="27%"><?php echo $row[1]; ?></td>
    <td width="32%">Father Name</td>
    <td width="24%"><?php echo $row[2]; ?></td>
  </tr>
  <tr>
    <th scope="row">Mother's Name</th>
    <td><?php echo $row[3]; ?></td>
    <td>DOB</td>
    <td><?php echo $row[4]; ?></td>
  </tr>
  <tr>
    <th scope="row">Class</th>
    <td><?php echo $row[5]; ?></td>
    <td>University roll no.</td>
    <td><?php echo $row[6]; ?></td>
  </tr>
  <tr>
    <th scope="row">college roll no.</th>
    <td><?php echo $row[7]; ?></td>
    <td>Gender</td>
    <td><?php echo $row[8]; ?></td>
  </tr>
  <tr>
    <th colspan="4" scope="row">-------------------------------------------------------Maximum Marks with Obtained marks Details-------------------------------------------</th>
  </tr>
  <tr>
    <th scope="row">Subject Name</th>
    <td>Maximum Marks</td>
    <td>Obtained Marks</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Blockchain Technology</th>
    <td>100</td>
    <td><?php echo $row[9] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Digital Image Processing</th>
    <td>100</td>
    <td><?php echo $row[10] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">E-commerce</th>
    <td>100</td>
    <td><?php echo $row[11] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Automata Compiler Theory</th>
    <td>100</td>
    <td><?php echo $row[12] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Web_Technology</th>
    <td>100</td>
    <td><?php echo $row[13] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Green Building Technology</th>
    <td>100</td>
    <td><?php echo $row[14] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Total Marks</th>
    <td>600</td> 
    <td style="font-weight:bold"><?php   echo  $total =$row[9] +  $row[10]   +  $row[11] +  $row[12]   +    $row[13] +  $row[14]; ?> </td>
  </tr>
  <tr>
    <th scope="row">Result</th>
    <td >
  <?php 
    if($total>250){
      echo "<span style='color: green'>Pass</span>";
    }
  
    else{
      echo "<span style='color:F00'>Fail</span>"; 
    }
  ?>
  </td>
    <td>Division:-
      <?php   if($total>=400) { echo "First Division"; }
              elseif($total>=300) { echo "Second Division"; }
              elseif ($total>=250) { echo "Third Division"; }
              else { echo " "; }
       ?>
    </td>
    <td>Percentage:-
      <?php  $percent=($total/600)*100; 
      echo number_format($percent, 2);
      ?>
    </td> 
  </tr>
</table>
<br>
</hr>

<b>INSTRUCTIONS:-</b>
<br/>
1.This is web based result. Authentic result shell be considered in marksheet issue by RBSE.
<br/>
2.Last date for applying online copy view and re-evalution form through college is 15 day from the date of result declaration. 
</br>


<center><input name="b1" type="button" value="Print Marksheet" onClick="window.print() " /></center>
