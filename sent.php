<?php

//Configuration
$file = "datafile.txt";

//var from form
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$company = $_POST['company'];
$pnumber = $_POST['pnumber'];
$latlong = $_POST['latlong'];

//check if isset submit or not
if(isset($_POST['submit'])){
    //content
    $write_content = "Name: ". $name ."\nLast Name: ". $lastname ."\nage: " . $age . "\nCompany: ". $company . "\nPhone Numbers: ". $pnumber . "\nLang-Long :". $latlong . "\n\n";
    
    //save into txt
    $write_file = file_put_contents($file, $write_content, FILE_APPEND);
    
    //check if save or not
    if($write_file == false) {
        $report = "There was an error writing this file";
    }
    else {
        $report = "Success writing to this file!<br><b>Please open <a href='".$file."'>".$file."</a> to view your data</b>";
    }
}
?>
<html>
<head>
<title>Result Geolocation</title>
</head>

<body>
<?php 
//report success or not
echo $report; 
?>
</body>
</html>
