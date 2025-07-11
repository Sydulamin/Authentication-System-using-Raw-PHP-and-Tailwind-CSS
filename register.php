<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Register</h2>
    <form action="" method="POST">
      <input type="text" name="name" placeholder="Name" class="w-full p-2 mb-3 border rounded" required>
      <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-3 border rounded" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-3 border rounded" required>
      <button type="submit" name="register" class="w-full bg-blue-500 text-white p-2 rounded">Register</button>
    </form>
    <p class="mt-3">Already have an account? <a href="login.php" class="text-blue-600">Login</a></p>

    <?php
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($sql)) {
            echo "<p class='text-green-600 mt-3'>Registration successful!</p>";
        } else {
            echo "<p class='text-red-600 mt-3'>Error: " . $conn->error . "</p>";
        }
    }
    ?>
  </div>
</body>
</html>
