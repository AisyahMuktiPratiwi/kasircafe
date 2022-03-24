<?php

namespace App\Http\Controllers;

use \App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\ActivityLog;

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
        $user=User::all();

        return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
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
$validateData =$request->validate([
    'name'=> 'required|max:255',

    'email'=>'required|unique:users',
    'password'=>'required|max:255',
    'level'=>'required'
]);

$validateData['password']= Hash::make($validateData['password']);
activity()->log('Menambahkan Akun');
                            User::create($validateData);
                            return redirect()->route('user.index')->with('success', 'User Berhasil ditambah');
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
        $validateData = User::find($id);
        return view('user.edit', compact('validateData'));
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
        $validateData =$request->validate([
            'name'=> 'max:255',

            'email'=>'',
            'password'=>'max:255',
            'level'=>''
        ]);
        $validateData = User::find($id);
        $validateData->name = $request->input('name');
        $validateData->email = $request->input('email');
        $validateData->password = $request->input('password');
        $validateData->level = $request->input('level');
        // $validateData=User::find($id);
        $validateData['password']= Hash::make($validateData['password']);

        activity()->log('Mengedit Akun');
        if (!$validateData->save()) {
            return redirect()->back()->with(['error' => 'error page update']);
        }
        return redirect()->route('user.index')->with('success', 'update data');

                                    // return redirect()->route('user.index')->with('success', 'User Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user=User::find($id);
        $user->delete();
        activity()->log('Menghapus Akun');
        return redirect()->route('user.index')->with('success',' Data Berhasil Di Hapus');
    }
}