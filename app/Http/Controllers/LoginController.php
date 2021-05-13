<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $email = $request->input('email');
        $password = $request->input('password');
        $users = DB::table('logins')->where('email', $email)
                                    ->where('password',$password)->get();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name = $request->input('name');
        // $apellidos = $request->input('apellidos');
        // $email = $request->input('email');
        // $password = $request->input('password');
        // $telefono = $request->input('telefono');
        // $rol = $request->input('rol');

        // $usuario = DB::insert('insert logins (name,apellidos,email,password,telefono,rol) 
        //                     values (?,?,?,?,?,?)', [1,$name],[2,$apellidos],[3,$email],[4,$password],[5,$telefono],[6,$rol]);

        // return $usuario;

        

    }

    public function insertar(){
        // csrf_token();
        
        return 'Hola';
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
