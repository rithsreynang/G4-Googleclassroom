<?php
require_once "../../models/teach/drop.assignment.model.php";
require_once "../../models/classroom/get.user.model.php";
$fileDestination = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    date_default_timezone_set("Asia/Phnom_Penh");
    $classroom_id = $_GET['classroom_id'];
    $user_id = $_GET['user_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $score = $_POST['fullscore'];
    $dateline = $_POST['dateline'];
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTemName = $_FILES['file']['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'png', 'jpeg', 'pdf', 'pptx', 'zip');
    $postDate = date("Y-m-d h:i:sa");
    if ($file) {
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError == 0) {
                if ($fileSize < 10000000) {
                    $fileDestination = '../../assets/files/' . $fileName;
                    move_uploaded_file($fileTemName, $fileDestination);
                }
            }
        }
    }
    createAssignment($title, $postDate, $classroom_id, $dateline, $description, $fileDestination, $user_id, $score);
    header("location: ./classwork.controller.php?classroom_id=$classroom_id");
};
?>
<script>
    $("#createAssignment").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form which will reload the page

        var form = $(this); //get the form

        $.ajax({
            type: "POST",
            url: "The php script posting the form to",
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                // show response from the php script.
            }
        });

    });
</script>