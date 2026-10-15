<?php 
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'teacher') {
    header("Location: sign_in.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teacher Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
      color: #fff;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background-color: rgba(0, 0, 0, 0.85);
      padding: 15px 40px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: #00d9ff !important;
    }

    .logout-btn {
      background-color: #ff4d4d;
      border: none;
      color: white;
      border-radius: 30px;
      padding: 6px 20px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #e60000;
      transform: scale(1.05);
    }

    /* Dashboard Header */
    .dashboard-header {
      margin-top: 80px;
      text-align: center;
    }

    .dashboard-header h1 {
      color: #00d9ff;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .dashboard-header h5 {
      color: #cce7e8;
    }

    /* Cards */
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

    .btn-custom {
      border-radius: 20px;
      padding: 8px 20px;
      font-weight: 500;
    }

    img {
      height: 200px;
      object-fit: cover;
    }

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Teacher Dashboard</a>
    <div class="ms-auto">
      <a href="logout.php" class="btn logout-btn">Logout</a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5 pt-5">
    <div class="dashboard-header">
      <h1>Welcome, <?php echo $_SESSION['name']; ?> 👩‍🏫</h1>
      <h5>Empower students with seamless exam management</h5>
    </div>

    <div class="row justify-content-center mt-5 g-4">
      <!-- Create Exam Card -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="/images/boy-doing-exam-preparation-illustration-concept-on-white-background-vector.jpg" class="card-img-top" alt="Create Exam">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Create Exam</h5>
            <p class="card-text">
              Create and manage exams with ease. Choose from MCQ, CT, or Lab formats, set access keys, and schedule exams securely.
            </p>
            <div class="mt-auto">
              <a href="teacher_dashboard.php" class="btn btn-primary btn-custom">➕ Create Exam</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Monitor Participants Card -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="/images/vector-illustration-business-team-analysis-monitoring-web-report-dashboard-monitor_675567-3177.avif" class="card-img-top" alt="Monitor Participants">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Monitor Participants</h5>
            <p class="card-text">
              Track student activity in real-time. View submissions, attendance, and progress with just a few clicks.
            </p>
            <div class="mt-auto">
              <a href="monitor_participant.php" class="btn btn-success btn-custom">👥 View Participants</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
