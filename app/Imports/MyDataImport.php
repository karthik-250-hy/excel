<?php
namespace App\Imports;

use App\Models\MyData;
use Maatwebsite\Excel\Concerns\ToModel;

class MyDataImport implements ToModel
{
    public function model(array $row)
    {
        return new MyData([
            'name'  => $row[0], // Adjust based on Excel column index
            'age'   => $row[1],
            'email' => $row[2],
            'phone' => $row[3],
        ]);
    }
}


?>