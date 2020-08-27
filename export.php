<?php
    // get Users
    include('dbcon.php');
$query = "SELECT governments.GovId, addresses.GovType, governments.OldGovType, governments.NameSimple, governments.NameFormal,
governments.FullSpan,  addresses.HQphysicalAddress, addresses.HQphone, addresses.HQmailingAddress, addresses.WebsiteURL
 FROM governments INNER JOIN  addresses ON governments.GovId=addresses.GovId";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

$export = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $export[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=export.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Govid', 'Govtype', 'GovTypeCode', 'Sort as', 'NameFormal', 'FullSpan', 'Address', 'Phone Number', 'Email', 'Website'));

if (count($export) > 0) {
    foreach ($export as $row) {
        fputcsv($output, $row);
    }
}




?>

