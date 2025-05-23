<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Athene LMS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../assets/jquery/datatables.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .modal-dialog {
            position: fixed;
            margin: auto;
            margin-top: 20px;
            width: 1100px;
            height: auto;
            right: 0px;

        }

        .modal-content {
            height: 100%;
        }
    </style>
</head>


<body>
    <?php
    session_start();
    require_once "../connection.php";
    require_once "../sidebar.php";
    require_once "../header.php";

    $sql = "SELECT * FROM student, assignment_submission where student.stud_id = assignment_submission.stud_id and assignment_submission.agn_id = {$_SESSION['assignment']['agn_id']}";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
    } else {
        die("<h5>Please refresh page</h5>");
    }


    ?>


    <main id="main" class="main ps-0">
        <div class="pagetitle ms-2">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Course</a></li>
                    <li class="breadcrumb-item active"><a
                            href="course_view.php?cseId=<?php echo $_SESSION['course']['cse_id']; ?>">
                            <?php echo $_SESSION['course']['cse_full_name']; ?>
                        </a></li>
                    <li class="breadcrumb-item active"><a href="">
                            <?php echo $_SESSION['assignment']['agn_name']; ?>
                        </a></li>
                    <li class="breadcrumb-item active"><a href="">Edit</a></li>
                </ol>
            </nav>
        </div>


        <div class="card ms-4 col-11 ">
            <div class="card-body">
                <div class="col-xl-12 mt-4">

                    <form name="assignmentForm" action="../assignment/assignment_edit_db.php" method="post"
                        enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label text-dark" for="short_description">Assignment
                                        Name</label>
                                    <div class="col-md-10 mt-2">
                                        <input type="text" class="form-control" id="course_title" name="name" required
                                            value="<?= isset($_SESSION['assignment']['agn_name']) ? $_SESSION['assignment']['agn_name'] : ""; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label text-dark"
                                        for="short_description">Description</label>
                                    <div class="col-md-10 mt-2">
                                        <textarea type="text" class="form-control" id="course_title" col="70" row="5"
                                            name="description"
                                            required><?= isset($_SESSION['assignment']['agn_desc']) ? $_SESSION['assignment']['agn_desc'] : ""; ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label text-dark" for="short_description">Total
                                        Marks</label>
                                    <div class="col-md-10 mt-2">
                                        <input type="number" class="form-control" id="course_title" name="totMarks"
                                            required
                                            value="<?= isset($_SESSION['assignment']['agn_total_marks']) ? $_SESSION['assignment']['agn_total_marks'] : ""; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label text-dark" for="short_description">Start
                                        Time</label>
                                    <div class="col-md-10">
                                        <input type="datetime-local" class="StartDateTime form-control" name="startDate"
                                            required
                                            value="<?= isset($_SESSION['assignment']['agn_start_date']) ? date("Y-m-d\TH:i", strtotime($_SESSION['assignment']['agn_start_date'])) : ""; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label text-dark" for="short_description">End
                                        Time</label>
                                    <div class="col-md-10">
                                        <input type="datetime-local" class="form-control" id="agnEndTime" name="endDate"
                                            required
                                            value="<?= isset($_SESSION['assignment']['agn_end_date']) ? date("Y-m-d\TH:i", strtotime($_SESSION['assignment']['agn_end_date'])) : ""; ?>">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </main>





    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">



    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
    <script src="../assets/jquery/datatables.min.js"></script>

    <script>
        $(document).ready(function () {
            window.addEventListener("load", function () {
                var now = new Date();
                var year = now.getFullYear();
                var month = now.getMonth() + 1;
                var day = now.getDate();
                var hour = now.getHours();
                var minute = now.getMinutes();
                var second = now.getSeconds();
                var localDatetime = year + "-" +
                    (month < 10 ? "0" + month.toString() : month) + "-" +
                    (day < 10 ? "0" + day.toString() : day) + "T" +
                    (hour < 10 ? "0" + hour.toString() : hour) + ":" +
                    (minute < 10 ? "0" + minute.toString() : minute);

                $('.StartDateTime').each((i, e) => {
                    $(e).val(localDatetime);
                });
                var someDate = new Date();
                var year = now.getFullYear();
                var month = now.getMonth() + 1;
                var day = now.getDate();
                var hour = now.getHours();
                var minute = now.getMinutes();
                var second = now.getSeconds();
                var localDatetime = year + "-" +
                    (month < 10 ? "0" + month.toString() : month) + "-" +
                    (day < 10 ? "0" + day.toString() : day) + "T" +
                    (hour < 10 ? "0" + hour.toString() : hour) + ":" +
                    (minute < 10 ? "0" + minute.toString() : minute);

                var numberOfDaysToAdd = 7;
                var result = someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
                enddate = new Date(result);
                var day = enddate.getDate();
                var localDatetime = year + "-" +
                    (month < 10 ? "0" + month.toString() : month) + "-" +
                    (day < 10 ? "0" + day.toString() : day) + "T" +
                    (hour < 10 ? "0" + hour.toString() : hour) + ":" +
                    (minute < 10 ? "0" + minute.toString() : minute);
                $("[name='endDate']").val(localDatetime);
            });
        });
    </script>

</body>

</html>