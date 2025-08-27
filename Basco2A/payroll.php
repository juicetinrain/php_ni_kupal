<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">PAYROLL CALCULATOR</h4>
        </div>
        <div class="card-body">
            <form action="process_payroll.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="employee" class="form-label">Employee Name</label>
                    <input type="text" name="employee" id="employee" class="form-control" placeholder="Enter Your Full Name" required>
                </div>

                <!-- days -->
                <div class="mb-3">
                    <label for="days" class="form-label">Total Days of Work</label>
                    <input type="number" name="days" id="days" class="form-control" placeholder="Enter Days Worked" required>
                </div>

                <!-- rate -->
                <div class="mb-3">
                    <label for="rate" class="form-label">Daily Rate</label>
                    <input type="number" name="rate" id="rate" class="form-control" rows="2" placeholder="Enter Daily Rate" required>
                </div>

                <!-- advance -->
                <div class="mb-3">
                    <label for="advance" class="form-label">Cash Advance</label>
                    <input type="number" name="advance" id="advance" class="form-control" required>
                </div>


                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>