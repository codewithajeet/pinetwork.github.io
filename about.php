<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Pi Network</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
            box-sizing: border-box;
        }

        header, footer {
            background-color: #5E5DFF;
            color: #FFFFFF;
            text-align: center;
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1, footer p {
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .content {
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 40px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .content h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #5E5DFF;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .content p {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .content ul {
            list-style-type: disc;
            margin-left: 20px;
            margin-bottom: 30px;
        }

        .content ul li {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .cta-section {
            background: #5E5DFF;
            color: #FFFFFF;
            padding: 40px 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 50px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-section h3 {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 25px;
        }

        .cta-btn {
            background-color: #FFB800;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #FF9900;
        }

        .founders-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 50px;
        }

        .founder-card {
            background: #f1f1f1;
            padding: 20px;
            border-radius: 15px;
            flex: 1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .founder-card h4 {
            font-size: 1.5rem;
            color: #5E5DFF;
            margin-bottom: 10px;
        }

        .founder-card p {
            font-size: 1rem;
            color: #555;
        }

        .footer-info {
            text-align: center;
            padding: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .cta-section {
                padding: 30px 15px;
            }

            .content {
                padding: 30px 20px;
            }

            .founders-section {
                flex-direction: column;
            }

            .founder-card {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 480px) {
            .cta-btn {
                font-size: 1rem;
                padding: 12px 25px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Pi Network</h1>
</header>

<div class="container">
    <div class="content">
        <h2>About Pi Network</h2>
        <p><strong>Pi Network</strong> is a community of tens of millions of humans mining Pi cryptocurrency to use and build the Web3 app ecosystem. This blockchain network relies on its community of Pioneers and rewards them through an innovative mobile mining mechanism for their diverse contributions and digital citizenship in a clear, meritocratic, and decentralized way.</p>
        <p>Pi Network was officially launched on March 14, 2019 (Pi Day), with growing community participation ever since. Today, the 35+ full-time Core Team members around the world strive to enable a large, passionate, and globally distributed community to make decentralized efforts toward a common purpose.</p>

        <h3>Our Vision</h3>
        <p>Our goal is to create a cryptocurrency that is accessible to everyone, everywhere, without the need for expensive hardware or energy consumption. The Pi Network aims to empower users to participate in building a new decentralized world through secure and sustainable solutions.</p>

        <h3>Key Features of Pi Network</h3>
        <ul>
            <li><strong>Decentralized:</strong> Pi is built on a decentralized blockchain, providing transparency and security to users.</li>
            <li><strong>Eco-Friendly:</strong> Unlike traditional mining, Pi uses a mobile mining mechanism that doesn’t drain battery life or consume excessive resources.</li>
            <li><strong>Accessible:</strong> With just a smartphone, anyone can participate in Pi’s network, regardless of their location or resources.</li>
        </ul>

        <div class="cta-section">
            <h3>Join the Pi Network Today!</h3>
            <p>Become a part of the world’s largest decentralized digital currency community. Be part of something big and take part in the future of blockchain technology!</p>
            <button class="cta-btn" onclick="window.location.href='https://minepi.com/'">Join Pi Network</button>
        </div>

        <h3>The Founders</h3>
        <div class="founders-section">
            <div class="founder-card">
                <h4>Dr. Nicolas Kokkalis</h4>
                <p>Dr. Kokkalis holds a PhD from Stanford University and has extensive expertise in distributed systems and human-computer interaction. He is one of the core team members and is the driving force behind Pi's blockchain development.</p>
            </div>
            <div class="founder-card">
                <h4>Dr. Chengdiao Fan</h4>
                <p>Dr. Fan holds a PhD in Anthropology and has been involved in social computing, bridging the gap between human interaction and decentralized technologies. She works on building and expanding Pi’s global community.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Pi Network. All rights reserved.</p>
    <div class="footer-info">
        <p>Building a decentralized world for a fairer future.</p>
    </div>
</footer>

</body>
</html>
