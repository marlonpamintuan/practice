<?php
$link = mysqli_connect('localhost','root','','chart');
if(!$link)
{
	die();
}
$query = mysqli_query($link,"select * from tbl_chart");
$array = array();
while($row = mysqli_fetch_array($query))
{

  // OR just echo the data:
  $array[] = array(
    'name' => $row['name'],
    'points' => $row['points'],
    'color' => $row['color'],
    'bullet' => $row['bullet']
  );

}
echo json_encode($array);
?>