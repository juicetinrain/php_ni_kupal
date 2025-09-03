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
            <h4 class="mb-0">Student Registration</h4>
        </div>
        <div class="card-body">
            <form action="SCReg2.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
                </div>

                <!-- age -->
                <div class="mb-3">
                    <label for="age" class="form-label">Age <i>(5% discount for age 26 to 30 only)</i></label>
                    <input type="number" name="age" id="age" class="form-control" placeholder="Enter your age" required>
                </div>

                <!-- grade -->
                <div class="mb-3">
                    <label for="grade" class="form-label">Average Grade <i>(20% Discount for grades 95 and above.)</i></label>
                    <input type="number" name="grade" min="60" max="100" id="grade" class="form-control" placeholder="Enter your average grade" required>
                </div>


                <!-- Course -->
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <select name="course" id="course" class="form-select" required>
                        <option value="">-- Select Course --</option>
                        <option value="ACT">ACT - Associate in Computer Technology - ₱15,000</option>
                        <option value="HM">HM - Hospitality Management - ₱20,000</option>
                        <option value="BSOA">BSOA - Bachelor of Science in Office Administration - ₱18,000</option>
                    </select>
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
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