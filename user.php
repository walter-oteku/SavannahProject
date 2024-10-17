<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blog - Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
            
        }

        header {
            background-color: #333;
            padding: 1rem 0;
        }

        header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            margin: 0 1rem;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 2rem;
            text-align: center;
        }

        .cards-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 2rem 0;
        }

        .card {
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 1rem;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 90%;
            max-width: 600px;
            padding: 2rem;
        }

        .card h2 {
            margin-top: 0;
        }

        .card input,
        .card textarea {
            width: 100%;
            padding: 0.5rem;
            margin: 0.5rem 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        .card input:focus,
        .card textarea:focus {
            border-color: #ff7f50;
        }

        .card button {
            background-color: #ff7f50;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card button:hover {
            background-color: #ff4500;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home1.php">Home</a></li>
                <li><a href="photo.php">Photo</a></li>
                <li><a href="album.php">Album</a></li>
                <li><a href="user.php">User</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Contact Us</h1>
        <div class="cards-container">
            <div class="card">
                <h2>Get in Touch</h2>
                <p>If you have any questions, comments, or just want to say hello, please don't hesitate to reach out to us. We'd love to hear from you!</p>
                <form>
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="card">
                <h2>Follow Us</h2>
                <p>Stay connected with us through social media. Follow us for the latest updates and travel inspiration!</p>
                <div class="social-links">
                    <a href="#"><img src="images/facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="images/instagram-icon.png" alt="Instagram"></a>
                    <a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Travel Blog. All Rights Reserved.</p>
    </footer>
</body>
</html>
