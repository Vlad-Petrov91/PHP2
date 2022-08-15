<?php
if ($isAuth) : ?>
    Здравствуйте <?= $userName ?>
    <?php if ($isAdmin) : ?>
        <a href="/orders">Заказы:</a>
    <?php endif; ?>
    <a href="/auth/logout">Выход</a><br>

<?php else : ?>
    <form action="/auth/login" method="POST">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="pass" placeholder="password">
        <input type="submit" name="submit" placeholder="Войти">
    </form>
<?php endif; ?><br>
<a href="/">Главная</a>
<a href="/product/catalog">Каталог</a>
<a href="/basket">Корзина(<span id="count"><?= $count ?></span>)</a><br>