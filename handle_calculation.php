<?php
// file name: handle_calculation.php
// bmcc email: ling.fang@stu.bmcc.cuny.edu
// file creation date: feb 16, 2019; 
// UPDATE(feb 23): fixed comma and decimal issues
// This is a page handle calculation.
// by select status and enter income, can calculate income tax.
include('templates/header2.html');
print'<h2>Calculation Result</h2>';

$status = $_REQUEST['status'];
$income = $_REQUEST['income'];

if ($status == 'single') 
{
	if( $income <= 9275)
		$result = $income * 0.1;
	else if ($income <= 37650)
		$result = 927.5 + ($income - 9275) * 0.15;
	else if ($income <= 91150)
		$result = 5183.75 + ($income - 37650) * 0.25;
	else if ($income <= 190150)
		$result = 18558.75 + ($income - 91150) * 0.28;
	else if ($income <= 413350)
		$result = 46278.75 + ($income - 190150) * 0.33;
	else if ($income <= 415050)
		$result = 119934.75 + ($income - 413350) * 0.35;
	else
		$result = 120529.75 + ($income - 415050) * 0.396;

}
else  if ($status = 'married')
{
	if( $income <= 18450)
		$result = $income * 0.1;
	else if ($income <= 74900)
		$result = 1845 + ($income - 18450) * 0.15;
	else if ($income <= 151200)
		$result = 10312.5 + ($income - 74900) * 0.25;
	else if ($income <= 230450)
		$result = 29387.5 + ($income - 151200) * 0.28;
	else if ($income <= 411500)
		$result = 51577.5 + ($income - 230450) * 0.33;
	else if ($income <= 464850)
		$result = 111324 + ($income - 411500) * 0.35;
	else
		$result = 129996.5 + ($income - 464850) * 0.396;
}
// feb 23, UPDATE number format
$result = number_format ($result, 2); 
echo "<p> Your income tax is: $$result<p>";

?>
