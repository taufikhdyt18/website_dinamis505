<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sahanime</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #4285F4, #E100FF);
            color: #fff;
            padding: 1.5em;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 0.2em;
        }

        header p {
            font-size: 1.2em;
            font-style: italic;
        }

        .intro {
            padding: 2em;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .intro h2 {
            font-size: 2em;
            color: #E100FF;
            margin-bottom: 1em;
        }

        .intro p {
            font-size: 1.1em;
            color: #000000;
            line-height: 1.8;
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin: 2em auto;
            padding: 1em;
            max-width: 1000px;
            gap: 1em;
            flex-wrap: wrap;
        }

        .feature-item {
            background: #fff;
            border: 1px solid #ddd;
            padding: 1em;
            border-radius: 8px;
            width: 30%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .feature-item h3 {
            color: #333;
            font-size: 1.2em;
            margin-bottom: 0.5em;
        }

        .feature-item p {
            color: #777;
            font-size: 1em;
        }

        .slider {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin: 2em auto;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            overflow: hidden;
        }

        .slide img {
            width: 100%;
            height: auto; 
            object-fit: cover; 
            border-radius: 8px; 
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1.5em;
            margin-top: 3em;
            font-size: 0.9em;
            box-shadow: 0 -4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang</h1>
        <e>Jelajahi Series Anime Terbaru Kami</p>
    </header>

    <div class="intro">
        <h2>JUJUTSU KAISEN S2</h2>
        <p>Episode 1 - 25</p>
    </div>

    <div >
        <div class="gambar" style="width: 200px; height: auto; margin: 0 auto;">
            
                <img src="https://i.pinimg.com/736x/92/fd/ed/92fdedc559929a6c3a1b8f49f1058ccb.jpg" alt="Jujutsu Kaisen S2" style="width: 200px; height: auto;" class="justify-content-center">
            
        </div>
    </div>

    <section class="features">
        <div class="feature-item">
            <h3><<< Sebelumnya</h3>
            <p></p>
        </div>
        <div class="feature-item">
            <h3>Daftar Episode</h3>
            <p></p>
        </div>
        <div class="feature-item">
            <h3>Selanjutnya >>></h3>
            <p></p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Pemrograman Web 1. All rights reserved..</p>
    </footer>

    <script>
        let index = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;

        function showNextSlide() {
            index = (index + 1) % totalSlides;
            slides.style.transform = translateX(-${index * 100}%);
        }

        setInterval(showNextSlide, 3000);
    </script>
</body>
</html>