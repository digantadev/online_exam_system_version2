<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'student') {
    header("Location: sign_in.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      min-height: 100vh;
    }

    /* Navbar styling */
    .navbar {
      background-color: rgba(0, 0, 0, 0.8);
      padding: 15px 40px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
      color: #00ffcc !important;
    }

    .logout-btn {
      background-color: #ff4d4d;
      border: none;
      color: white;
      font-weight: 500;
      border-radius: 30px;
      padding: 6px 20px;
      transition: all 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #e60000;
      transform: scale(1.05);
    }

    /* Card styling */
    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: #ffffff;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .card-title {
      color: #0f2027;
      font-weight: 600;
    }

    .card-text {
      color: #333;
    }

    img {
      height: 200px;
      object-fit: cover;
    }

    .dashboard-header {
      margin-top: 40px;
      text-align: center;
    }

    .dashboard-header h1 {
      font-weight: 700;
      color: #00ffcc;
      margin-bottom: 10px;
    }

    .dashboard-header h5 {
      color: #cce7e8;
    }

    .btn-custom {
      border-radius: 20px;
      padding: 8px 20px;
      font-weight: 500;
    }

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Student Dashboard</a>
    <div class="ms-auto">
      <a href="logout.php" class="btn logout-btn">Logout</a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5 pt-5">
    <div class="dashboard-header">
      <h1>Welcome, <?php echo $_SESSION['name']; ?> 👋</h1>
      <h5>Your learning journey continues here.</h5>
    </div>

    <div class="row justify-content-center mt-5 g-4">
      <!-- Take Exam Card -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="/images/job-exam-test-vector-illustration_635131-1634.avif" alt="Exam">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Take Exam</h5>
            <p class="card-text">Access available exams instantly. Enter your access key to begin and stay focused throughout your test session.</p>
            <div class="mt-auto">
              <a href="take_exam.php" class="btn btn-primary btn-custom">Start Exam</a>
            </div>
          </div>
        </div>
      </div>

      <!-- My Performance Card -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="/images/boy-is-working-graph-management_118167-9736.avif" alt="Performance">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">My Performance</h5>
            <p class="card-text">Track your exam results and monitor your progress. View detailed scores and areas of improvement.</p>
            <div class="mt-auto">
              <a href="performance.php" class="btn btn-success btn-custom">View Results</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
