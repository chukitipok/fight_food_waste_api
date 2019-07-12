<?php
/**
 * Created by PhpStorm.
 * User: alex_rdgu
 * Date: 2019-05-12
 * Time: 00:57
 */

namespace App\Table;

use AppFactory;
use Core\Table\Table;

class RaceTable extends Table
{
    public function createRace($type, $vehicle_taken_at, $truck)
    {
        if ($this->create([
            'type' => $type,

            'status' => "active",

            'vehicle_taken_at' => $vehicle_taken_at,
            //                   'status' => $_POST['status'],
            'truck' => $truck,
            //                   'truck' => $_POST['truck'],
        ])) return AppFactory::getInstance()->getDb()->lastInsertId();
        else return false;
    }

    public function updateDate($id, $fields)
    {

        return parent::update($id, $fields); // TODO: Change the autogenerated stub
    }
}