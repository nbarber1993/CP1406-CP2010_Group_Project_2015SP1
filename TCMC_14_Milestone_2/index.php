<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php if ($_GET[page] == "home" or $_GET[page] == "" ) {
	echo "<title>TCMC - Home</title>";}
else if ($_GET[page] == "communityNotices") {
	echo "<title>TCMC - Community Notices</title>";}
else if ($_GET[page] == "events") {
	echo "<title>TCMC - Events</title>";}
else if ($_GET[page] == "membership") {
	echo "<title>TCMC - Membership</title>";}
else if ($_GET[page] == "musicians") {
	echo "<title>TCMC - Musicians</title>";}
else if ($_GET[page] == "aboutUs") {
	echo "<title>TCMC - About Us</title>";}
else if ($_GET[page] == "sponsors"){
	echo "<title>TCMC - Sponsors</title>";}
else {
	echo "<title>TCMC - Unknown Page</title>";} ?>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css">
<script src="js/adjustColumnHeights.js"></script>
</head>

<body>
<div id="container">
    	<?php include("inc_header.php"); ?>
        <?php include("inc_navigation.php"); ?>
        <?php include("inc_leftSidebar.php"); ?>
        <?php if ($_GET[page] == "home" or $_GET[page] == "" ) {
			include("inc_home.php");}
		else if ($_GET[page] == "communityNotices") {
			include("inc_communityNotices.php");}
		else if ($_GET[page] == "events") {
			include("inc_events.php");}
		else if ($_GET[page] == "membership") {
			include("inc_membership.php");}
		else if ($_GET[page] == "musicians") {
			include("inc_musicians.php");}
		else if ($_GET[page] == "aboutUs") {
			include("inc_aboutUs.php");}
		else if ($_GET[page] == "aboutUs2") {
			include("inc_aboutUs (2).php");}
		else if ($_GET[page] == "sponsors"){
			include("inc_sponsors.php");}
		else {
			echo '<div id="contentContainer"><p>Unknown Page.</p></div>';} ?>
        <?php include("inc_rightSidebar.php"); ?>
        <?php include("inc_footer.php"); ?>
</div>
</body>
</html>