<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["next"])) {
    if (isset($_FILES["json_file"])) {
        // Process uploaded file
        $uploadedFile = $_FILES["json_file"];
        // Add code here to handle the uploaded JSON file
        // e.g., move_uploaded_file($uploadedFile["tmp_name"], "path/to/uploaded_file.json");
        header("Location: next_screen.php");
        exit();
    } elseif (isset($_POST["json_data"])) {
        // Process pasted JSON data
        $jsonData = $_POST["json_data"];
        // Add code here to handle the pasted JSON data
        // e.g., $jsonArray = json_decode($jsonData, true);
        header("Location: next_screen.php");
        exit();
    } else {
        // Handle the case when neither file nor data is provided
        echo "Please provide a JSON file or paste JSON data.";
    }
}
?>
