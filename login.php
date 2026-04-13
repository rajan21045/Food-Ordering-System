<?php
include 'db.php';
session_start();

if (isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Since DB uses plain text password
        if ($password === $row['password']) {

            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name']  = $row['fullname'];
            $_SESSION['user_id']    = $row['id'];
            $_SESSION['user_role']  = $row['user_type'];

            if ($row['user_type'] == 'admin') {
                header("Location: admin/dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "Invalid email or password.";
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        :root {
            --primary-red: #ff3838;
            --dark-bg: #0b0f19;
            --glass: rgba(255, 255, 255, 0.08);
            --glass-border: rgba(255, 255, 255, 0.15);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)),
                url('img/pic1.jpg') center/cover no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Glass container */
        .auth-container {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            padding: 50px 40px;
            border-radius: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* Heading */
        .auth-container h2 {
            color: white;
            margin-bottom: 20px;
        }

        /* Input fields */
        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
        }

        .input-box input {
            width: 100%;
            padding: 14px 14px 14px 45px;
            border-radius: 15px;
            border: 1px solid var(--glass-border);
            background: rgba(255, 255, 255, 0.05);
            color: white;
            outline: none;
            transition: 0.3s;
        }

        .input-box input:focus {
            border-color: var(--primary-red);
            box-shadow: 0 0 10px rgba(255, 56, 56, 0.3);
        }

        /* Button */
        .btn-auth {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 15px;
            background: var(--primary-red);
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-auth:hover {
            background: #ff5252;
            transform: translateY(-3px);
        }

        /* Error message */
        .error {
            color: #ff6b6b;
            margin-bottom: 15px;
        }

        /* Responsive */
        @media (max-width: 500px) {
            .auth-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <form method="POST">

        <div class="input-box">
            <i class='bx bx-envelope'></i>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="input-box">
            <i class='bx bx-lock-alt'></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" name="submit" class="btn-auth">Sign In</button>

    </form>

</body>

</html>