<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        // $users = DB::table('users')
        //         ->join('employees','users.id','!=','employees.user_id')
        //         ->select('users.*')
        //         ->get();

        // $users_ =DB::select('
        //     select * from users left join employees on users.id != employees.user_id where users.id != employees.user_id
        // ');

        // return $users_;
        return view('users.index',compact('users'));
    }


    public function show($id){
        $user = USer::findorfail($id);
        return view('users.details',compact('user'));
    }

    public function create(){
        return view('users.create');
    }


    public function store(UserRequest $req){

        User::create($req->all());
        return redirect()->route('users.index');

        // $user = new User();

        // $user->name = strip_tags($req->input('name'));
        // $user->phone = strip_tags($req->input('phone'));
        // $user->email = strip_tags($req->input('email'));
        // $user->password = strip_tags($req->input('password'));

        // $user->save();

        // return redirect()->route('users.index');

    }


    public function edit($id){
        $user =User::findorfail($id);
        return view('users.edit',compact('user'));
    }


    public function update(UserRequest $req, $id){

        $user =User::findorfail($id);
        if($req->password ==""){
            $user->update([
                'name'=>$req->name,
                'phone'=>$req->phone,
                'email'=>$req->email,
            ]);
            echo "hello";
        }
        else{
            $user->update($req->all());
        }

        return redirect()->route('users.index');
    }


    public function delete($id){
        $user =User::findorfail($id);
        return view('users.delete',compact('user'));
    }


    public function destroy($id){
        $user =User::findorfail($id);
        $user->delete();

        return redirect()->route('users.index');
    }


        // Soft Delete

        public function softDelete(){
            $users = User::onlyTrashed()->get();
            return view('users.usersSoftDelete',compact('users'));
        }


        public function restore($id){
            User::withTrashed()->where('id',$id)->restore();

            return redirect()->back();
        }


        public function forcedelete($id){
            User::withTrashed()->where('id',$id)->forcedelete();
            return redirect()->back();
        }


}
