<?php
require_once("dbcon.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM govtype WHERE govtypename like '" . $_POST["keyword"] . "%' ORDER BY govtypename LIMIT 0,20";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["govtypename"]; ?>');"><?php echo $country["govtypename"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>