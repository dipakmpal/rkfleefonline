<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('usertype', 'customer')->latest()->get();
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
            'customeremail' => 'nullable|email|max:255',
        ]);

        // Prepare input for the User model. Map `customeremail` => `email`.
        $input = $request->except(['_token', '_method']);
        if (isset($input['customeremail'])) {
            $input['email'] = $input['customeremail'];
            unset($input['customeremail']);
        }

        // Ensure a password exists (users table requires it). Set a random password.
        if (empty($input['password'])) {
            $input['password'] = bcrypt(Str::random(12));
        }

        // Create the user record (mass assignment uses $fillable on the model)
        $customer = User::create($input);

        return redirect()->route('customer-master')->with('success', 'Customer created successfully.');
    }
}
