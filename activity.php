<?php 
// t8.php
// kbyron@bmcc.cuny.edu
// 3-9-2019
// This script connects to the MySQL server, issues a database query and displays result.
include('templates/header2.html');
$dbc = mysqli_connect("localhost", "root", "", "csc350") or die(mysql_error());
if ($dbc) {	
  print '<p>Successfully connected to MySQL!</p>';
  $q = 'select * from activity';
  print '<p>Running query: "'.$q.'" ... </p>';
  $r = mysqli_query($dbc,$q) or die('Query failed: ' . mysql_error());
  print "<table border=1>\n";
  $i=0;
  while ($line = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    $i++;
    if($i == 1){ // show column headings
      echo "<tr><td></td>";
      foreach ($line as $key => $value) {
        echo "<td><b>$key</b></td>";
      }
      echo "</tr>";
    }
    echo "<tr><td>".$i."</td>";
    foreach ($line as $key => $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
?>

<?php 
// t10.php
// 3-11-2019
// kbyron@bmcc.cuny.edu
// 
// PHP script (t10.php) to encrypt passwords for customer accounts using md5 hash algorithm
//
echo 't10.php illustrates the php hash function ... <br><br>';
print "<table border='1'>";
print "<tr> <th>id</th> <th>pw</th><th>pw hash with md5</th></tr>";
$a = "md5";
//
$id = "admin";
$pw = "csc350";
$r = hash($a,$pw);
print "<tr><td>$id</td><td>$pw</td><td>$r</td></tr>";
//
$id = "bow@yahoo";
$pw = "abc123";
$r = hash($a,$pw);
print "<tr><td>$id</td><td>$pw</td><td>$r</td></tr>";
//
$id = "jack@gmail";
$pw = "xyz789";
$r = hash($a,$pw);
print "<tr><td>$id</td><td>$pw</td><td>$r</td></tr>";
//
print "</table>";
echo '<br>t10.php is done ... <br>';
?>

<?php 
// t9.php
// kbyron@bmcc.cuny.edu
// 3-9-2019
// This script connects to the MySQL server, issues a database query and displays result.
$dbc = mysqli_connect("localhost", "root", "", "csc350") or die(mysql_error());
if ($dbc) {	
  print '<p>Successfully connected to MySQL!</p>';
  $q = 'select * from activity where a_id="bow@yahoo"';
  print '<p>Running query: "'.$q.'" ... </p>';
  $r = mysqli_query($dbc,$q) or die('Query failed: ' . mysql_error());
  print "<table border=1>\n";
  $i=0;
  while ($line = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    $i++;
    if($i == 1){ // show column headings
      echo "<tr><td></td>";
      foreach ($line as $key => $value) {
        echo "<td><b>$key</b></td>";
      }
      echo "</tr>";
    }
    echo "<tr><td>".$i."</td>";
    foreach ($line as $key => $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
?>