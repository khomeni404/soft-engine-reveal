<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: " . base64_decode($_POST["token"]));
    exit();
} ?>