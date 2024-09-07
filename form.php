<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $csvFile = "data.csv";

    $headers = array("Surname", "First Name", "Last Name", "Email", "Phone Number", "Department", "Level", "Gender");

    $Surname = $_POST['Sname'];
    $Firstname = $_POST['Fname'];
    $Lastname = $_POST['Lname'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Department = $_POST['dept'];
    $Level = $_POST['level'];
    $Gender = $_POST['gender'];

    $data = array($Surname, $Firstname, $Lastname, $Email, $Phone, $Department, $Level, $Gender);

if (!file_exists($csvFile)) {
        $file = fopen($csvFile, 'a');
        fputcsv($file, $headers);
        fclose($file);
    }

    $file = fopen($csvFile, 'a');

    fputcsv($file, $data);

    fclose($file);

    header("Location: success.php?Sname=$Surname&Fname=$Firstname");
    exit;
}
?>
