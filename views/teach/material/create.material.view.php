<?php
  $id = $_GET['classroom_id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Classwork_material </title>
</head>
<body style="background: #F2F3F4;">

  <div class="pt-3 d-flex flex-row border-bottom" style="font-size:20px;background: #FFFF;">

      <a href="../../controllers/teach/classwork.controller.php?classroom_id=<?= $id ?>" class="ml-5 text-dark text-decoration-none border-0 " style=" margin-right: 25px;"><i class="fa fa-close"></i></a>
      <i class="fa fa-file-text-o" style=" margin-right: 25px; margin-top: 8px;"></i>
      <p>Meterial</p>
  </div>

<div class="container mt-5 border p-3 rounded  border-primary border-4" style="background: #FFFF;">
  
  <form action="../../../controllers/teach/material/drop.material.controller.php?classroom_id=<?= $id ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="files">Choose Files:</label>
      <input type="file" class="form-control-file border p-2 rounded " id="files" name="files" multiple accept=".pdf, .doc, .docx" required>



    <!-- <a href="controllers/enrollment/enrollment.controller.php"> -->
      <button type="submit" class="btn btn-primary d-flex justify-content-end" style="margin-left: 94%;">Create</button>
    <!-- </a> -->
  </form>
</div>

</body>
</html>