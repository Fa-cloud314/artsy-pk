<!DOCTYPE html>
<html>
<head>
    <title>Artsy.pk</title>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #fce7f3, #e0f2fe, #fef9c3);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            padding: 20px 50px;
            background: rgba(255,255,255,0.5);
            backdrop-filter: blur(10px);
            animation: slideDown 0.8s ease;
        }

        .logo {
            font-size: 22px;
            font-weight: 600;
        }

        .btn {
            padding: 10px 16px;
            border-radius: 999px;
            background: linear-gradient(135deg,#f472b6,#60a5fa);
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        /* HERO */
        .hero {
            text-align: center;
            padding: 40px 20px;
            animation: fadeIn 1s ease;
        }

        .hero h1 {
            font-size: 40px;
            margin: 0;
        }

        .hero p {
            color: #555;
        }

        /* SEARCH BAR */
        .search {
            margin-top: 20px;
            padding: 12px 16px;
            width: 90%;
            max-width: 420px;
            border-radius: 999px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        /* GRID */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
            gap: 25px;
            padding: 40px;
        }

        /* CARD */
        .card {
            background: rgba(255,255,255,0.6);
            border-radius: 18px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);

            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.6s ease forwards;

            cursor: pointer;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 60px rgba(0,0,0,0.15);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .content {
            padding: 12px;
        }

        .name {
            font-weight: 600;
        }

        .price {
            color: green;
            font-weight: 600;
        }

        .card-link {
            text-decoration: none;
            color: inherit;
        }

        .hidden {
            display: none !important;
        }

        /* ANIMATIONS */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-60px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

    </style>
</head>

<body>

<div class="header">
    <div class="logo">✨ Artsy.pk</div>
    <a class="btn" href="/add-product">+ Add Magic</a>
</div>

<div class="hero">
    <h1>Handmade things worth keeping</h1>
    <p>A dreamy marketplace of art & imagination</p>

    <!-- SEARCH RESTORED -->
    <input type="text" id="search" class="search" placeholder="Search products...">
</div>

<div class="grid">

@foreach($products as $p)

<a href="/product/{{ $p->id }}" class="card-link search-item" data-name="{{ strtolower($p->name) }}">

    <div class="card">

        <img src="{{ asset($p->image) }}">

        <div class="content">
            <div class="name">{{ $p->name }}</div>
            <div class="price">PKR {{ $p->price }}</div>
        </div>

    </div>

</a>

@endforeach

</div>

<script>
const search = document.getElementById("search");
const items = document.querySelectorAll(".search-item");

search.addEventListener("input", function () {
    let value = this.value.toLowerCase();

    items.forEach(item => {
        let name = item.getAttribute("data-name");

        if (name.includes(value)) {
            item.classList.remove("hidden");
        } else {
            item.classList.add("hidden");
        }
    });
});
</script>

</body>
</html>