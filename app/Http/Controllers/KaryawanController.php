<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
class KaryawanController extends Controller
{
    //
    public function redirectToCreateKaryawanPage()
    {
        // menangkap data dari form
    
        // mengirim data ke view
        return view('create_karyawan');
    }
    public function create_karyawan(Request $request)
    {
        // menangkap data dari form
        $validated = $request->validate([
            'karyawan_nama_input' => 'required|min:5|max:20',
            'karyawan_umur_input' => 'required|numeric|min:20',
            'karyawan_alamat_input' => 'required|min:10|max:40',
            'karyawan_no_telp' => 'required|regex:/^08[0-9]{7,11}$/'
        ]);
      
      Karyawan::create([
        'nama' => $request->karyawan_nama_input,
        'umur' => $request->karyawan_umur_input,
        'alamat' => $request->karyawan_alamat_input,
        'no_telp' => $request->karyawan_no_telp
        ]);
        // mengirim data ke view
    
      return  redirect('/home-1');
}
public function updateKaryawanPage(Request $request, $id)
{
    // menangkap data dari form
    $karyawan = Karyawan::findOrFail($id);
    
    // mengirim data ke view
    return view('update_karyawan', ["karyawan" => $karyawan]);
}
public function updateKaryawan(Request $request, $id)
{

    $validated = $request->validate([
        'karyawan_nama_input' => 'required|min:5|max:20',
        'karyawan_umur_input' => 'required|numeric|min:20',
        'karyawan_alamat_input' => 'required|min:10|max:40',
        'karyawan_no_telp' => 'required|regex:/^08[0-9]{7,11}$/'
    ]);
    // menangkap data dari form
    Karyawan::findOrFail($id)->update([
        'nama' => $request->karyawan_nama_input,
        'umur' => $request->karyawan_umur_input,
        'alamat' => $request->karyawan_alamat_input,
        'no_telp' => $request->karyawan_no_telp
    ]);
    
    // mengirim data ke view
    return redirect('/home-1');
}
public function deleteKaryawan($id)
{
    // menangkap data dari form
    // Karyawan::findOrFail($id)->delete();
    Karyawan::destroy($id);
    // mengirim data ke view
    return redirect('/home-1');
}
}