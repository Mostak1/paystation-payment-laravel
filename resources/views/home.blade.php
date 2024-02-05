@extends('main')
@section('styles')

@endsection
@section('content')


@include('layouts.navigation')
  
    <div class="relative overflow-x-auto mx-8">
        <h2 class="text-4xl text-center awcpay-header py-2 font-semibold mb-4">Seminar Registrations List</h2>
        <table id="dataTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead >
                <tr>
                    <th colspan="15" class="tablebtn">
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
                    <th>Modified By </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($registrations as $registration)
                    <tr>
                        <td>{{ $registration->id }}</td>
                        <td>{{ $registration->created_at->format('dM g:ia') }}</td>
                        <td>{{ $registration->name }}</td>
                        <td>{{ $registration->mobile }}</td>
                        <td>{{ $registration->diseases }}</td>
                        <td>{{ $registration->address }}</td>
                        <td>{{ $registration->age }}</td>
                        <td>{{ $registration->comment }}</td>
                        <td>{{ $registration->trx_id }}</td>
                        @if ($registration->status == 'pending')
                            
                        <td class="text-red-400">{{ $registration->status }}</td>
                        @else
                            
                        <td>{{ $registration->status }}</td>
                        @endif
                        <td>{{ $registration->invoice_number }}</td>
                        <td>{{ $registration->c_status }}</td>
                        <td>{{ $registration->c_comment }}</td>
                        <td>{{ $registration->modified_by }}</td>
                        <td>
                            <a href="{{ url('seminar/' . $registration->id . '/edit') }}"
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400" title="Edit">
                                edit
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
      
    </script>
@endsection
