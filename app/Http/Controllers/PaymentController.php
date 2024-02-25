<?php

namespace App\Http\Controllers;

use App\Models\SeminarRegistration;
use Xenon\Paystation\Paystation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'diseases' => 'required|string|max:255',
            'address' => 'required|string',
            'age' => 'required|integer',
            'comment' => 'nullable|string',
        ]);

        $invoice_no = 'AWC420' . rand(111111, 999999) . time();
        $cust_name = $request->input('name');
        $cust_phone = $request->input('mobile');
        $cust_address = $request->input('address');
        $cust_age = $request->input('age');
        $cust_comment = $request->input('comment');
        $cust_diseases = $request->input('diseases');

        $seminarRegistration = new SeminarRegistration();
        $seminarRegistration->invoice_number = $invoice_no;
        $seminarRegistration->name = $cust_name;
        $seminarRegistration->mobile = $cust_phone;
        $seminarRegistration->address = $cust_address;
        $seminarRegistration->age = $cust_age;
        $seminarRegistration->comment = $cust_comment;
        $seminarRegistration->status = 'paid';
        $seminarRegistration->diseases = $cust_diseases;
        $seminarRegistration->c_diseases = 'rpaid';
        $seminarRegistration->modified_by =Auth::user()->name ;

        $seminarRegistration->save();

        return redirect()->route('printinfo', ['id' => $seminarRegistration->id])->with('success', 'Registration Successfully');

    }
}
