<?php
namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CateroriesImport implements ToModel, WithProgressBar, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        return new Category($row);
    }

    public function headingRow(): int
    {
        return 1;
    }
}