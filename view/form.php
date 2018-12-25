<?php
include __DIR__ . '/layout/header.php';
?>

<? if ($errors): ?>
    Ошибка валидации
<? endif ?>

    <div class="row">
        <div class="container">

            <form action="/disc/store" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Название альбома</label>
                    <input class="form-control" name="name" value="<?= (isset($data['name'])) ? $data['name'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>Группа</label>
                    <input class="form-control" name="artist"
                           value="<?= (isset($data['artist'])) ? $data['artist'] : '' ?>">
                </div>
                <div class="form-group">
                    <label>Картинка</label>
                    <input type="text" name="image">
                </div>

                <div class="form-group">
                    <label>Дата альбома (YYYY-MM-DD)</label>
                    <input class="form-control" name="date" value="<?= (isset($data['date'])) ? $data['date'] : '' ?>">
                </div>

                <div class="form-group">
                    <label>Время мин</label>
                    <input class="form-control" name="duration"
                           value="<?= (isset($data['duration'])) ? $data['duration'] : '' ?>">
                </div>

                <div class="form-group">
                    <label>Дата приобретения (YYYY-MM-DD)</label>
                    <input class="form-control" name="purchase_date"
                           value="<?= (isset($data['purchase_date'])) ? $data['purchase_date'] : '' ?>">
                </div>

                <div class="form-group">
                    <label>Стоимость покупки</label>
                    <input class="form-control" name="price"
                           value="<?= (isset($data['price'])) ? $data['price'] : '' ?>">
                </div>

                <div class="form-group">
                    <label>Номер комнаты</label>
                    <input class="form-control" name="room_number"
                           value="<?= (isset($data['room_number'])) ? $data['room_number'] : '' ?>">
                </div>

                <div class="form-group">
                    <label>Номер стойки</label>
                    <input class="form-control" name="rack_number"
                           value="<?= (isset($data['rack_number'])) ? $data['rack_number'] : '' ?>">
                </div>

                <div class="form-group">
                    <label>Номер полки</label>
                    <input class="form-control" name="shelf_number"
                           value="<?= (isset($data['shelf_number'])) ? $data['shelf_number'] : '' ?>">
                </div>

                <button type="Сохранить" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>


<?php
include __DIR__ . '/layout/footer.php';
?>