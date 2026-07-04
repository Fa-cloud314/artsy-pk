<!DOCTYPE html>
<html>
<head>
    <title>{{ $product->name }} - Artsy.pk</title>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #fce7f3, #e0f2fe, #fef9c3);
            min-height: 100vh;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 40px;
        }

        .back {
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            color: #333;
        }

        .card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            animation: fadeUp 0.6s ease;
        }

        .image {
            width: 100%;
            height: 100%;
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            padding: 30px;
        }

        .name {
            font-size: 28px;
            font-weight: 600;
        }

        .price {
            font-size: 20px;
            color: green;
            margin: 10px 0;
            font-weight: 600;
        }

        .desc {
            color: #555;
            margin-top: 10px;
            line-height: 1.6;
        }

        .btn {
            margin-top: 20px;
            display: inline-block;
            padding: 12px 18px;
            border-radius: 999px;
            background: linear-gradient(135deg,#f472b6,#60a5fa);
            color: white;
            text-decoration: none;
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

        @media(max-width: 768px) {
            .card {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="/" class="back">← Back to shop</a>

    <div class="card">

        <div class="image">
            <img src="{{ asset($product->image) }}">
        </div>

        <div class="content">
            <div class="name">{{ $product->name }}</div>

            <div class="price">PKR {{ $product->price }}</div>

            <div class="desc">
                {{ $product->description }}
            </div>

            <a href="/" class="btn">Continue Shopping</a>
        </div>

    </div>

</div>

</body>
</html>