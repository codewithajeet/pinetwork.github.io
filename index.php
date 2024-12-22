<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grab Free Pi Coins</title>
    <link rel="stylesheet" href="styles.css">
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

    <section id="home" class="home-section">
        <div class="home-content">
            <h2>Claim Free Pi Coins</h2>
            <p>Watch a video to claim your free Pi coins.</p>
            <div class="video-preview">
                <img src="./thumbnail.jpg" alt="Video Preview" id="videoThumbnail">
            </div>
            <button id="watchAnimationBtn">Watch a video to Claim Free Pi Coins</button>
        </div>
    </section>

    <section id="features" class="features-section">
        <h2>Why Choose Pi Network?</h2>
        <div class="features-grid">
            <div class="feature-item">
                <img src="./accessibility.png" alt="Accessible to Everyone">
                <h3>Accessible to Everyone</h3>
                <p>With Pi Network, anyone can mine Pi coins using their mobile phone without any special equipment. <span>Start mining today!</span></p>
            </div>
            <div class="feature-item">
                <img src="./network.png" alt="Decentralized">
                <h3>Decentralized</h3>
                <p>Pi Network is based on blockchain technology, ensuring a decentralized and secure network. <span>Experience true decentralization.</span></p>
            </div>
            <div class="feature-item">
                <img src="./cyber-security.png" alt="Secure and Reliable">
                <h3>Secure and Reliable</h3>
                <p>Pi Network uses advanced cryptography to secure transactions and protect user privacy. <span>Your security is our priority.</span></p>
            </div>
            <div class="feature-item">
                <img src="./community.png" alt="Join a Thriving Community">
                <h3>Join a Thriving Community</h3>
                <p>Become part of a global community of pioneers working together to build the future of digital currency. <span>Join us today!</span></p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Free Pi Coins. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('watchAnimationBtn').addEventListener('click', function() {
            window.location.href = 'claim.php';
        });

        document.getElementById('videoThumbnail').addEventListener('click', function() { window.location.href = 'claim.php'; });

        // You can set the video thumbnail here by providing the URL
        document.getElementById('videoThumbnail').src = './thumbnail.jpg';
    </script>
</body>
</html>
