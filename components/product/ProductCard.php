<?php
/**
 * ProductCard Component
 * 
 * @param string $imageUrl - Image URL of the product
 * @param string $productName - Name of the product
 * @param float $price - Current price of the product
 * @param float $oldPrice - Old price of the product (for discounts)
 * @param string $productUrl - URL to product details page
 * @param string $discount - Discount percentage (optional)
 */

function renderProductCard($imageUrl, $productName, $price, $oldPrice, $productUrl, $discount = null) {
?>
<div class="product-wrapper">
    <div class="product-img">
        <a href="<?php echo $productUrl; ?>">
            <img alt="<?php echo $productName; ?>" src="<?php echo $imageUrl; ?>">
        </a>
        <?php if($discount): ?>
        <span><?php echo $discount; ?></span>
        <?php endif; ?>
        <div class="product-action">
            <a class="action-wishlist" href="#" title="Wishlist">
                <i class="ion-android-favorite-outline"></i>
            </a>
            <a class="action-cart" href="#" title="Add To Cart">
                <i class="ion-ios-shuffle-strong"></i>
            </a>
            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                <i class="ion-ios-search-strong"></i>
            </a>
        </div>
    </div>
    <div class="product-content text-left">
        <div class="product-hover-style">
            <div class="product-title">
                <h4>
                    <a href="<?php echo $productUrl; ?>"><?php echo $productName; ?></a>
                </h4>
            </div>
            <div class="cart-hover">
                <h4><a href="<?php echo $productUrl; ?>">+ Add to cart</a></h4>
            </div>
        </div>
        <div class="product-price-wrapper">
            <span>$<?php echo number_format($price, 2); ?> -</span>
            <span class="product-price-old">$<?php echo number_format($oldPrice, 2); ?> </span>
        </div>
    </div>
</div>
<?php
}
?> 