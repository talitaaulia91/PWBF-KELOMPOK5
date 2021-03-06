<?php

namespace App\Http\Controllers;

use App\Models\Kemajuan;
use Illuminate\Http\Request;
use App\Models\Detail_kemajuan;
use App\Models\Bab;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DetailKemajuanController extends Controller
{
    public function index($id)
    {
        return view('dashboard.show.tabelDetailKemajuan', [
            'detail_kemajuan'   => Detail_Kemajuan::where('id_kemajuan', $id)->with('bab')->get(),
            'santri'            => Kemajuan::find($id)->santri->nama,
            'santriid'          => Kemajuan::find($id)->santri->id,
            'id'                => Kemajuan::find($id)->id,
        ]);
    }



    public function createDetailKemajuan($id)
    {
        return view('dashboard.create.createDetailKemajuan', [
            'bab'        => Bab::all(),
            'kemajuan'   => Kemajuan::find($id),
            "title"      => $id
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_kemajuan'   => 'required',
            'id_bab'        => 'required',
            'keterangan'    => 'required'
        ]);

        Detail_kemajuan::create($validatedData);

        $request->session()->flash('success','Kemajuan Berhasil Ditambahkan!');

        return redirect('/kemajuan');
    }






    public function edit($id) {
        return view('dashboard.edit.editDetailKemajuan', [
            'detail_kemajuan'  => Detail_kemajuan::find($id),
            'bab'              => Bab::all(),
            "title"            => $id
           
        ]);
    }





    public function update(Request $request, Detail_kemajuan $detail_kemajuan){
        DB::table('detail_kemajuan')->where('id',$request->id)->update([
            'id_bab'          => $request->id_bab,
            'keterangan'      => $request->keterangan
        ]);

        return redirect('/kemajuan');
    }







    public function destroy($id)
    {
       Detail_kemajuan::find($id)->delete();

        return redirect('/kemajuan')->with('delete_detail_kemajuan','Delete success!');
    }
}
