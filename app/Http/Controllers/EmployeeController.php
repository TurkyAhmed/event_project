<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function index()
    {

        // query buildder
        $employees = DB::table('users')
                        ->join('employees','users.id','=','employees.user_id')
                        ->select('users.*','employees.address')
                        ->get();

        //SQL query
        // $employees = DB::select('
        //     select * from users inner join employees on users.id = employees.user_id
        // ');

        //both correct query buildder and SQL query

        // return $employees;
        return view('employees.index',compact('employees'));
    }


    public function create()
    {
        return view('employees.create');
    }


    public function store(EmployeeRequest $request)
    {
        $user = User::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        $employee =new Employee([
            'address'=>$request->address,
        ]);

        //employee method that what i define it in Usermodel
        $user->employee()->save($employee);

        return redirect()->route('employees.index');
    }


    public function show( $id)
    {

        // $employee =User::with('employee')->findOrFail($id);

        $employee = DB::table('users')
        ->join('employees','users.id','=','employees.user_id')
        ->where('users.id',$id)
        ->select('users.*','employees.address')
        ->get()
        ->first();

        // if use this must get first or in view write as employee[0]->id ... ect.
        // $employee = DB::select("
        // select * from users as u inner join employees as e on u.id = e.user_id where u.id = $id
        // ");

        return view('employees.details',compact('employee')) ;
        // return $employee ;
    }


    public function edit( $id)
    {
        $user_with_employee = User::with('employee')->findOrFail($id);

        return view('employees.edit',compact('user_with_employee')) ;
        // return $employee ;
    }



    public function update(EmployeeRequest $request,  $id)
    {
        $user = User::findorfail($id);
        $employee =$user->employee;

        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=$request->password;

        $employee->address = $request->address;

        $user->save();
        $employee->save();

        $employee_ = User::with('employee')->findOrFail($id);

        return redirect()->route('employees.index');
        // return $employee_;
    }


    public function delete($id){
        $user_with_employee = User::with('employee')->findOrFail($id);

        return view('employees.delete',compact('user_with_employee')) ;
    }

    public function destroy( $id)
    {
        User::findorfail($id)->delete();

        return redirect()->route('employees.index');

    }
}
