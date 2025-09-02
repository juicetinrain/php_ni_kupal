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
        .net { color: green; font-size: 1.2em; }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Employee Payslip</h4>
        </div>
        <div class="card-body">
            <?php 
            if ($_SERVER ['REQUEST_METHOD'] == "POST"){
                $employee = htmlspecialchars($_POST['employee']);
                $days = htmlspecialchars($_POST ['days']);
                $rate = htmlspecialchars($_POST ['rate']);
                $advance = htmlspecialchars($_POST ['advance']);
                $gross = $days * $rate;
                $tax = $gross * 0.02;
                $sss = $gross * 0.015;
                $pagibig = 50;
                $deductions = $tax + $sss + $pagibig + $advance;
                $net = $gross - $deductions;
            }else{
                echo "<div class='alert alert-danger'> No data received. </div>";
                exit();
            }
            ?>
           
            <ul>
                <li><strong>Employee Name:</strong> <?=$employee;?> </li>
                <li><strong>Total Days Worked:</strong> <?=$days;?> </li>
                <li><strong>Daily Rate:</strong> ₱<?= number_format($rate, 2); ?> </li>
            </ul>

            <hr>

            <ul>
                <li><strong>Gross Pay:</strong> ₱<?= number_format($gross, 2); ?> </li>
                <li><strong>Tax (2%):</strong> ₱<?= number_format($tax, 2); ?> </li>
                <li><strong>SSS (1.5%):</strong> ₱<?= number_format($sss, 2); ?> </li>
                <li><strong>Pag-ibig:</strong> ₱<?= number_format($pagibig, 2); ?> </li>
                <li><strong>Cash Advance:</strong> ₱<?= number_format($advance, 2); ?> </li>
            </ul>

            <hr>

            <ul>
                <li><strong>Total Deductions:</strong> ₱<?= number_format($deductions, 2); ?></li>
                <li class="net"><strong>Net Pay:</strong> ₱<?= number_format($net, 2); ?></li>
            </ul>

            <div class="mt-4">
                <a href="payroll.php" class="btn btn-primary">Back</a>  
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
