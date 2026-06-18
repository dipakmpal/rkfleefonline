<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaledetailController extends Controller
{
    public function index(){
        return view('admin.purchaseandsale.sale');
    }

    public function create(Request $request){
        $data = $request->validate([
            'billno' => 'required|string',
            'date' => 'required|date',
            'customer_name' => 'required|string',
            'item_name' => 'required|array|min:1',
            'item_name.*' => 'required|string',
            'qty' => 'nullable|array',
            'qty.*' => 'nullable|numeric|min:0',
            'rate' => 'nullable|array',
            'rate.*' => 'nullable|numeric|min:0',
            'discount' => 'nullable|array',
            'discount.*' => 'nullable|numeric|min:0',
            'gst' => 'nullable|array',
            'gst.*' => 'nullable|numeric|min:0',
            'total' => 'nullable|array',
            'total.*' => 'nullable|numeric|min:0',
        ]);

        DB::beginTransaction();
        try {
            // Insert main sale record
            $saleId = DB::table('sales')->insertGetId([
                'billno' => $data['billno'],
                'date' => $data['date'],
                'customer_name' => $data['customer_name'],
                'gstinstatecode' => $request->gstinstatecode,
                'noteforsale' => $request->noteforsale,
                'shippingaddress' => $request->shippingaddress,
                'transportername' => $request->transportername,
                'vehicleno' => $request->vehicleno,
                'ewaybillno' => $request->ewaybillno,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Prepare sale detail rows
            $details = [];
            foreach ($data['item_name'] as $index => $itemName) {
                if (empty($itemName)) continue;

                $details[] = [
                    'sale_id' => $saleId,
                    'item_name' => $itemName,
                    'qty' => $request->input('qty')[$index] ?? null,
                    'rate' => $request->input('rate')[$index] ?? null,
                    'discount' => $request->input('discount')[$index] ?? null,
                    'gst' => $request->input('gst')[$index] ?? null,
                    'total' => $request->input('total')[$index] ?? null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            if (!empty($details)) {
                DB::table('sale_details')->insert($details);
            }

            DB::commit();

            return redirect()->route('sale-bill')->with('success', 'Sale saved successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors('Unable to save sale: ' . $e->getMessage());
        }
    }
    }

