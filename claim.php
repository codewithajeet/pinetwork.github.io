<?php
$coins = rand(20, 50);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Your Pi Coins</title>
    <link rel="stylesheet" href="claim_styles.css">
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

    <section id="video-section" class="video-section">
        <h2>Watch This Video to Claim Your Pi Coins</h2>
        <div class="video-container">
            <iframe id="videoPlayer" width="560" height="315" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div id="countdown">
            Please wait for <span id="timer">15</span> seconds.
            <div class="spinner"></div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Free Pi Coins. All rights reserved.</p>
    </footer>

    <script>
        // Array of YouTube video URLs
        const videoUrls = [
            'https://www.youtube.com/embed/iUUxxIE996A?autoplay=1&controls=0&modestbranding=1&rel=0&showinfo=0',
            'https://www.youtube.com/embed/30y2y6m5Rnc?autoplay=1&controls=0&modestbranding=1&rel=0&showinfo=0',
            'https://www.youtube.com/embed/BgB4VNpRcG0?autoplay=1&controls=0&modestbranding=1&rel=0&showinfo=0',
            'https://www.youtube.com/embed/J7L2Qqi9dOM?autoplay=1&controls=0&modestbranding=1&rel=0&showinfo=0',
            'https://www.youtube.com/embed/G6GaDPp50fg?autoplay=1&controls=0&modestbranding=1&rel=0&showinfo=0'
        ];

        // Function to get a random video URL
        function getRandomVideoUrl() {
            const randomIndex = Math.floor(Math.random() * videoUrls.length);
            return videoUrls[randomIndex];
        }

        // Set the video URL when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            const videoPlayer = document.getElementById('videoPlayer');
            videoPlayer.src = getRandomVideoUrl();

            let countdown = 15;
            const timer = document.getElementById('timer');
            const interval = setInterval(() => {
                countdown--;
                timer.textContent = countdown;
                if (countdown === 0) {
                    clearInterval(interval);
                    window.location.href = 'form.php?coins=<?php echo $coins; ?>';
                }
            }, 1000);
        });
    </script>
</body>
</html>
