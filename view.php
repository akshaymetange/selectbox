<?php
function desh()
{
    $result="";
    $con=mysqli_connect("localhost","root","","dynamic");
    $res=mysqli_query($con,"select * from tbl_country order by country_name");
    if($res)
    {
while($row=mysqli_fetch_array($res))
{
    $result.='<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
    // <option value="">ak</option>
}
return $result;

    }

}
?>

<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
<p>select country adya
<select name="country" id="country">
<option value="">select country
</option>
<?php echo desh();?>
</select></p>

<p>select state adya
<select name="state" id="state">
<option value="">select state
</option>
</select></p>
</body>
</html>

<script>
$(document).ready(function(){
$('#country').change(function(){
var country_id=$(this).val();
$.ajax({
url:"state.php",
method:"POST",
data:{country_Id:country_id},
dataType:"text",
success:function(data)
{
    $('#state').html(data);
}

});

});

});
</script>