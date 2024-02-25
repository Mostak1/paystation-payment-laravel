@extends('main')
@section('title', 'Appointment Form')
@section('styles')
    <style>
        .text-3xl {
            font-size: 30px;
        }

        .print-w {
            width: 750px;
        }

        #formdata {
            display: none;
        }

        .foodcard {
            width: fit-content;
            margin: 0 auto;
            padding: 10px;
            border: 3px solid green;
            border-style: dashed;
            border-radius: 10px;
            font-size: 60px;
            font-weight: 900;
        }

        @media print {
            .print-hidden {
                display: none;
            }

            .text-3xl {
                font-size: 30px;
            }



            @page {
                size: A5;
                margin-top: 80px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="min-h-screen py-10 bg-gray-300">


        <div id="contentToPrint" class="print-w mx-auto awcbg opacity-8  p-6 rounded-md ">
            <div class="flex justify-between items-center mb-4 print-hidden">
                <button id="print"
                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400"
                    title="Edit">
                    Print
                </button>
                <a href="{{ url('/seminar') }}" class="text-blue-500">Back</a>
            </div>
            <div class="page1">


                <div class="items-center my-8">
                    <img src="{{ asset('assets/haquesir.jpg') }}" alt="">
                </div>


                <div class="grid grid-cols-2 gap-4">
                    <div class="flex">
                        <p class="text-gray-600 me-2">Serial Number:</p>
                        <p class="font-semibold">{{ $printno + 1 }}</p>
                    </div>
                    <div class="flex">
                        <p class="text-gray-600 me-2">Registration Number:</p>
                        <p class="font-semibold">{{ $printinfo->id }}</p>
                    </div>
                    <div class="flex">
                        <p class="text-gray-600 me-2">Name:</p>
                        <p class="font-semibold">{{ $printinfo->name }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Mobile:</p>
                        <p class="font-semibold">{{ $printinfo->mobile }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Diseases:</p>
                        <p class="font-semibold">{{ $printinfo->diseases }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Address:</p>
                        <p class="font-semibold">{{ $printinfo->address }}</p>
                    </div>

                    <div class="">
                        <p class="text-gray-600 me-2">Invoice Number:</p>
                        <p class="font-semibold">{{ $printinfo->invoice_number }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Age:</p>
                        <p class="font-semibold">{{ $printinfo->age }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Status:</p>
                        <p class="font-semibold">{{ $printinfo->status }}</p>
                    </div>

                </div>

                <div class="flex justify-center text-2xl my-4">

                    <p class="text-gray-600 me-2">Priented By: </p>
                    <p class="font-semibold me-2"> {{ Auth::user()->name }}</p>
                    <p class="text-gray-600 me-2">Date: </p>
                    <p class="font-semibold"> {{ now()->format('d M Y') }}</p>
                </div>


            </div>
            <div class="page2 pt-10">


                <div class="items-center my-8">
                    <img src="{{ asset('assets/haquesir.jpg') }}" alt="">
                </div>


                <div class="grid grid-cols-2 gap-4">
                    <div class="flex">
                        <p class="text-gray-600 me-2">Serial Number:</p>
                        <p class="font-semibold"> {{ $printno + 1 }}</p>
                    </div>
                    <div class="flex">
                        <p class="text-gray-600 me-2">Registration Number:</p>
                        <p class="font-semibold"> {{ $printinfo->id }}</p>
                    </div>
                    <div class="flex">
                        <p class="text-gray-600 me-2">Name:</p>
                        <p class="font-semibold"> fcgbh fnbfh {{ $printinfo->name }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Mobile:</p>
                        <p class="font-semibold"> {{ $printinfo->mobile }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600 me-2">Invoice Number:</p>
                        <p class="font-semibold"> {{ $printinfo->invoice_number }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Age:</p>
                        <p class="font-semibold"> {{ $printinfo->age }}</p>
                    </div>

                    <div class="flex">
                        <p class="text-gray-600 me-2">Status:</p>
                        <p class="font-semibold"> {{ $printinfo->status }}</p>
                    </div>
                

                </div>
                <div class="foodcard items-center my-8">

                    Food Token
                </div>
                <div class="flex justify-center text-xl my-4">

                    <p class="text-gray-600 me-2">Priented By: </p>
                    <p class="font-semibold me-2"> {{ Auth::user()->name }}</p>
                    <p class="text-gray-600 me-2">Date: </p>
                    <p class="font-semibold"> {{ now()->format('d M Y') }}</p>
                </div>
            </div>
            <form id="formdata">
                <input id="id" type="number" name="id" value="{{ $printinfo->id }}">
                <input id="c_status" type="text" name="c_status" value="Ticket Generated">
                <input id="c_comment" type="text" name="c_comment" value="{{ $printinfo->c_comment }}">
                <input id="c_diseases" type="text" name="c_diseases" value="{{ $printinfo->c_diseases }}">
                <input id="p_serial" type="text" name="p_serial" value="{{ $printno + 1 }}">
                <input type="submit" value="Submit">
            </form>
        </div>
    @endsection
    @section('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#print').click(function() {

                    var id = $('#id').val(); // serialize the form data
                    var c_status = $('#c_status').val();
                    var c_comment = $('#c_comment').val();
                    var c_diseases = $('#c_diseases').val();
                    var p_serial = $('#p_serial').val();
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');

                    console.log(id, c_status, c_comment, c_diseases);
                    $.ajax({
                        url: '{{ route('printUpdate') }}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // include CSRF token in the headers
                        },
                        data: {
                            id: id,
                            c_status: c_status,
                            c_comment: c_comment,
                            c_diseases: c_diseases,
                            p_serial: p_serial,
                            _token: csrfToken,
                        },
                        success: function(response) {

                            console.log(response.success);

                        },
                        error: function(xhr, status, error) {
                            // handle error response
                            // console.error(error);
                            alert('An error occurred while updating seminar details.');
                        }
                    });

                    var printContents = $('#contentToPrint').html();

                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                    //  $('#submitForm').trigger('click');
                    // Send data via AJAX after printing

                    // $("#orders").empty();
                    location.reload();
                });

            });
        </script>
    @endsection
