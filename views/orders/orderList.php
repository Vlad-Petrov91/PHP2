<h2>Заказ</h2>

<?php foreach ($order as $item) : ?>
    <div>
        <?= $item['name'] ?>
        price: <?= $item['price'] ?><br>

    </div>

<?php endforeach; ?>