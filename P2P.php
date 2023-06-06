<?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $type = $_GET["type"];
    $trId = $_GET["trId"];

    if ($type == "S") {
        $message = "Successfully Completed";
    } else if ($type == "F") {
        $message = "Failed to Purchase";
    } else if ($type == "C") {
        $message = "Purchase Cancelled";
    }
    if (strlen($trId) > 0) {
        $message = $message . ". Transaction ID: " . $trId;
    }
    $url = "https://www.sebd.co?message=".$message;
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: " . $url);

    exit();
} ?>