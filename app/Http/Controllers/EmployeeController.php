<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Query\Builder;

class EmployeeController extends Controller
{

    public function index()
    {
        // query buildder
        $employees = DB::table('users')
                        ->join('employees','users.id','=','employees.user_id')
                        ->select('users.*','employees.address')
                        ->paginate(10);

        //SQL query
        // $employees = DB::select('
        //     select * from users inner join employees on users.id = employees.user_id
        // ');

        //both correct query buildder and SQL query


        // return $employees;
        return view('employees.index',['employees'=>$employees, 'link_active'=>'employees']);
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

        return redirect()->route('employees.index')->with('successMsg', 'تم الاضافة بنجاح');
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

        return view('employees.details',['employee'=>$employee , 'link_active'=>'employees']);
        // return $employee ;
    }


    public function edit( $id)
    {
        $user_with_employee = User::with('employee')->findOrFail($id);

        return view('employees.edit',['user_with_employee'=>$user_with_employee , 'link_active'=>'employees']);
        // return $employee ;
    }



    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>"required|unique:users,email,$id,id",
        ], [
            'name.required' => '*ادخل الحقل رجاءً.',
            'phone.required'=>'*ادخل الحقل رجاءً.',
            'address.required'=>'*ادخل الحقل رجاءً.',
            'email.required'=>'*ادخل الحقل رجاءً.',
            'email.unique'=>' الحساب مسجل من قبل ',
        ]);

        $user = User::findorfail($id);

        if($request->password == ""){

            $employee =$user->employee;

            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $employee->address = $request->address;

            $user->save();
            $employee->save();

        }
        else{
            $validatedData = $request->validate([
                'password' => 'min:6|confirmed'
            ], [
                'password.min'=>'*يجب ان تكون كلمة مرورك اكبر من 6 حروف',
                'password.confirmed'=>'* كلمة المرور غير متطابقة.',
            ]);

            $employee =$user->employee;

            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $user->password=$request->password;
            $employee->address = $request->address;

            $user->save();
            $employee->save();
        }

        $employee_ = User::with('employee')->findOrFail($id);

        return redirect()->route('employees.index')->with('successMsg', 'تم التعديل بنجاح');
    }


    public function delete($id){
        $user_with_employee = User::with('employee')->findOrFail($id);

        return view('employees.delete',['user_with_employee'=>$user_with_employee , 'link_active'=>'employees']);
    }


    public function destroy( $id)
    {
        User::findorfail($id)->delete();

        return redirect()->route('employees.index')->with('successMsg', 'تم الحذف بنجاح');
    }

       // Soft Delete

       public function softDelete(){
        $employees = Employee::onlyTrashed()->get();
        return view('employees.employeesSoftDelete',compact('employees'));
    }


    public function restore($id){
        Employee::withTrashed()->where('id',$id)->restore();

        return redirect()->back();
    }


    public function forcedelete($id){
        Employee::withTrashed()->where('id',$id)->forcedelete();
        return redirect()->back();
    }
}
