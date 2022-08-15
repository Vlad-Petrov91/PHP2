<h3>Список заказов:</h3>

<?php foreach ($orders as $item) : ?>
    <div>
        <form method="POST" action="/orders/view/?session_id=<?= $item['session_id'] ?>">
            № <?= $item['id'] ?> |
            Имя <?= $item['name'] ?> |
            Тел. <?= $item['phone'] ?> |


            <button type="submit">Детали заказа</button>
        </form>

    </div>
<?php endforeach; ?>