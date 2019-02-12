<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user =DB::table('users')->get();
        // dd($user);
        return view('users.index',['user' =>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
 
        return view('users.nguoidung');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    //    dd($request->name);
        DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return redirect()->route('users.index');
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
        // $user =DB::table('users')->get();
        // // dd($user[1]->id);
        // return view('user.edit',['user' =>$user]);

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
        $user =DB::table('users')->where('id','=',$id)->get();
        // dd(gettype($user[1]->id));
        // typeOf($user);
        //dd($user);
        return view('users.update',['user' =>$user]);
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
        $user = DB::table('users')->where('id',$id)->update(['name'=>$request->name,'email'=>$request->email]);
        return redirect()->route('users.index');
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
        $user = DB::table('users')->where('id', $id);
        $user->delete();
        return redirect()->route('users.index') ;
    }
}
