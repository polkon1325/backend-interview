<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;

class UserManagerController extends Controller{
    public function index(){
        // gets all data
        // $data = User::all();

        // where clause
        // $data = User::where('id', 3)->get();

        // wildcard: all first names that have 'ly'
        // $data = User::where('first_name','like', '%ly%')->get();

        //404
        // $data = User::where('id', 55)->firstOrFail()->get();

        $data = User::orderBy('first_name')->orderBy('last_name')->simplePaginate(10);
        return view('user.index', ['users' => $data]);
        
    }

    public function show($id){
        $data = User::findOrFail($id);
        // dd($data);
        return view('user.edit', ['users' => $data]);
    }

    public function login(){
        if(view()->exists('user.login')){
            return view('user.login');
        }else{
            return abort(404);
        }   
    }

    public function register(){
        return view('user.register');
    }

    public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/home');
        }

        return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');

    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message','Logout successful');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "user_name" => ['required', 'string', Rule::unique('users', 'user_name')],
            "first_name" => ['required', 'min:2'],
            "middle_name" => ['required', 'min:2'],
            "last_name" => ['required', 'min:2'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        $user = User::create($validated);
        auth()->login($user);

        return redirect('/home');
    }

    public function update(Request $request, User $user){
        // dd($request->all());

        // dd($request);

        $validated = $request->validate([
            "user_name" => ['required', 'string'],
            "first_name" => ['required', 'min:2'],
            "middle_name" => ['required', 'min:2'],
            "last_name" => ['required', 'min:2'],
            "email" => ['required', 'email'],
        ]);

        $user->update($validated);

        return back()->with('message', 'Data was successfully updated');
    }

    public function create(){
        return view('user.create');
    }
}
