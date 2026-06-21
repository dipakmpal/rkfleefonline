<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::where('usertype', 'supplier')->where('is_deleted', 0)->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'admin.master.suppliers.action')
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.master.suppliers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // exit();


        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        $users = new User();
        $users->name = isset($request->name)?$request->name:'NULL';
        $users->email = isset($request->email)?$request->email:'NULL';
        $users->usertype = isset($request->usertype)?$request->usertype:'NULL';
        $users->monumber = isset($request->number)?$request->number:'NULL';
        $users->address = isset($request->address)?$request->address:'NULL';
        $users->state = isset($request->state)?$request->state:'NULL';
        $users->pincode = isset($request->pincode)?$request->pincode:'NULL';
        $users->city = isset($request->city)?$request->city:'NULL';
        $users->gstNumber = isset($request->gstNumber)?$request->gstNumber:'NULL';
        $users->underGroup = isset($request->underGroup)?$request->underGroup:'NULL';
        $users->openingbalance = isset($request->openingbalance)?$request->openingbalance:'NULL';
        $users->openingbalancestatus = isset($request->openingbalancestatus)?$request->openingbalancestatus:'NULL';
        $users->panNumber = isset($request->panNumber)?$request->panNumber:'NULL';
        $users->adharNumber = isset($request->adharNumber)?$request->adharNumber:'NULL';
        $users->remark = isset($request->remark)?$request->remark:'NULL';
        $users->password = isset($request->password) ? Hash::make($request->password) : Hash::make('123456');

        
        $users->save();

        if (!empty($users)){
            return redirect()->route('suppliers.index')
            ->with('success','Supplier added successfully!');
        } else{ 
            return redirect()->route('supplier.create')
            ->with('error','Supplier not added successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $supplier = User::findOrFail($id);
        return view('admin.master.suppliers.update', compact('supplier'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $users = User::findOrFail($id);
        $users->name = isset($request->name)?$request->name:'NULL';
        $users->email = isset($request->email)?$request->email:'NULL';
        $users->usertype = isset($request->usertype)?$request->usertype:'NULL';
        $users->monumber = isset($request->number)?$request->number:'NULL';
        $users->address = isset($request->address)?$request->address:'NULL';
        $users->state = isset($request->state)?$request->state:'NULL';
        $users->pincode = isset($request->pincode)?$request->pincode:'NULL';
        $users->city = isset($request->city)?$request->city:'NULL';
        $users->gstNumber = isset($request->gstNumber)?$request->gstNumber:'NULL';
        $users->underGroup = isset($request->underGroup)?$request->underGroup:'NULL';
        $users->openingbalance = isset($request->openingbalance)?$request->openingbalance:'NULL';
        $users->openingbalancestatus = isset($request->openingbalancestatus)?$request->openingbalancestatus:'NULL';
        $users->panNumber = isset($request->panNumber)?$request->panNumber:'NULL';
        $users->adharNumber = isset($request->adharNumber)?$request->adharNumber:'NULL';
        $users->remark = isset($request->remark)?$request->remark:'NULL';

        if (isset($request['password']) && !empty($request['password'])) {
            $users->password = isset($request->password) ? Hash::make($request->password) : Hash::make('123456');
        }

         $users->save();

         if (!empty($users)){
             return redirect()->route('suppliers.index')
             ->with('success','Supplier updated successfully!');
         } else{ 
             return redirect()->route('suppliers.index')
             ->with('error','Supplier not updated successfully!');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $user = User::where('id', $id)->first();
        $user->is_deleted = 1;
        $user->save();
        if (!empty($users)){
            return redirect()->route('suppliers.index')
            ->with('success','Supplier not deleted successfully!');
        } else{ 
            return redirect()->route('suppliers.index')
            ->with('error','Supplier deleted successfully!');
        }
        // return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully!');
    }
}
