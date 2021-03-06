<?php
include 'dbconnect.php'
/* Fairly simple example - there's a form for inserting a new phone record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database Example (Phone Records)</title>
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}
</style>
</head>

<body>
<h1>Phone Database</h1>
<form id="insert" name="insert" method="post" action="file:dbprocessphone.php">
<fieldset class="subtleSet">
    <h2>Insert new phone record:</h2>
    <p>
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="phone">Phone: </label>
      <input type="text" name="phone" id="phone">
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="submit" onClick="test();">

    </p>
</fieldset>
</form>

      

<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM people";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessphone.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> <input type='text' name='phone' value='$row[phone]' />\n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>

</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>