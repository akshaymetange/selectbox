<?php
$country_Id1=$_POST['country_Id'];
echo $country_Id1;    
$result="";
    $con=mysqli_connect("localhost","root","","dynamic");
    $res=mysqli_query($con,"select * from tbl_state where country_id='$country_Id1'
     order by state_name");
    if($res)
    {
while($row=mysqli_fetch_array($res))
{
    //  $result="<option value=''>Select State</option>";
    $result.='<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
    // <option value="">ak</option>
}
echo  $result;

    }

?>
