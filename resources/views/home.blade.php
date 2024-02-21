@extends('main')
@section('styles')

@endsection
@section('content')


@include('layouts.navigation')
  
    <div class="relative overflow-x-auto mx-8">
        <h2 class="text-4xl text-center awcpay-header py-2 font-semibold mb-4">Seminar Registrations List- Paid({{$paidreg}}) and Pending({{$pendingreg}})</h2>
        <table id="dataTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead >
                <tr>
                    <th colspan="16" class="tablebtn">
                    </th>
                </tr>
                <tr class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <th>Serial</th>
                    <th>Time</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Diseases</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Patient Comment</th>
                    <th>Trx ID</th>
                    <th>Pay Status</th>
                    <th>Invoice Number</th>
                    <th>Call Status</th>
                    <th>Call Comment</th>
                    <th>Confirm Diseases</th>
                    <th>Modified By </th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody class="text-gray-700">
                {{-- 01723741115 01730684696 --}}
                @foreach ($pendingRegistrationsNotInPaid as $registration)
                    <tr>
                        <td>{{ $registration->id }}</td>
                        <td>{{ $registration->created_at->format('dM g:ia') }}</td>
                        <td>{{ $registration->name }}</td>
                        <td>{{ $registration->mobile }}</td>
                        <td>{{ $registration->diseases }}</td>
                        <td>{{ $registration->address }}</td>
                        <td>{{ $registration->age }}</td>
                        <td>{{ $registration->comment }}</td>
                        <td>
                            @php
                            $trxId = $registration->trx_id;
                            $chunks = str_split($trxId, 5);
                        @endphp
                        
                        @foreach ($chunks as $chunk)
                            <span class="block">{{ $chunk }}</span>
                        @endforeach
                        </td>
                        @if ($registration->status == 'pending')
                            
                        <td class="text-red-400">{{ $registration->status }}</td>
                        @else
                            
                        <td>{{ $registration->status }}</td>
                        @endif
                        <td>{{ $registration->invoice_number }}</td>
                        @if ($registration->c_status == 'Ticket Generated')
                        <td class="text-red-400">{{ $registration->c_status }}</td>
                        @else
                        <td>{{ $registration->c_status }}</td>
                        @endif
                        <td>{{ $registration->c_comment }}</td>
                        <td>{{ $registration->c_diseases }}</td>
                        <td>{{ $registration->modified_by }}</td>
                        <td>
                            <a href="{{ url('seminar/' . $registration->id . '/edit') }}"
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400" title="Edit">
                                edit
                            </a>
                            <a href="{{ url('printinfo/' . $registration->id) }}"
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400" title="Edit">
                                Print
                            </a>
                           </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
  
<script>
    // $(document).ready(function() {
    //     // Function to filter rows based on status and hide duplicate pending mobile numbers
    //     function filterRows() {
    //         var seenMobileNumbers = {}; // Object to store unique mobile numbers
    //         $('#registrationTable tbody tr').each(function() {
    //             var status = $(this).find('td:nth-child(9)').text().trim(); // Get status value
    //             var mobileNumber = $(this).find('td:nth-child(4)').text().trim(); // Get mobile number

    //             // Filter rows based on status
    //             if (status === 'paid') {
    //                 // Show rows with status 'paid'
    //                 $(this).show();
    //             } else if (status === 'pending') {
    //                 // Check if mobile number is already seen
    //                 if (!seenMobileNumbers[mobileNumber]) {
    //                     // If mobile number is not seen, mark it as seen and show the row
    //                     seenMobileNumbers[mobileNumber] = true;
    //                     $(this).show();
    //                 } else {
    //                     // If mobile number is already seen, hide the row
    //                     $(this).hide();
    //                 }
    //             }
    //         });
    //     }

    //     // Call the filter function when the document is ready
    //     filterRows();
    // });
</script>

@endsection
