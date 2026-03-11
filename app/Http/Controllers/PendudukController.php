<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Exports\PendudukExport;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller {
    // Menampilkan data dan fitur pencarian
    public function index(Request $request) {
        $query = Penduduk::query();

        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                  ->orWhere('pekerjaan', 'like', '%' . $request->search . '%');
        }

        $penduduks = $query->latest()->get();
        return view('penduduk.index', compact('penduduks'));
    }

    // Fitur Export CSV
    public function exportCSV() {
        return Excel::download(new PendudukExport, 'data_penduduk.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    // Fitur Export XLSX (Excel)
    public function exportExcel() {
        return Excel::download(new PendudukExport, 'data_penduduk.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
}
