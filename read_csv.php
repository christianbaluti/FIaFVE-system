<?php
// Read the CSV file and convert it to JSON
$csvFile = 'Train.csv';
$jsonData = csvToJson($csvFile);
header('Content-Type: application/json');
echo $jsonData;

function csvToJson($fname) {
    if (!($fp = fopen($fname, 'r'))) {
        die("Can't open file...");
    }

    $key = fgetcsv($fp, "1024", ",");
    $json = array();

    while ($row = fgetcsv($fp, "1024", ",")) {
        // If number of elements in row is not equal to keys, skip this row or handle error
        if (count($row) == count($key)) {
            $json[] = array_combine($key, $row);
        } else {
            // Handle the error as per your needs: skip the row, log error, etc.
            // For example, logging the error:
            error_log("CSV row has incorrect number of elements and will be skipped: " . json_encode($row));
        }
    }
    fclose($fp);

    return json_encode($json);
}

?>
