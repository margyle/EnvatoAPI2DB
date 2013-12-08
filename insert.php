<?php
//THEME ID to variable
$formData = $_GET["id"];
//query the ENVATO api for the the  theme data
$json = file_get_contents('http://marketplace.envato.com/api/edge/item:'.$formData.'.json');
$data = json_decode($json,true);

// print the results so we know its working
print_r($themes);

//theme data json data to variables. I know how silly this is, like I said, ugly hack
$value=array($data['item']);
//theme data array into variables
$themeId = $data['item']['id'];
$name = $data['item']['item'];
$url = $data['item']['url'];
$user = $data['item']['user'];
$thumbnail = $data['item']['thumbnail'];
$sales = $data['item']['sales'];
$rating = $data['item']['rating'];
$cost = $data['item']['cost'];
$uploaded_on = $data['item']['uploaded_on'];
$last_update = $data['item']['last_update'];
$tags = $data['item']['tags'];
$category = $data['item']['category'];
$live_preview_url = $data['item']['live_preview_url'];
///IMPORTANT:This is all outdated mysql, do not use in production
//add in your db info here
$username = "your info";
$password = "your info";
$hostname = "your info;

//connect to the db
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select the table
$selected = mysql_select_db("themes",$dbhandle)
or die("Could not select bbyopen");


//Insert into the db
$db_insert = mysql_query("INSERT INTO envato (themeId, name,  url, user, thumbnail, sales, rating, cost, uploaded_on, last_update, tags, category, live_preview_url)
 VALUES ('$themeId', '$name', '$url', '$user', '$thumbnail', '$sales', '$rating', '$cost', '$uploaded_on', '$last_update', '$tags', '$category', '$live_preview_url')");

if (!$db_insert)
{
    die('Could not connect - event insert failed: ' . mysql_error());
}
?>
<!--Just the form which calls this page itself-->
<form action="themeAdmin.php" method="get">
ID <input type="text" name="id"><br>

<input type="submit">
</form>
