<!DOCTYPE html>
<html>
<head>
    <title>Add Product - Artsy.pk</title>
</head>
<body>

<h1>➕ Add Product</h1>

<form method="POST" action="/add-product" enctype="multipart/form-data">
    @csrf

    <label>Product Name</label><br>
    <input type="text" name="name" required><br><br>

    <label>Description</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Price</label><br>
    <input type="number" name="price" required><br><br>

    <label>Product Image</label><br>
    <input type="file" name="image" accept="image/*" required><br><br>

    <button type="submit">Save Product</button>
</form>

<br>
<a href="/">⬅ Back to Products</a>

</body>
</html>