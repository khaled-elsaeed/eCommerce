<?php
function renderBreadcrumb($title, $links = []) {
?>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3><?php echo strtoupper($title); ?></h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php foreach ($links as $link): ?>
                        <?php if (isset($link['url'])): ?>
                            <li><a href="<?php echo $link['url']; ?>"><?php echo $link['text']; ?></a></li>
                        <?php else: ?>
                            <li class="active"><?php echo $link['text']; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
<?php
}
?> 