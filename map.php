<?php
require("includes/config.php");

// Start XML file, create parent node
$doc = domxml_new_doc("1.0");
$node = $doc->create_element("markers");
$parnode = $doc->append_child($node);

// Opens a connection to a MySQL server
$conn=mysql_connect('localhost', root, "");
if (!$conn) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db('jaljeevika', $conn);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM markers";
$result = mysql_query($query);
?>
  <script>
      console.log(<?= json_encode($result); ?>);
  </script>
<?php
if (!$result) {
  die('Invalid query: ' . mysql_error());
  
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // Add to XML document node
  $node = $doc->create_element("marker");
  $newnode = $parnode->append_child($node);
  ?>
  <script>
      console.log(<?= json_encode("hello"); ?>);
  </script>
<?php  
  $newnode->set_attribute("id", $row['marker_id']);
  $newnode->set_attribute("name", $row['mrker_name']);
  $newnode->set_attribute("address", $row['pond_add']);
  $newnode->set_attribute("lat", $row['lat']);
  $newnode->set_attribute("lng", $row['lng']);
  $newnode->set_attribute("type", $row['type']);
}

$xmlfile = $doc->dump_mem();
echo $xmlfile;?>
<script>
    console.log(<?= json_encode($xmlfile); ?>);
</script>

