<?php

namespace App\Http\Controllers;

use App\Models\Tb_Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info()
    {
        //$var = new user();
        return view('user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Tb_Mensaje;

        $user-> name = $request->user_name;
        $user-> lastname = $request->user_lastname;
        $user-> save();
        //return view('formulario');
        /*$name = request('name');
        $id = DB::table('tb_mensaje')->where('name', $name)->value('id');
        return back()->with ($name);*/
        //$name = request('name'); 
        $registro = Tb_Mensaje::latest('id')->first(); 
        $id=$registro->id;
        return back()->with('status','Fuiste registrado con el ID: '.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('id');
        $name = DB::table('tb_mensaje')->where('id', $id)->value('name');
        $message = DB::table('tb_mensaje')->where('id', $id)->value('desc_mensaje');
        return back()->with('status', $name.', '.$message);
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
    }
}
