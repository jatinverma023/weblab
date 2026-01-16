<?php
$counterFile = "counter.txt";

/* Create file if not exists */
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

/* Read & convert to integer */
$currentCount = (int) file_get_contents($counterFile);
$newCount = $currentCount + 1;

/* Save updated count */
file_put_contents($counterFile, $newCount);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Visitor Counter</title>
<style>
body{
    font-family: Arial;
    background:#f4f4f9;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}
.container{
    background:white;
    padding:30px;
    border-radius:8px;
    box-shadow:0 2px 10px rgba(0,0,0,0.2);
    text-align:center;
}
</style>
</head>

<body>
<div class="container">
    <h1>Welcome to Our Website!</h1>
    <p>You are visitor number: <strong><?php echo $newCount; ?></strong></p>
</div>
</body>
</html>
