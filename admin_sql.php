<?php
if(!isset($_SESSION))
{
session_start();
}
    //select set of rows from a table return only the result not values
    function select($query)
	{
	$rs=mysql_query($query)or die("$query".mysql_error());
	return($rs);
	}
	//get a single row from a database;
	function getrow($query)
	{
	$rs=mysql_query($query)or die("$query".mysql_error());
	$tmp=mysql_fetch_row($rs);
	return($tmp);
	}
	//count no of rows in table
	function countrows($query)
	{
	$rs=mysql_query($query)or die("$query".mysql_error());
	$tmp=mysql_num_rows($rs);
	return($tmp);
	}
	//insert a row , update a row etc...
	function manipul($query)
	{
	$rs=mysql_query($query)or die("$query".mysql_error());
	}
	//give database date,give the required format for the date like - or /etc...and get date
	function phpdate($getdate,$qformat){
	    $temp=explode("-",$getdate);
		echo $temp[2].$qformat.$temp[1].$qformat.$temp[0];		
	}
	//give the query, field name to the table to be value of the combo box
	//field name of the table to be display in the combo box
	//optional argument send data to be select ....by default or from other database
	function combobox($query,$value,$displaytext,$odata="findoutthetermofvicky"){	 
	  echo "<select name='$value'>";
	  echo "<option value=''> - - - - </option>";
	  $rs=select($query);	  
	  while($data=mysql_fetch_array($rs)){
	  $sel="";
	  if($_POST[$value]!=""){	    
	    if($_POST[$value]==$data[$value])
		 $sel="selected";
	  }
	  if($_POST[$value]=="" && $odata!="findoutthetermofvicky"){	    
	    if($odata==$data[$value])
		 $sel="selected";
	  }
	   echo "<option value='".$data[$value]."'  ".$sel.">".$data[$displaytext]."</option>";	  
	  }
	  echo "</select>";
	}
	//give the query, field name to the table to be value of the combo box
	//field name of the table to be display in the combo box
	//optional argument send data as an array,
	//since it is list box it will have multiple value to be select ....by default or from other database
	function listbox($query,$value,$displaytext,$odata="findoutthetermofvicky"){	 
	  echo "<select name='".$value."[]' multiple>";
	  $rs=select($query);	  
	  while($data=mysql_fetch_array($rs)){
	  $sel="";
	  if($_POST[$value]!=""){
	    for($i=0;$i<count($_POST[$value]);$i++){	    	    
		  if($_POST[$value][$i]==$data[$value]){
		   $sel="selected";
		  }
	    }
	  } 
	  if($_POST[$value]=="" && $odata!="findoutthetermofvicky"){
	    for($i=0;$i<count($odata);$i++){	    
	     if($odata[$i]==$data[$value]){
		   $sel="selected";
		 }
	    }
	  }
	   echo "<option value='".$data[$value]."'  ".$sel.">".$data[$displaytext]."</option>";	  
	  }
	  echo "</select>";
	}
	//optional argument,u can give date that to be selected in the combo box
	//this function is to make the date DD in one combo box and Month in one combo
	//yyyy in one combo box to easily select date for(date of birth,closing date of job,etc); 
	function datecombo($getdate="findoutthetermofvicky"){
	  if($getdate!="findoutthetermofvicky"){
	    $temp=explode("-",$getdate);
	  }
	  echo " <select name='dd' style='width:40pt'><option value=''>DD</option>";
	  for($i=1;$i<=31;$i++){
	   $sel="";
	   if($_POST['dd']!="") {
	     if($_POST['dd']==$i)
		   $sel="selected";
	   }
	   if($_POST['dd']=="" && $temp[2]!="") {
	     if($temp[2]==$i)
		   $sel="selected";
	   }
	   echo "<option value='".$i."'".$sel.">".$i."</option>";
	  }	  	 
	  echo "</select>&nbsp;&nbsp;";
	  echo " <select name='mm' style='width:40pt'><option value=''>MM</option>";
	  for($i=1;$i<=12;$i++){
	  $sel="";
	   if($_POST['mm']!="") {
	     if($_POST['mm']==$i)
		   $sel="selected";
	   }
	   if($_POST['mm']=="" && $temp[1]!="") {
	     if($temp[1]==$i)
		   $sel="selected";
	   }
	   echo "<option value='".$i."'".$sel.">".$i."</option>";
	  }	  	 
	  echo "</select>&nbsp;&nbsp;";
	  $currentyear=date("Y");
	  echo " <select name='yyyy' style='width:70pt'><option value=''>YYYY</option>";
	  for($k=1950;$k<=$currentyear;$k++){
	  $sel="";

	   if($_POST['yyyy']!="") {
	     if($_POST['yyyy']==$k)
		   $sel="selected";
	   }
	   if($_POST['yyyy']=="" && $temp[0]!="") {
	     if($temp[0]==$k)
		   $sel="selected";
	   }
	   echo "<option value='".$k."'".$sel.">".$k."</option>";
	  }	  	 
	  echo "</select>&nbsp;&nbsp;";
	}
?>