<form class="w3-container" action="../widgets/add_product.php" method="POST" enctype="multipart/form-data">
    <div class="w3-section">
        <label>Name</label>
        <input class="w3-input" type="text" name="name" required>
    </div>
    <div class="w3-section">
        <label>Original Price</label>
        <input class="w3-input" type="text" name="original_price" required>
    </div>
    <div class="w3-section">
        <label>Category</label>
        <select class="w3-select" name="category" required>
            <option value="Drinks">Drinks</option>
            <option value="Food">Food</option>
        </select>
    </div>
    <div class="w3-section">
        <label>Image</label>
        <input class="w3-input" type="file" name="image" required>
    </div>
    <button type="submit" class="w3-margin-bottom w3-button w3-round-large w3-center w3-theme-up1 w3-hover-theme-up1">Add Product</button>
</form>
