<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #F4F4F4;
        margin: 0;
        padding: 0;
        color: #4A4A4A;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100vh;
        text-align: center;
    }

    header, footer {
        background-color: #5E5DFF;
        color: #FFFFFF;
        text-align: center;
        padding: 10px 0;
    }

    .message-container {
        background: #FFFFFF;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 30px;
        max-width: 500px;
        margin: auto; /* Centering the content */
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .message-container h2 {
        color: #5E5DFF;
        margin-bottom: 15px;
    }

    footer p {
        margin: 0;
    }
</style>

    <script>
        // Redirect to the main page after 3 seconds
        setTimeout(() => {
            window.location.href = "index.php";
        }, 3000);
    </script>
</head>
<body>
    <header>
        <div>
            <h1>Self Verification</h1>
        </div>
    </header>

    <div class="message-container">
        <h2>Thank You</h2>
        <p>Your information has been received. We will let you know once verification is completed.</p>
    </div>

    <footer>
        <p>&copy; 2024 Free Pi Coins. All rights reserved.</p>
    </footer>
</body>
</html>
