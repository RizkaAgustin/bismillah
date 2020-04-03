<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use \Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Web;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$websites = DB::table('websites')->get();
        $websites = Web::all();
        return view('website/index', ['websites' => $websites]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('website/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $tambah = new Web;
        // $tambah->alamat_url = $request->alamat_url;
        // $tambah->ip_host = $request->ip_host;

        // $tambah->save();
        // return redirect('/website');

        
            // Web::create([
            //     'alamat_url' => $request->alamat_url,
            //     'ip_host' => $request->ip_host
            // ]);
        $request->validate([
            'alamat_url' => 'required',
            'ip_host' => 'required'
        ]);


        Web::create($request->all());
        return redirect('/website')->with('status','Data Berhasil Ditambahkan!');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //  Web::destroy($webs->id);
        //  return redirect('/website')->with('status','Data Berhasil Dihapus!');
        DB::table('webs')->where('id',$id)->delete();
        return redirect('/website')->with('status','Data Berhasil Dihapus!');
    }
}
