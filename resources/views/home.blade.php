<!DOCTYPE html>
<html>
<head>
    <title>Artsy.Pk</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background: linear-gradient(135deg, #ffdde1, #ee9ca7, #c2e9fb, #a1c4fd);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* NAVBAR */
        .nav {
            display: flex;
            justify-content: space-between;
            padding: 20px 40px;
            color: white;
            font-weight: bold;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        /* HERO */
        .hero {
            text-align: center;
            padding: 80px 20px 40px;
            color: white;
        }

        .hero h1 {
            font-size: 55px;
            text-shadow: 0 0 20px rgba(255,255,255,0.8);
            margin: 0;
        }

        .hero p {
            font-size: 18px;
            opacity: 0.9;
        }

        .btn {
            margin-top: 20px;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            background: white;
            color: #ff4fa3;
            font-weight: bold;
            cursor: pointer;
        }

        /* GALLERY */
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            padding: 40px;
        }

        .box {
            height: 180px;
            border-radius: 20px;
            background-size: cover;
            background-position: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .box:hover {
            transform: scale(1.05);
        }

        /* Floating effects */
        .sparkle, .heart {
            position: absolute;
            font-size: 20px;
            animation: float 6s linear infinite;
        }

        @keyframes float {
            0% { transform: translateY(100vh); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(-10vh); opacity: 0; }
        }

        audio {
            display: none;
        }
    </style>
</head>

<body>

<!-- MUSIC -->
<audio autoplay loop>
    <source src="https://cdn.pixabay.com/download/audio/2022/03/15/audio_c8b7f5c5f3.mp3?filename=soft-piano-ambient-110166.mp3" type="audio/mpeg">
</audio>

<!-- NAV -->
<div class="nav">
    <div>✨ Artsy.Pk</div>
    <div>
        <a href="#">Home</a>
        <a href="#">Gallery</a>
        <a href="#">Explore</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <h1>Welcome to Artsy.Pk ✨</h1>
    <p>A dreamy world of creativity, colors & imagination</p>
    <button class="btn">Enter Magic</button>
</div>

<!-- GALLERY -->
<div class="gallery">
    <div class="box" style="background-image:url('https://images.unsplash.com/photo-1520975916090-3105956dac38');"></div>
    <div class="box" style="background-image:url('https://images.unsplash.com/photo-1520975682031-a3f7f0a8f9a7');"></div>
    <div class="box" style="background-image:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee');"></div>
    <div class="box" style="background-image:url('https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d');"></div>
    <div class="box" style="background-image:url('https://images.unsplash.com/photo-1520975661595-6453be3f7070');"></div>
    <div class="box" style="background-image:url('https://images.unsplash.com/photo-1500534623283-312aade485b7');"></div>
</div>

<!-- FLOATING EFFECTS -->
<script>
    function createItem(type) {
        const el = document.createElement("div");
        el.className = type;
        el.innerHTML = type === "sparkle" ? "✨" : "💕";
        el.style.left = Math.random() * 100 + "vw";
        el.style.animationDuration = (3 + Math.random() * 5) + "s";
        document.body.appendChild(el);

        setTimeout(() => el.remove(), 6000);
    }

    setInterval(() => {
        createItem("sparkle");
        createItem("heart");
    }, 300);
</script>

</body>
</html>