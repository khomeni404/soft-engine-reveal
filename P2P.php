<?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $type = $_GET["type"];
    $trId = $_GET["trId"];

    $message = "";

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

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_GET["type"];
    $trId = $_GET["trId"];

    if (is_null($type) || strlen($type) < 1) {
        $type = $_POST["type"];
    }
    if (is_null($trId) || strlen($trId) < 1) {
        $trId = $_POST["trId"];
    }

    $message = "";

    if ($type == "S") {
        $message = "Successfully Completed~Your transaction id is $trId. Please write it down for further reference.";
    } else if ($type == "F") {
        $message = "Failed to Purchase~The purchase has failed. Please try again or contact us directly.";
    } else if ($type == "C") {
        $message = "Purchase Cancelled~The purchase has been cancelled.";
    }

    $url = "https://www.sebd.co?message=".$message;
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: " . $url);

    exit();
} ?>
