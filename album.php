<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blog - About</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    background-image: url('images/background.jpg');
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

.hero {
    background-image: url('images/background.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 5rem 1rem;
}

.hero-content {
    background: rgba(0, 0, 0, 0.5);
    display: inline-block;
    padding: 2rem;
}

.cta {
    background-color: #ff7f50;
    color: #fff;
    padding: 0.5rem 1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta:hover {
    background-color: #ff4500;
}

.about {
    padding: 2rem;
    background: #f5f5f5;
    text-align: left;
    /* background-image: url('images/des4.jpg');
    background-size: cover; */
}

.about h1, .about h2 {
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

.about p {
    margin-bottom: 1rem;
    animation: fadeIn 1s ease-in-out;
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
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-content {
    padding: 1rem;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.photos {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
    animation: fadeIn 1s ease-in-out;
}

.photos img {
    width: 200px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.photos img:hover {
    transform: scale(1.1);
}

.videos {
    text-align: center;
    margin-top: 2rem;
    animation: fadeIn 1s ease-in-out;
}

.videos video {
    width: 80%;
    max-width: 600px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.videos video:hover {
    transform: scale(1.05);
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    margin-top: 2rem;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
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
        <section class="about">
            <h1>Album</h1>

            <div class="cards-container">
                <!-- Introduction -->
                <div class="card introduction">
                    <h2>Introduction</h2>
                    <p><strong>Brief Overview:</strong> Welcome to our travel blog where adventure travel, budget travel, luxury travel, and cultural experiences come alive. We aim to inspire you to explore the world, whether you are seeking thrilling adventures, budget-friendly tips, or luxurious getaways.</p>
                    
                </div>              
                <div class="card visual-elements">
                    <h2>Visual Elements</h2>
                    <div class="photos">
                        <img src="images/des4.jpg" alt="Author traveling">
                        <img src="images/des3.jpg" alt="Author at a landmark">
                        <img src="images/des2.jpg" alt="Author in nature">
                    </div>
                    <div class="videos">
                        <video controls>
                            <source src="images/video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Travel Blog. All Rights Reserved.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
