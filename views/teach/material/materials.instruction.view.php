<?php
require_once "models/teach/material/get.material/get.an.meterial.model.php";
$material_id = $_SESSION['material_id'];
$classroom_id = $_SESSION['classroom_id'];
$material = getMaterial($classroom_id, $material_id);
?>
<!-- <div class="mt-2" style="margin-left: 5%; display:flex; justify-content:space-between;">
    <div class="d-flex flex-column " style="width: 80%;">
        <div class="d-flex align-items-center  p-0  justify-content-between">
            <div class=" d-flex flex-row justify-content-between col-11" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle d-flex" style="background-color: #289AE3 ; padding: 10px; color: white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                        </svg>
                    </div>
                    <h3 class="ml-2 mt-3 text-primary"><?= $assign['title'] ?></h3>
                </div>
            </div>
            <div>
                <div>
                    <div class="dropdown" style="color: blue">
                        <svg xmlns="http://www.w3.org/2000/svg" class="dropdown-toggle" type="button" id="dropdownMenuassignment" data-bs-toggle="dropdown" aria-expanded="false" width="22" height="22" fill="currentColor" class="bi bi-three-dots-vertical d-flex justify-content-center mr-5" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                        </svg>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuassignment">
                            <li>
                                <a class="dropdown-item" href="../../../controllers/teach/assignment/update.assignment/update.assignment.controller.php?classroom_id=<?= $classroom_id ?>&assignment_id=<?= $assignment_id ?>">Edit</a>
                            </li>
                            <li>
                                <a type="button" class="dropdown-item" data-toggle="modal" data-target="#deleteModal">
                                    Delete
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Copy Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-2 border-top border-primary">
            <div class="col-8 mt-3">
                <p><?= $assign['description'] ?></p>
                <?php
                if (!empty($assign['path_file'])) {
                ?>
                    <a href="<?= $assign['path_file'] ?>" target="_blank" style="text-decoration: none;">
                        <div class="d-flex flex-1 align-items-center rounded shadow-sm" style="border: 1px solid #EDEAE0;">
                            <img src="../../assets/files/drive.png" height="60px" class="border-right p-2">
                            <div class="card-title p-1" style="font-size: 15px;"><?= $assign['file'] ?></div>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this assignment?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger" type="button" href="
                    ../../controllers/teach/assignment/delete.assignment/delete.assignment.controller.php?classroom_id=<?= $classroom_id ?>&assignment_id=<?= $assignment_id ?>">Delete</a>
            </div>
        </div>
    </div>
</div> -->
<div class=" border-top border-secondary d-flex align-item-center justify-content-center" style='margin-top: 12px'>
    <div class="d-flex flex-column col-9 m-4">
        <div class="d-flex align-items-center  justify-content-between">
            <div class="d-flex align-items-center justify-content-center">
                <div class="rounded-circle d-flex" style="background-color: #289AE3 ; padding: 10px; color: white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                        class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                    </svg>
                </div>
                <h3 class="ml-2 mt-3 text-primary">Material : <?= $material['title'] ?></h3>
            </div>
        </div>
        <div class=" border-top border-primary">
            <div class=" mt-3 d-flex align-items-center justify-content-between">

                <p><?= $material['description'] ?></p>
                <p>Post <?= $material['date_post'] ?></p>
            </div>
            <?php
                if (!empty($material['path_file'])) {
                ?>
            <a href="<?= $material['path_file'] ?>" target="_blank" style="text-decoration: none;">
                <div class="d-flex align-items-center border rounded shadow-sm col-5">
                    <img src="../../assets/files/drive.png" height="80px" style="margin-left: -11px"
                        class="border-right">
                    <div class="card-title p-1 text-truncate"><?= $material['file'] ?></div>
                </div>
            </a>
            <?php
                }
                ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>