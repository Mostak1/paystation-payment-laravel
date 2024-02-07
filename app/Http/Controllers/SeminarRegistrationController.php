<?php

namespace App\Http\Controllers;

use App\Models\SeminarRegistration;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\UsersDataTable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class SeminarRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

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
        $registration = SeminarRegistration::where('mobile', $request->input('mobile'))
            ->where('trx_id', $request->input('trx_id'))
            ->first();

        if ($registration) {
            // Return HTML with registration information
            return view('registration-information', compact('registration'));
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
    // public function index()
    // {

    //     $paidreg = SeminarRegistration::where('status', 'paid')->count();
    //     $pendingreg = SeminarRegistration::where('status', 'pending')->count();
    //     $registrations = SeminarRegistration::get();
    //     $filteredRegistrations = new Collection();

    //     // Keep track of unique mobile numbers for pending registrations
    //     $seenMobileNumbers = [];

    //     // Iterate over each registration
    //     foreach ($registrations as $registration) {
    //         // Check the status of the registration
    //         if ($registration->status == 'paid') {
    //             // For paid registrations, add them directly to the filtered collection
    //             $filteredRegistrations->push($registration);
    //         } elseif ($registration->status == 'pending') {
    //             // For pending registrations, check if the mobile number is already seen
    //             $mobileNumber = $registration->mobile;
    //             if (!in_array($mobileNumber, $seenMobileNumbers)) {
    //                 // If mobile number is not seen, add the registration to the filtered collection
    //                 $filteredRegistrations->push($registration);
    //                 // Mark the mobile number as seen
    //                 $seenMobileNumbers[] = $mobileNumber;
    //             }
    //         }
    //     }
    //     return view('home', compact('registrations', 'paidreg', 'pendingreg','filteredRegistrations'));
    // }
    public function index()
    {
        $paidreg = SeminarRegistration::where('status', 'paid')->count();
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

      
        

        return view('home', compact('pendingRegistrationsNotInPaid','registrations', 'paidreg', 'pendingreg'));
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
        $seminar->update([
            'c_status' => $request->input('c_status'),
            'c_comment' => $request->input('c_comment'),
            'modified_by' => Auth::user()->name,
        ]);

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
