<h2>Корзина</h2>
<div style="display: flex;">
    <?php foreach ($basket as $item) : ?>
        <div id="<?= $item['basket_id'] ?>" style="width: 252px; border: 1px solid black;">
            <?= $item['name'] ?><br>
            <img src="../img/<?= $item['img'] ?>" alt="<?= $item['img'] ?>"><br>
            price: <?= $item['price'] ?><br>

            <button data-id="<?= $item['basket_id'] ?>" class="delete">Удалить</button>
        </div>


    <?php endforeach; ?>



</div>
<h3 class="orderStatus">Оформление заказа</h3>
<form action="/orders/add" method="POST">
    <input type="text" name="name" placeholder="name">
    <input type="number" name="phone" placeholder="phone">
    <button data-id="<?= $item['session_id'] ?>" class="ordering">Оформить</button>

</form>



<script>
    let buttons = document.querySelectorAll('.delete');
    buttons.forEach((el) => {
        el.addEventListener('click', () => {
            let id = el.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/basket/delete/?id=' + id);
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;
                    document.getElementById(id).remove();

                }
            )();
        })
    })
</script>