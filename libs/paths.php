<?php
class paths{

    public static function requirelvl2model(string $folder,string $model)
    {
        require "../view/$folder/$model.php";
    }
    public static function requirelvl1model($model)
    {
        require "../view/$model.php";
    }

    public static function requirelvl3model(string $folder1,string $folder2,string $model)
    {
        require "../view/$folder1/$folder2/$model.php";
    }
}