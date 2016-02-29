<?php
/*
HERE YOU CAN USE WHATEVER YOU WANT.
THIS FILE JUST SERVING TO DEMO REQUIREMENTS.
*/
header ("Content-Type:text/xml"); 
// Make a MySQL Connection

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("incorporate") or die(mysql_error());

$filter = addslashes(stripslashes($_GET["filter"]));
$gallery_type = addslashes(stripslashes($_GET["gallery_type"]));

// Retrieve all the data from the "example" table
$result = mysql_query("SELECT * FROM tbl_gallery_$gallery_type where 1=1".($filter=="" || $filter=="all"?"":" and type='$filter'")) or die(mysql_error());  
?>
<root>
<?php
// store the record of the "example" table into $row
echo "<header><rowCount>".mysql_num_rows($result)."</rowCount></header>\n";

while($row = mysql_fetch_array( $result ))
{
?>
<item type="<?php echo $row["type"];?>" id="<?php echo $row["id"];?>">
    <img><?php echo $row["img"];?></img>
    <imgl><?php echo $row["img_large"];?></imgl>
    <h><?php echo $row["title"];?></h>
    <txt><?php echo $row["body"];?></txt>	
</item>
<?php
}
?>
</root>