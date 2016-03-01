<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use App\STNK;
use Carbon;
use PDF;
use Yajra\Datatables\Datatables;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class STNKController extends Controller
{
    function index(){
      $data['active'] = 'stnk';
      $data['subactive'] = 'list';
      return view('console.stnk.list',$data);
    }

    function data(){
      $stnk = STNK::all();
      return Datatables::of($stnk)->addColumn('action', function($stnk){
      return '<div class="btn-group">'.
      '<button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle" type="button">Default <span class="caret"></span></button>'.
      '<ul role="menu" class="dropdown-menu">'.
      '<li><a href="'.url('/console/stnk/'.$stnk->id.'').'">Details</a></li>'.
      '<li><a href="'.url('/console/stnk/'.$stnk->id.'/print').'">Print</a></li>'.
      '<li><a href="'.url('/console/stnk/'.$stnk->id.'/edit').'">Edit</a></li>'.
      '<li><a onclick="popupdelete('.$stnk->id.')">Delete</a></li></ul></div>';
    })->make(true);
    }

    function create(){
      $data['active'] = 'stnk';
      $data['subactive'] = 'new';
      return view('console.stnk.new',$data);
    }

    function edit($id){
      $data['active'] = 'stnk';
      $data['subactive'] = 'list';
      $data['stnk'] = STNK::find($id);
      return view('console.stnk.edit',$data);
    }

    function store(Request $request){
        $stnk = new STNK;
        $stnk->nomor_polisi = $request->get('nomor_polisi');
        $stnk->nama_pemilik = $request->get('nama_pemilik');
        $stnk->alamat = $request->get('alamat');
        $stnk->type = $request->get('type');
        $stnk->jenis = $request->get('jenis');
        $stnk->tahun_pembuatan = $request->get('tahun_pembuatan');
        $stnk->tahun_perakitan = $request->get('tahun_perakitan');
        $stnk->isi_silinder = $request->get('isi_silinder');
        $stnk->no_rangka = $request->get('no_rangka');
        $stnk->tgl_faktur = Carbon::parse($request->get('tgl_faktur'));
        $stnk->bahan_bakar = $request->get('bahan_bakar');
        $stnk->warna_tnkb = $request->get('warna_tnkb');
        $stnk->tahun_registrasi = $request->get('tahun_registrasi');
        $stnk->nomor_bpkb = $request->get('nomor_bpkb');
        $stnk->berlaku_sampai = Carbon::parse($request->get('berlaku_sampai'));
        $stnk->save();
        return redirect('console/stnk');
    }

    function update(Request $request,$id){
        $stnk = STNK::find($id);
        $stnk->nomor_polisi = $request->get('nomor_polisi');
        $stnk->nama_pemilik = $request->get('nama_pemilik');
        $stnk->alamat = $request->get('alamat');
        $stnk->type = $request->get('type');
        $stnk->jenis = $request->get('jenis');
        $stnk->tahun_pembuatan = $request->get('tahun_pembuatan');
        $stnk->tahun_perakitan = $request->get('tahun_perakitan');
        $stnk->isi_silinder = $request->get('isi_silinder');
        $stnk->no_rangka = $request->get('no_rangka');
        $stnk->tgl_faktur = Carbon::parse($request->get('tgl_faktur'));
        $stnk->bahan_bakar = $request->get('bahan_bakar');
        $stnk->warna_tnkb = $request->get('warna_tnkb');
        $stnk->tahun_registrasi = $request->get('tahun_registrasi');
        $stnk->nomor_bpkb = $request->get('nomor_bpkb');
        $stnk->berlaku_sampai = Carbon::parse($request->get('berlaku_sampai'));
        $stnk->save();
        return redirect('console/stnk'); 
    }

    function details($id){
      $data['stnk'] = STNK::find($id);
      $data['active'] = 'stnk';
      $data['subactive'] = 'list';
      return view('console.stnk.details',$data);
    }

    function printpdf($id){
      $data['stnk'] = STNK::find($id);
      $pdf = PDF::loadView('pdf.stnk', $data);
      $pdf->setPaper([0, 0, 316, 817], 'landscape');
      return $pdf->stream();
    }

    function destroy($id){
      $stnk = STNK::find($id);
      $stnk->delete();
      return redirect('console/stnk');
    }
}
