<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleo;

class EmpleoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     //   $empleos = Empleo::all();
        // dd( $employees->toArray() );

        return view('empleos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $companies = Company::orderBy('name')->get();
    //     return view('employees.create', compact('companies'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $validation = FacadesValidator::make($request->all(), [
    //         'name' => 'required|max:100',
    //         'doc' => 'required|numeric',
    //         'phone' => 'required|numeric',
    //         'email' => 'required|email|unique:users',

    //     ]);

    //     if ($validation->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validation)
    //             ->withInput();
    //     }


    //     $user_account['email'] = $request->get('email');
    //     $user_account['password'] = FacadesHash::make($request->get('password'));

    //     $user = User::create($user_account);



    //     $employee_account['document_id'] = $request->get('doc');
    //     $employee_account['name'] = $request->get('name');
    //     $employee_account['phone_number'] = $request->get('phone');
    //     $employee_account['profession'] = $request->get('profession');
    //     $employee_account['company_id'] = $request->get('company_id');
    //     $employee_account['user_id'] = $user->id;

    //     Employee::create($employee_account);




    //     return redirect('employees');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
