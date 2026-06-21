<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // $data = User::where('usertype', 'customer')->latest()->get();
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit();
        if ($request->ajax()) {
            $data = User::where('usertype', 'customer')->where('is_deleted', 0)->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'admin.master.customer.action')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.master.customer.customermaster');
    }

    public function create()
    {
        return view('../admin.master.customer.createcustomercreate');
    }

    public function store(Request $request){

    // echo "<pre>";
    // print_r($request->all());
    // echo "</pre>";
    // exit();
        // Basic validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        $users = new User();
        $users->name = isset($request->name)?$request->name:'NULL';
        $users->email = isset($request->email)?$request->email:'NULL';
        $users->usertype = isset($request->usertype)?$request->usertype:'NULL';
        $users->customerCode = isset($request->customerCode)?$request->customerCode:'NULL';
        $users->contactperson = isset($request->contactperson)?$request->contactperson:'NULL';
        $users->monumber = isset($request->monumber)?$request->monumber:'NULL';
        $users->address = isset($request->address)?$request->address:'NULL';
        $users->city = isset($request->city)?$request->city:'NULL';
        $users->state = isset($request->state)?$request->state:'NULL';
        // $users->country = isset($request->country)?$request->country:'NULL';
        $users->pincode = isset($request->pincode)?$request->pincode:'NULL';
        $users->gstNumber = isset($request->gstNumber)?$request->gstNumber:'NULL';
        $users->underGroup = isset($request->underGroup)?$request->underGroup:'NULL';
        $users->panNumber = isset($request->panNumber)?$request->panNumber:'NULL';
        $users->adharNumber = isset($request->adharNumber)?$request->adharNumber:'NULL';
        $users->remark = isset($request->remark)?$request->remark:'NULL';
        $users->hirer = isset($request->hirer)?$request->hirer:'NULL';
        $users->whatsappNumber = isset($request->whatsappNumber)?$request->whatsappNumber:'NULL';
        $users->tds = isset($request->tds)?$request->tds:'NULL';
        $users->openingbalance = isset($request->openingbalance)?$request->openingbalance:'NULL';
        $users->openingbalancestatus = isset($request->openingbalancestatus)?$request->openingbalancestatus:'NULL';
        $users->vendorcode = isset($request->vendorcode)?$request->vendorcode:'NULL';
        $users->biltycharges = isset($request->biltycharges)?$request->biltycharges:'NULL';
        $users->creditlimit = isset($request->creditlimit)?$request->creditlimit:'NULL';
        $users->billformate = isset($request->billformate)?$request->billformate:'NULL';
        $users->transporterparty = isset($request->transporterparty)?$request->transporterparty:'NULL';
        $users->partyType = isset($request->partyType)?$request->partyType:'NULL';

        $users->password = isset($request->password) ? Hash::make($request->password) : Hash::make('123456');
        $users->save();

        if (!empty($users)){
            return redirect()->route('customer-master')
            ->with('success','Customer added successfully!');
        } else{ 
            return redirect()->route('customer-master')
            ->with('error','Customer not added successfully!');
        }

        // return redirect()->route('customer-master')->with('success', 'Customer created successfully.');
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('../admin.master.customer.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
// $user = User::findOrFail($id);
//     echo "<pre>";
//     print_r($user);
//     echo "</pre>";
//     exit();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $users = User::findOrFail($id);
        $users->name = isset($request->name)?$request->name:'NULL';
        $users->email = isset($request->email)?$request->email:'NULL';
        $users->usertype = isset($request->usertype)?$request->usertype:'NULL';
        $users->customerCode = isset($request->customerCode)?$request->customerCode:'NULL';
        $users->contactperson = isset($request->contactperson)?$request->contactperson:'NULL';
        $users->monumber = isset($request->monumber)?$request->monumber:'NULL';
        $users->address = isset($request->address)?$request->address:'NULL';
        $users->city = isset($request->city)?$request->city:'NULL';
        $users->state = isset($request->state)?$request->state:'NULL';
        // $users->country = isset($request->country)?$request->country:'NULL';
        $users->pincode = isset($request->pincode)?$request->pincode:'NULL';
        $users->gstNumber = isset($request->gstNumber)?$request->gstNumber:'NULL';
        $users->underGroup = isset($request->underGroup)?$request->underGroup:'NULL';
        $users->panNumber = isset($request->panNumber)?$request->panNumber:'NULL';
        $users->adharNumber = isset($request->adharNumber)?$request->adharNumber:'NULL';
        $users->remark = isset($request->remark)?$request->remark:'NULL';
        $users->hirer = isset($request->hirer)?$request->hirer:'NULL';
        $users->whatsappNumber = isset($request->whatsappNumber)?$request->whatsappNumber:'NULL';
        $users->tds = isset($request->tds)?$request->tds:'NULL';
        $users->openingbalance = isset($request->openingbalance)?$request->openingbalance:'NULL';
        $users->openingbalancestatus = isset($request->openingbalancestatus)?$request->openingbalancestatus:'NULL';
        $users->vendorcode = isset($request->vendorcode)?$request->vendorcode:'NULL';
        $users->biltycharges = isset($request->biltycharges)?$request->biltycharges:'NULL';
        $users->creditlimit = isset($request->creditlimit)?$request->creditlimit:'NULL';
        $users->billformate = isset($request->billformate)?$request->billformate:'NULL';
        $users->transporterparty = isset($request->transporterparty)?$request->transporterparty:'NULL';
        $users->partyType = isset($request->partyType)?$request->partyType:'NULL';

        if (isset($request['password']) && !empty($request['password'])) {
            $users->password = isset($request->password) ? Hash::make($request->password) : Hash::make('123456');
        }

         $users->save();

         if (!empty($users)){
             return redirect()->route('customer-master')
             ->with('success','Customer updated successfully!');
         } else{ 
             return redirect()->route('customer-master')
             ->with('error','Customer not updated successfully!');
         }

         // return redirect()->route('customer-master')->with('success', 'Customer updated successfully.');
     }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->is_deleted = 1;
        $user->save();
        return redirect()->route('customer-master')->with('success', 'Customer deleted successfully!');
    }

}
