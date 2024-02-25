<?php

namespace App\Http\Controllers;

use App\Models\SeminarRegistration;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\UsersDataTable;
use App\Models\PrintSerial;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class SeminarRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function serialInfo(){
        $currentDate = Carbon::now();
        
        $printno = PrintSerial::whereDate('created_at', $currentDate)->count();
        $printSerial = PrintSerial::with('reg')->whereDate('created_at', $currentDate)->get();
        return view('serialinfo', compact('printno','printSerial' ));
    }
    public function printinfo($id)
    {
        // Retrieve registration information based on mobile and trx_id
        // $printinfo = SeminarRegistration::find($id);
        // $printno = PrintSerial::latest()->get()->last();
        $currentDate = Carbon::now();
        $printinfo = SeminarRegistration::find($id);
        $printno = PrintSerial::whereDate('created_at', $currentDate)->count();
        if ($printinfo) {
            // Return HTML with registration information
            return view('printinfo', compact('printinfo', 'printno'));
        } else {
            // Return an error message
            return 'Registration not found.';
        }
    }
    public function printUpdate(Request $request)
    {
        $seminar = SeminarRegistration::find($request->id);
        $seminar->update([
            'c_status' => $request->c_status,
            'c_comment' => $request->c_comment,
            'c_diseases' => $request->c_diseases,
            'modified_by' => Auth::user()->name,
        ]);
        $printId = new PrintSerial();
        $printId->reg_id = $request->id;
        $printId->p_serial = $request->p_serial;
        $printId->save();

        return redirect()->route('seminar.index')->with('success', 'Seminar details updated successfully!');
    }
    public function getSeminarRegistrations()
    {
        $registrations = SeminarRegistration::select(['created_at', 'id', 'name', 'mobile', 'diseases', 'address', 'age', 'comment', 'trx_id', 'status', 'invoice_number']);

        return DataTables::of($registrations)
            ->addColumn('action', function ($registration) {
                // Add any additional action buttons if needed
                return '<button class="btn btn-sm btn-info">View</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function getRegistrationInformation(Request $request)
    {
        // Retrieve registration information based on mobile and trx_id
        $registrations = SeminarRegistration::where('mobile', $request->input('mobile'))
            ->get();

        if ($registrations) {
            // Return HTML with registration information
            return view('registration-information', compact('registrations'));
        } else {
            // Return an error message
            return 'Registration not found.';
        }
    }
    public function showForm()
    {
        return view('seminar-registration-form');
    }
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'diseases' => 'required|string|max:255',
            'address' => 'required|string',
            'age' => 'required|integer',
            'comment' => 'nullable|string',
        ]);

        $done = SeminarRegistration::create($validatedData);
        return redirect()->back()->with('success', 'Registration submitted successfully!');
        if ($done) {
            # code...
        } else {
            return redirect()->back()->with('error', 'Registration submitted successfully!');
            # code...
        }
    }
    
    public function paidRegistration()
    {
        $paidreg = SeminarRegistration::where('status', 'paid')->count();
        $paid = SeminarRegistration::where('status', 'paid')->get();

        return view('paid-registration', compact('paidreg', 'paid'));
    }
    public function index()
    {
        $paidreg = SeminarRegistration::where('status', 'paid')->count();
        $paid = SeminarRegistration::where('status', 'paid')->get();
        $pendingreg = SeminarRegistration::where('status', 'pending')->count();

        // Fetch paid registrations directly from the database
        $paidRegistrations = SeminarRegistration::where('status', 'paid')->get();

        // Fetch pending registrations and filter them in memory
        $pendingRegistrations = SeminarRegistration::where('status', 'pending')->get();


        // Merge paid and filtered pending registrations
        $registrations = SeminarRegistration::get();
        // Extract mobile numbers from $pendingRegistrations
        $pendingMobileNumbers = $pendingRegistrations->pluck('mobile')->toArray();
        // Extract unique mobile numbers from $paidRegistrations
        $uniquePaidMobileNumbers = $paidRegistrations->pluck('mobile')->toArray();
        // Filter $pendingMobileNumbers to exclude those present in $uniquePaidMobileNumbers
        $pendingRegistrationsNotInPaid = $pendingRegistrations->whereNotIn('mobile', $uniquePaidMobileNumbers)->unique('mobile');




        return view('home', compact('pendingRegistrationsNotInPaid', 'registrations', 'paidreg', 'paid', 'pendingreg'));
    }

    public function seeinfo()
    {
        return view('seeinfo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SeminarRegistration $seminarRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $seminar = SeminarRegistration::find($id);
        // dd($seminar);
        return view('home-edit', compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $seminar = SeminarRegistration::find($id);

        if ($request->has('status')) {
            $seminar->status = $request->input('status');
        }

        if ($request->has('c_status')) {
            $seminar->c_status = $request->input('c_status');
        }

        if ($request->has('c_comment')) {
            $seminar->c_comment = $request->input('c_comment');
        }

        if ($request->has('c_diseases')) {
            $seminar->c_diseases = $request->input('c_diseases');
        }

        if ($request->has('name')) {
            $seminar->name = $request->input('name');
        }

        if ($request->has('mobile')) {
            $seminar->mobile = $request->input('mobile');
        }

        if ($request->has('diseases')) {
            $seminar->diseases = $request->input('diseases');
        }

        if ($request->has('address')) {
            $seminar->address = $request->input('address');
        }

        if ($request->has('age')) {
            $seminar->age = $request->input('age');
        }

        if ($request->has('comment')) {
            $seminar->comment = $request->input('comment');
        }

        // Set the modified_by field
        $seminar->modified_by = Auth::user()->name;

        $seminar->save();

        return redirect()->back()->with('success', 'Seminar details updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeminarRegistration $seminarRegistration)
    {
        //
    }
}
