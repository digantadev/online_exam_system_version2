<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit();
}

$conn = new mysqli('sql108.infinityfree.com', 'if0_43185167', 'D8SctixtLhBje', 'if0_43185167_online_exam_system');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_id = $_SESSION['user_id'];

// Fetch all submissions by this student
$sql = "SELECT s.id AS submission_id, e.id AS exam_id, e.title, e.type, s.score, s.submitted_at
        FROM exam_submissions s
        JOIN exams e ON s.exam_id = e.id
        WHERE s.student_id = ?
        ORDER BY s.submitted_at DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Performance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-4" style="background-color: #16697A;">
    <h2>📊 My Performance</h2>

    <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Exam Title</th>
                    <th>Type</th>
                    <th>Score</th>
                    <th>Submitted At</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                        <td><?php echo strtoupper($row['type']); ?></td>
                        <td>
                            <?php
                            if ($row['type'] === 'quiz') {
                                //  Calculate total allocated marks instead of just question count
                                $qres = $conn->query("SELECT SUM(marks) AS total_marks FROM questions WHERE exam_id = {$row['exam_id']}");
                                $qdata = $qres->fetch_assoc();
                                $total_marks = $qdata['total_marks'] ?? 0;

                                if ($row['score'] !== null) {
                                    echo "{$row['score']} / {$total_marks}";
                                } else {
                                    echo "Not Graded";
                                }
                            } else {
                                echo ($row['score'] !== null) ? $row['score'] : "Pending (Teacher Review)";
                            }

                            ?>
                        </td>
                        <td><?php echo $row['submitted_at']; ?></td>
                        <td>
                            <a href="view_submission.php?submission_id=<?php echo $row['submission_id']; ?>" class="btn btn-sm btn-info">
                                View
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No exams taken yet.</p>
    <?php endif; ?>

</body>

</html>