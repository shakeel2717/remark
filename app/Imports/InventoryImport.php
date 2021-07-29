<?php

namespace App\Imports;

use App\Models\addInventory;
use Maatwebsite\Excel\Concerns\ToModel;

class InventoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new addInventory([
            'serial' => $row[0],
            'model' => $row[1],
            'issue' => $row[2],
            'saleprice' => $row[3],
        ]);
    }
}
