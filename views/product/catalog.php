<h2>Каталог</h2>
<div style="display: flex;">
    <?php foreach ($catalog as $item) : ?>
        <div style="width: 252px; border: 1px solid black;">
            <?= $item['name'] ?><br>
            <img src="../img/<?= $item['img'] ?>" alt="<?= $item['img'] ?>"><br>
            price: <?= $item['price'] ?><br>
            <a href="/product/card/?id=<?= $item['id'] ?>"><?= $item['name'] ?></a>
            <button class="buy" data-id="<?= $item['id'] ?>">Купить</button>
        </div>

    <?php endforeach; ?>
</div>


<a href="/product/catalog/?page=<?= $page ?>">Еще</a>

<script>
    let buttons = document.querySelectorAll('.buy');
    buttons.forEach((el) => {
        el.addEventListener('click', () => {
            let id = el.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/basket/add/?id=' + id);
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;
                }
            )();
        })
    })
</script>