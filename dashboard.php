<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Welcome, <?php echo $user['name']; ?> 🎉</h2>
    <p>Your email: <strong><?php echo $user['email']; ?></strong></p>
    <a href="logout.php" class="inline-block mt-4 bg-red-500 text-white px-4 py-2 rounded">Logout</a>
  </div>
</body>
</html>
