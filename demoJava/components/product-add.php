<div class="product-add">
    <form action="add-product.php" method="post" enctype="multipart/form-data">
        <label for="title">Tên Sản Phẩm:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" required><br><br>

        <label for="discounted_price">Giá Khuyến Mãi:</label>
        <input type="number" id="discounted_price" name="discounted_price"><br><br>

        <label for="description">Mô Tả:</label>
        <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>

        <label for="discount_percentage">Phần Trăm Khuyến Mãi:</label>
        <input type="number" id="discount_percentage" name="discount_percentage"><br><br>

        <label for="category_id">Mã Danh Mục:</label>
        <input type="number" id="category_id" name="category_id" required><br><br>
        
        <label for="cover_image">Ảnh Bìa:</label>
        <input type="file" id="cover_image" name="cover_image"><br><br>

        <label for="image_urls">Ảnh Sản Phẩm Khác (có thể chọn nhiều ảnh):</label>
        <input type="file" id="image_urls" name="image_urls[]" multiple><br><br>

        <input type="submit" value="Thêm Sản Phẩm">
    </form>
</div>
