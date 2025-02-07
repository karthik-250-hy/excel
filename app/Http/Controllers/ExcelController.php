<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MyDataImport;
use App\Models\MyData;

class ExcelController extends Controller
{
    public function index()
    {
        $data = MyData::all();
        return view('upload', compact('data'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new MyDataImport, $request->file('file'));

        return redirect()->back()->with('success', 'Excel data imported successfully!');
    }
}

?>