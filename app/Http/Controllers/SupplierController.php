<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    
    function __construct(){
        $this->suppliers = new Supplier;
    }
    function index(){
        return view('supplier')->with(['suppliers'=>Supplier::all()]);

        // $suppliers = $this->suppliers->getSuppliers();
        // return view('supplier', compact('suppliers'));
    }
    function save_suppliers(Request $request){
        $data = [
            'SupplierName' => $request->SupplierName,
            'ContactInformation' => $request->ContactInformation,
            'Address' => $request->Address,
        ];
        $this->suppliers->saveSuppliers($data);
        return back();
    }
    function delete_suppliers($id){
        $this->suppliers->deleteSuppliers($id);
        return back();
    }
    function update_Suppliers($id){
        $suppliers = $this->suppliers->updateSuppliers($id);
        return view('update_suppliers', compact('suppliers'));
    }
    function save_updated_suppliers(Request $request){
        $data = [
            'SupplierName' => $request->update_supplier_name,
            'ContactInformation' => $request->update_contactinformation,
            'Address' => $request->update_address,
        ];
        $this->suppliers->updatedSuppliers($data, $request->id);
        return redirect()->route('supplier');
    }
}