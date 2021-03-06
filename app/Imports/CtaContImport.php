<?php

namespace App\Imports;

use App\Cta_cont;
use Maatwebsite\Excel\Concerns\{ToModel, WithCustomCsvSettings, WithHeadingRow};

class CtaContImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        $data = new Cta_cont([
            //$bs = (double)(number_format((double)$row['total_bs'], 3, '.', ',')),
            //$ss = (float)(number_format((float)$row['total'], 3, '.', ',')),
            'id_ctacontable'  => $row['id_ctacontable'],
            'cod_ctacontable' => $row['nodo'],
            'nomctacontable' => $row['ctacontable'],
            'mo_ctacontable_bs' => $row['total_bs'],
            'mo_ctacontable_ss' => $row['total_ss']
        ]);
        return $data;
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ";"
        ];
    }
}
