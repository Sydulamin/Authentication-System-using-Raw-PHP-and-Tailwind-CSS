<?php
session_start();
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Login</h2>
    <form action="" method="POST">
      <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-3 border rounded" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-3 border rounded" required>
      <button type="submit" name="login" class="w-full bg-green-500 text-white p-2 rounded">Login</button>
    </form>
    <p class="mt-3">Don't have an account? <a href="register.php" class="text-blue-600">Register</a></p>

    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                header("Location: dashboard.php");
                exit;
            } else {
                echo "<p class='text-red-600 mt-3'>Wrong password!</p>";
            }
        } else {
            echo "<p class='text-red-600 mt-3'>User not found!</p>";
        }
    }
    ?>
  </div>
</body>
</html>
