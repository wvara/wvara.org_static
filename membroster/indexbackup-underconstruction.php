<br />
<?
//Temporary test file.

date_default_timezone_set('America/Los_Angeles');
$endgrace_mm = 0; //Last month of membership grace period

//$local_date = date("Y m d h:i:sa");
$local_yyyy = (int) date("Y");
$local_yyyy_minus1 = $local_yyyy - 1;
$local_mm = (int) date("m");
$local_dd = (int) date("d");
$local_hisa_string = date("h:i:sa");
$local_datetime_string = "$local_mm/$local_dd/$local_yyyy $local_hisa_string";
$local_date_string = "$local_mm/$local_dd/$local_yyyy";

print "<h3> West Valley ARA Roster </h3>";
print "<h3> Under Construction - Available Soon </h3>";
