<?php
// ---------------- DEBUG SESSION VARS --------------------
$table_body = "";
foreach ($_SESSION as $key => $value) {
	if (is_array($value)) {
		$table_body .=  "<tr><td>".$key."</td><td>Returned an Array</td></tr>";
	} 
	else $table_body .=  "<tr><td>".$key."</td><td>".$value."</td></tr>";
}

if ($logged_in) $table_body .=  "<tr><td>Logged In</td><td>Yes</td></tr>";
else $table_body .=  "<tr><td>Logged In</td><td>No</td></tr>";

echo "<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#sessionVars' aria-expanded='false' aria-controls='sessionVars'>View Session Vars</button>";
echo "<div class='collapse bcoem-admin-element-bottom' id='sessionVars'>";
echo "<table class='table table-striped table-bordered'";
echo "<thead>";
echo "<tr>";
echo "<th>Var Name</th>";
echo "<th>Value</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo $table_body;
echo "</tbody>";
echo "</table>";
echo "</div>";
?>