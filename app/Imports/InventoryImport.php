<?php

namespace App\Imports;

use App\Models\addInventory;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InventoryImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new addInventory([
            'users_id'     => session('user')[0]->id,
            'rma_id'     => 1,
            'serial'     => $row['serial'],
            'model'     => $row['model'],
            'issue'     => $row['issue'],
            'sale_price'     => $row['price'],
        ]);
    }
}
