<!-- Featured Product Component -->
<?php include_once 'components/product/ProductCard.php'; ?>
<div class="product-area bg-image-1 pt-100 pb-95">
    <div class="container">
        <div class="featured-product-active hot-flower owl-carousel product-nav">
            <?php 
            // Featured product data - in a real application, this would come from a database
            $featuredProducts = [
                [
                    'imageUrl' => 'assets/img/product/product-1.jpg',
                    'productName' => 'Nature Close Tea',
                    'price' => 100.00,
                    'oldPrice' => 120.00,
                    'productUrl' => 'product-details.html',
                    'discount' => '-20%'
                ],
                [
                    'imageUrl' => 'assets/img/product/product-2.jpg',
                    'productName' => 'Pink wave Cup',
                    'price' => 100.00,
                    'oldPrice' => 120.00,
                    'productUrl' => 'product-details.html'
                ],
                [
                    'imageUrl' => 'assets/img/product/product-3.jpg',
                    'productName' => 'Tea and Chai',
                    'price' => 100.00,
                    'oldPrice' => 120.00,
                    'productUrl' => 'product-details.html',
                    'discount' => '-50%'
                ],
                [
                    'imageUrl' => 'assets/img/product/product-4.jpg',
                    'productName' => 'Pearly Everlasting',
                    'price' => 100.00,
                    'oldPrice' => 120.00,
                    'productUrl' => 'product-details.html'
                ],
                [
                    'imageUrl' => 'assets/img/product/product-5.jpg',
                    'productName' => 'Que herbal Tea',
                    'price' => 100.00,
                    'oldPrice' => 120.00,
                    'productUrl' => 'product-details.html',
                    'discount' => '-30%'
                ]
            ];
            
            // Render each product card
            foreach ($featuredProducts as $product) {
                renderProductCard(
                    $product['imageUrl'],
                    $product['productName'],
                    $product['price'],
                    $product['oldPrice'],
                    $product['productUrl'],
                    isset($product['discount']) ? $product['discount'] : null
                );
            }
            ?>
        </div>
    </div>
</div>
<!-- Product Area End --> 