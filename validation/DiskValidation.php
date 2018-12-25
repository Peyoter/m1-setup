<?php

class DiskValidation
{
    public static function isValid($data)
    {
        return $data;
    }

    public function rules()
    {
        return [
            'albums' => 'required',
            'image' => 'required',
            'artist' => 'required',
            'data' => 'required|date',
            'duration' => 'required|date',
            'purchase_date' => 'required|date',
            'price' => 'required|price',
            'storage_code' => 'required|price',
            'room_number' => 'required|integer',
            'rack_number' => 'required|integer',
            'shelf_number' => 'required|integer',
        ];
    }

    public function errors()
    {
        return false;
    }

    protected function required()
    {

    }

    protected function date()
    {

    }

    protected function price()
    {

    }

    protected function integer()
    {

    }
}
