<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        $users = User::paginate(2);
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


    public function update(Request $req, $id){

        $validatedData = $req->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>"required|unique:users,email,$id,id",
        ],
        [
            'name.required' => '*ادخل الحقل رجاءً.',
            'phone.required'=>'*ادخل الحقل رجاءً.',
            'email.required'=>'*ادخل الحقل رجاءً.',
            'email.unique'=>' الحساب مسجل من قبل ',
        ]);

        $user =User::findorfail($id);

        if($req->password ==""){
            $user->update([
                'name'=>$req->name,
                'phone'=>$req->phone,
                'email'=>$req->email,
            ]);
        }
        else{
            $validatedData = $req->validate([
                'password' => 'min:6|confirmed'
            ], [
                'password.min'=>'*يجب ان تكون كلمة مرورك اكبر من 6 حروف',
                'password.confirmed'=>'* كلمة المرور غير متطابقة.',
            ]);
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
