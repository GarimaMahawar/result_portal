<title>UD RTU RESULT PORTAL</TITLE>
<h2> Check  your Result:_</h2>
<fieldset><legend>UD RTU RESULT PORTAL </legend><form name="frm1" action="?" method="get" >  

<table width="513"; border="0">
  <tr>
    <td width="216">Search By
      <label>
        <select name="by" id="by">
          <option slected value="none">--Select by--</option>
          <option value="byroll">Roll number wise</option>
          <option value="byname">Name wise</option>
        </select>
      </label></td>
    <td width="287"><label>
      <input type="text" name="q" id="q">
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="b1" id="b1" value="Search Result"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form></fieldset>

<?php
include("connect.php");
//-------------------------------condition for search result-------------------------------------------------
if(isset($_GET['b1'])   &&    !empty($_GET['q'])    &&     isset($_GET['by']   )   &&   $_GET['by']!="none" )
{
	if(isset($_GET['by'])    &&    $_GET['by']  ==  "byroll")
		{
			$check=mysqli_query($conn,"select * from result where
							unirollnum = '".$_GET['q']."'   ");
			$num =  mysqli_num_rows($check);
			if($num>0)
			{

				$r=$_GET['q'];
  				//sleep(2);   //time in second
				header("location:marksheet.php?action=showMarksheet&rnum=$r");
				exit();
		    }
	 	   else
	    	{
	         ?>
                 <script language="javascript">
 			  	 alert("Roll Number not found");
				 window.location.href="checkresult.php";
				 </script>
			 <?php
    	    }
		}
?>

<br>
<br>

		<table border="0" width="100%">
<tr bgcolor="yellow"><th>Roll No.</th>
<th>Name</th>
<th>Father Name</th>
<th>College Roll no.</th>
</tr>
<?php
	if(isset($_GET['by'])    &&    $_GET['by']  ==  "byname")		
		{
				$wh = "  where stdname like '".$_GET['q']."%' "    ;	
		}
	$q = mysqli_query($conn,"select * from result $wh");
	$num = mysqli_num_rows($q);
	if($num>0)
			{
				while($data = mysqli_fetch_array($q)) 
			{ 
				$marksheetLink = "marksheet.php?action=showMarksheet&rnum=" . $data[6];
				?>
				<tr bgcolor="cyan">
					<td><a href="<?php echo $marksheetLink; ?>"><?php echo $data[6]; ?></a></td>
					<td><a href="<?php echo $marksheetLink; ?>"><?php echo $data[1]; ?></a></td>
					<td><a href="<?php echo $marksheetLink; ?>"><?php echo $data[2]; ?></a></td>
					<td><a href="<?php echo $marksheetLink; ?>"><?php echo $data[7]; ?></a></td>
				</tr>




<?php 
			}
			}
}
?>

</table>




