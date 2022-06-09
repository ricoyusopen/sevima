<form action="/product/update" method="post">
    <input type="text" name="product_name" value="<?= $product->product_name;?>">
    <input type="text" name="product_price" value="<?= $product->product_price;?>">
    <input type="hidden" name="product_id" value="<?= $product->product_id;?>">
    <button type="submit">Update</button>
</form>