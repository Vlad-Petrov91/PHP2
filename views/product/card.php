<h2>Товар</h2>

<div>
    <?= $product->name ?><br>
    <img src="/img/<?= $product->img ?>" alt="<?= $product->img ?>">
    <p><?= $product->description ?></p>
    price: <?= $product->price ?><br>
    <a href="/?c=product&a=card&id=<?= $product->id ?>"><?= $product->name ?></a>
    <button>Купить</button>
</div>