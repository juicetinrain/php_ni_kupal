<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ul { list-style-type: none; }
        .nodisc { color: red; }
        .discount { color: green; }
        .totdisc { color: blue; }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
            <?php 
            if ($_SERVER ['REQUEST_METHOD'] == "POST"){
                $fullname = htmlspecialchars($_POST['fullname']);
                $age = htmlspecialchars($_POST ['age']);
                $grade = htmlspecialchars($_POST ['grade']);
                $gender = htmlspecialchars($_POST ['gender']);
                $course = $_POST ['course'];
                $age_disc = 0;
                $grade_disc = 0;

                if ($course == "ACT"){
                    $tuition = 15000;
                } elseif ($course == "HM"){
                    $tuition = 20000;
                } elseif ($course == "BSOA"){
                    $tuition = 18000;
                }


                if ($age >= 26 && $age <= 30){
                    $age_disc = $tuition * 0.05;
                }

                if ($grade >= 95){
                    $grade_disc = $tuition * 0.2;
                }
                
                if ($grade_disc > 0 or $age_disc > 0){
                    $total_discount = $grade_disc + $age_disc;
                    $final_tuition = $total_discount - $tuition;
                    $final_tuition *= (-1);
                }

            }else{
                echo "<div class='alert alert-danger'> No data received. </div>";
                exit();
            }
            ?>
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Submitted Information.</h4>
        </div>
        <div class="card-body">
           
            <ul>
                <li><strong>Full Name:</strong> <?=$fullname;?> </li>
                <li><strong>Age:</strong> <?=$age;?> </li>
                <li><strong>Average Grade:</strong> <?= $grade; ?> </li>
                <li><strong>Course:</strong> <?=$course;?> </li>
                <li><strong>Gender:</strong> <?=$gender;?> </li>
            </ul>

            <hr>

            <ul>
                <li><strong>Tuition Fee:</strong> ₱<?= number_format($tuition, 2); ?> </li>
                <?php 

                if ($age_disc > 0){
                    echo "<li class='discount'><strong>Age Discount (5%):</strong> ₱".number_format($age_disc, 2)."</li>";
                } 
                
                if ($grade_disc > 0){
                    echo "<li class='discount'><strong>Grade Discount (20%):</strong> ₱".number_format($grade_disc, 2)."</li>";
                }

                if ($age_disc == 0 && $grade_disc == 0){
                    echo "<li class='nodisc'><strong>No discount added</strong></li>";
                    $final_tuition = $tuition;
                } else {
                    echo "<li class='totdisc'><strong>Total Discount:</strong> ₱".number_format($total_discount, 2)."</li>";
                }

                ?>
                <li><strong>Final Tuition Fee:</strong> ₱<?= number_format($final_tuition, 2); ?> </li>
            </ul>

            <div class="mt-4">
                <a href="SCReg.php" class="btn btn-primary">Back</a>  
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
