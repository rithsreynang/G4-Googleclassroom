<?php
$classroom_id = $_GET['classroom_id'];
require_once "../../../../models/teach/material/create.material/drop.material.model.php";
require_once "../../../../models/classroom/get.user.model.php";
$fileDestination = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    date_default_timezone_set("Asia/Phnom_Penh");

    //get title, description
    $title = $_POST['title'];
    $description = $_POST['description'];

    //get file info
    $targetDir = "../../../../assets/files/"; // Corrected target directory
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowed = array('jpg', 'png', 'jpeg', 'pdf', 'pptx', 'zip', 'txt', 'docx', 'gif', 'xlsx', 'html', 'json', 'js', 'css');
    if (isset($_FILES['file'])){
        if ($_FILES["file"]["size"] > 5000000) { // Adjust the size limit as needed (5MB in this case)
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if (!in_array($fileType, $allowed)) {
            echo "Sorry, only PDF, DOCX, and XLSX files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                $filename = basename($_FILES["file"]["name"]);
                $filepath = $targetFile;
                $postDate = date("Y-m-d h:i:sa");
                $material = createMaterial($filename, $description, $title, $postDate, $classroom_id, $filepath);
                if ($material) {
                    header("Location: /classwork-teacher");
                } else {
                    header("Location: ./create-assignment");
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

    }else{
        echo "Sorry, We don't get your file material";
    }
}