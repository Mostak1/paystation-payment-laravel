<?php

namespace App\Http\Controllers;

use App\Models\SeminarRegistration;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\UsersDataTable;
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
    public function index()
    {
        $registrations = SeminarRegistration::get();
        return view('home', compact('registrations'));
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
