@extends('main')
@section('styles')
@endsection
@section('content')
   

    <h2 class="text-4xl text-center awcpay-header py-2 font-semibold mb-4">Seminar Token Generated List-
        ({{ $printno }})</h2>
    <div class="relative overflow-x-auto mx-8">
        <table id="dataTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead>
                <tr>
                    <th colspan="15" class="tablebtn">
                    </th>
                </tr>
                <tr class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <th>Serial</th>
                    <th>Action</th>
                    <th>Time</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Print Status</th>
                    <th>Other Pay</th>
                    <th>AWC Comment</th>
                    <th>Pay Status</th>
                    <th>Diseases</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Patient Comment</th>
                    <th>Trx ID</th>

                    <th>Invoice Number</th>

                    <th>Modified By </th>

                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($printSerial as $registration)
                    <tr>
                        <td>{{ $registration->reg->id }}</td>
                        <td>
                            {{ $registration->p_serial }}
                        </td>
                        <td>{{ $registration->reg->created_at->format('dM g:ia') }}</td>
                        <td>{{ $registration->reg->name }}</td>
                        <td>{{ $registration->reg->mobile }}</td>

                        @if ($registration->reg->c_status == 'Ticket Generated')
                            <td class="text-red-400">{{ $registration->reg->c_status }}</td>
                        @else
                            <td>{{ $registration->reg->c_status }}</td>
                        @endif

                        <td>
                            @if ($registration->reg->c_diseases === 'mpaid')
                                <span class="text-blue-600">

                                    Call Center Paid(Bkash)
                                </span>
                            @elseif($registration->reg->c_diseases === 'rpaid')
                                <span class="text-green-500">
                                    Reception Paid
                                </span>
                            @endif

                        </td>
                        <td>{{ $registration->reg->c_comment }}</td>
                        @if ($registration->reg->status == 'pending')
                            <td class="text-red-400">{{ $registration->reg->status }}</td>
                        @else
                            <td>{{ $registration->reg->status }}</td>
                        @endif
                        <td>{{ $registration->reg->diseases }}</td>
                        <td>{{ $registration->reg->address }}</td>
                        <td>{{ $registration->reg->age }}</td>
                        <td>{{ $registration->reg->comment }}</td>
                        <td>
                            @php
                                $trxId = $registration->reg->trx_id;
                                $chunks = str_split($trxId, 10);
                            @endphp

                            @foreach ($chunks as $chunk)
                                <span class="block">{{ $chunk }}</span>
                            @endforeach
                        </td>

                        <td>{{ $registration->reg->invoice_number }}</td>

                        <td>{{ $registration->reg->modified_by }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            var table = $('.dataTable2').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    'copy', 'excel', 'print'
                ]
            });
            table.buttons().container().appendTo($('.tablebtn', table.table().container()));
            $('.tablebtn .dt-buttons').removeClass('flex-wrap');
            $('.tablebtn .btn').removeClass('btn-secondary').addClass(
                'text-gray-900 bg-white border border-gray-600 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700'
            );

        });
    </script>
@endsection
