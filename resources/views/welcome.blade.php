<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GlowSkin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fafafa;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            text-align: center;
            padding: 50px 0;
        }
        header h1 {
            font-size: 3rem;
            font-weight: 600;
            color: #ff6f61;
        }
        header p {
            font-size: 1.2rem;
            color: #666;
        }
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }
        .hero img {
            max-width: 50%;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .hero-text {
            max-width: 45%;
        }
        .hero-text h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
        }
        .hero-text p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
        }
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #ff6f61;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #ff4a3d;
        }
        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 100px;
        }
        .feature {
            text-align: center;
            max-width: 30%;
        }
        .feature img {
            max-width: 100%;
            border-radius: 10px;
        }
        .feature h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-top: 20px;
        }
        .feature p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }
        footer {
            text-align: center;
            padding: 20px 0; 
            color: #0b0b0b;
            margin-top: 100px;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to GlowSkin</h1>
            <p>Your journey to radiant skin starts here.</p>
        </header>

        <div class="hero">
            <img src="https://placehold.co/600x400/EEE/31343C" alt="Skincare Products">
            <div class="hero-text">
                <h2>Discover Your Glow</h2>
                <p>Our premium skincare products are designed to nourish, protect, and rejuvenate your skin. Experience the difference with GlowSkin.</p>
                <a href="#" class="cta-button">Shop Now</a>
            </div>
        </div>

        <div class="features">
            <div class="feature">
                <img src="https://placehold.co/300x200/EEE/31343C" alt="Natural Ingredients">
                <h3>Natural Ingredients</h3>
                <p>Formulated with the finest natural ingredients to provide the best care for your skin.</p>
            </div>
            <div class="feature">
                <img src="https://placehold.co/300x200/EEE/31343C" alt="Dermatologist Tested">
                <h3>Dermatologist Tested</h3>
                <p>All our products are rigorously tested to ensure safety and effectiveness.</p>
            </div>
            <div class="feature">
                <img src="https://placehold.co/300x200/EEE/31343C" alt="Cruelty-Free">
                <h3>Cruelty-Free</h3>
                <p>We are committed to cruelty-free practices and never test on animals.</p>
            </div>
        </div>

        <footer>
            <p>&copy; 2023 GlowSkin. All rights reserved.</p>
        </footer>
    </div>
</body>
