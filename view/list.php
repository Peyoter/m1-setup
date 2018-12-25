<?php
include __DIR__ . '/layout/header.php';

$orderBy = $_GET['orderBy'] ?? '';
$orderType = $_GET['orderType'] ?? '';
$name = $_GET['name'] ?? '';
?>

    <div class="row">
        <div class="container">

            <form method="get" class="js-form-send" action="">

                <div class="form-row mb-20">

                    <input class="js-order-by" type="hidden" value="<?= ($orderBy) ? $orderBy : 'id' ?>" name="orderBy">

                    <input class="js-order-type" type="hidden" value="<?= ($orderType) ? $orderType : 'ASC' ?>"
                           name="orderType">

                    <div class="col">
                        <input class="form-control" name="name" placeholder="Название альбома" value="<?= $name ?>">
                    </div>

                    <div class="col">
                        <button class="btn btn-success">Фильтр</button>
                    </div>
                </div>

                <table class="table">
                    <tr>
                        <th><span class="js-order" data-value="id">id</span></th>
                        <th></th>
                        <th>Название альбома</th>
                        <th><span>Название артиста</span>
                        <th><span class="js-order" data-value="date">Год выпуска</span>
                        <th><span class="js-order" data-value="duration">Длительность</span>
                        <th><span class="js-order" data-value="purchase_date">Дата покупки</span>
                        <th><span class="js-order" data-value="price">Цена</span>
                        <th><span>Код</span>
                    </tr>
                    <tr>
                        <?php foreach ($discs

                        as $u): ?>
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><img src="<?= $u['image'] ?>" alt=""></td>
                        <td><?= $u['name'] ?></td>
                        <td><?= $u['artist'] ?></td>
                        <td><?= $u['date'] ?></td>
                        <td><?= $u['duration'] ?></td>
                        <td><?= $u['purchase_date'] ?></td>
                        <td><?= $u['price'] ?></td>
                        <td><?= $u['storage_code'] ?></td>
                        <td>
                            <a href="/disc/edit/<?= $u['id'] ?>" class="btn btn-primary">ред.</a>
                            <a href="/disc/delete/<?= $u['id'] ?>" class="btn btn-danger">x</a>
                        </td>
                    </tr>
                    <? endforeach; ?>
                    </tr>
                </table>
            </form>

            <a class="btn btn-success mb-20" href="/disc/create">Создать</a>

        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('.js-order').click(function () {
                orderByValue = $(this).data('value');
                orderTypeValue = ($('.js-order-type').val() == 'ASC') ? 'DESC' : 'ASC';
                $('.js-order-by').val(orderByValue);
                $('.js-order-type').val(orderTypeValue);
                $('.js-form-send').submit();
            });
        });
    </script>

<?php
include __DIR__ . '/layout/footer.php';
?>