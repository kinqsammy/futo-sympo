<?php
$csvFile = "data.csv";

if (file_exists($csvFile)) {
    $file = fopen($csvFile, "r");
    $headers = fgetcsv($file); 

    $maleCount = $femaleCount = 0;
    $levelCounts = $departmentCounts = [];

    while (($data = fgetcsv($file)) !== FALSE) {
        $gender = $data[7]; 
        if ($gender == 'Male') {
            $maleCount++;
        } elseif ($gender == 'Female') {
            $femaleCount++;
        }

        $level = $data[6]; 
        if (!isset($levelCounts[$level])) {
            $levelCounts[$level] = 0;
        }
        $levelCounts[$level]++;

        $department = $data[5]; 
        if (!isset($departmentCounts[$department])) {
            $departmentCounts[$department] = 0;
        }
        $departmentCounts[$department]++;
    }

    fclose($file);


    $totalVotes = $maleCount + $femaleCount;

    $malePercentage = ($totalVotes > 0) ? ($maleCount / $totalVotes) * 100 : 0;
    $femalePercentage = ($totalVotes > 0) ? ($femaleCount / $totalVotes) * 100 : 0;
} else {
    echo "Requested file not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" size="16*16" href="images/icon.png">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Data Results</h1>
    <div>
        <h2>Total Entries</h2>
        <p><?php echo $totalVotes; ?></p>
    </div>
    <div>
        <h4>Gender Distribution</h4>
        <p>Male: <?php echo $maleCount; ?> (<?php echo round($malePercentage, 2); ?>%)</p>
        <p>Female: <?php echo $femaleCount; ?> (<?php echo round($femalePercentage, 2); ?>%)</p>
    </div>
    <div>
        <h4>Level Distribution</h4>
        <?php foreach ($levelCounts as $level => $count): ?>
            <p><?php echo $level; ?>: <?php echo $count; ?></p>
        <?php endforeach; ?>
    </div>
    <div>
        <h4>Department Distribution</h4>
        <?php foreach ($departmentCounts as $department => $count): ?>
            <p><?php echo $department; ?>: <?php echo $count; ?></p>
        <?php endforeach; ?>
    </div>

    <br>
    <br>

    <form action="download.php" method="post">
        <input type="hidden" name="file" value="data.csv">
        <button type="submit" style="background-color: black; border-radius: 4px; cursor: pointer; padding: 12px;">Download File</button>
    </form>

    <script>
        const isLoggedIn = sessionStorage.getItem("isLoggedIn");

        if(!isLoggedIn) {
            window.location.href = "login.html";
        }
        
        const timeoutDuration = 10000;

        let timeoutTimer;

        function resetTimer() {
            clearTimeout(timeoutTimer);
            timeoutTimer = setTimeout(handleTimeout, timeoutDuration);
        }

        function handleTimeout () {
            if(confirm("Service Timeout: No webpage activity! Click OK to return to Login Page.")) {
                window.location.href = "login.html";
            }
            else {
                resetTimer();
           }
        }


        document.addEventListener("mousemove", resetTimer);
        document.addEventListener("keypress", resetTimer);

        resetTimer();
    </script>
    
</body>
</html>
