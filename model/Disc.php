<?php

include_once __DIR__ . '/DB.php';

class Disc extends DB
{

    function get()
    {
        return $this->select('SELECT * FROM `albums`');
    }

    function deleteById($id)
    {
        return $this->fire('DELETE FROM `albums` WHERE id = ?', [$id]);
    }

    function insert($conditions)
    {
        return $this->fire('
          INSERT INTO `albums` (`id`, `name`, `image`, `artist`, `date`, `duration`, `purchase_date`, `price`, `storage_code`, `room_number`, `rack_number`, `shelf_number`) 
          VALUES (null, :name, :image, :artist, :date, :duration, :purchase_date, :price, :storage_code, :room_number, :rack_number, :shelf_number)', $conditions);
    }

    function getById($id)
    {
        $result = $this->fire('SELECT * FROM `albums` WHERE id = ? LIMIT 1', [$id]);
        return $result->fetch();
    }
}