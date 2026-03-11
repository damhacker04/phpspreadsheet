<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendudukExport implements FromCollection, WithHeadings {
    public function collection() {
        return Penduduk::select('nama', 'usia', 'alamat', 'pekerjaan')->get();
    }

    public function headings(): array {
        return ['Nama', 'Usia', 'Alamat', 'Pekerjaan'];
    }
}
