@extends('main')
@section('title', 'Appointment Form')
@section('styles')
    <style>
        .bgimg {
            background-image: url("{{ asset('assets/logo.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .awcbg {
            background-color: #229894;
        }
    </style>
@endsection
@section('content')
    <div class="p-8">


        <div class="max-w-md mx-auto awcbg opacity-8 p-6 rounded-md shadow-xl ">
            <h2 class="text-2xl text-white font-semibold mb-6 text-center">Dr. Haque's Seminar Registration Form</h2>
            <div class="text-white text-center">Islam Tower,2nd floor, Shukrabad (Bus Stand), Dhaka, Bangladesh

                email: awc.health@gmail.com

                Mobile: 09666-747470</div>
                <div class="my-3 text-center">If already registered <a class="text-white" href="{{route('seeinfo')}}">click here</a></div>
            {{-- <form id="seminarRegistrationForm" action="#"> --}}
            <form id="seminarRegistrationForm" action="{{ route('payment.process') }}" method="post">
                <!-- Name Field -->
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-900 font-bold text-xl mb-2">নাম<span
                            class="text-red-500">*</span></label>
                    <input required type="text" id="name" name="name"
                        class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                </div>

                <!-- Mobile Field -->
                <div class="mb-4">
                    <label for="mobile" class="block text-gray-900 font-bold text-xl mb-2">মোবাইল নাম্বার<span
                            class="text-red-500">*</span></label>
                    <input required type="text" id="mobile" name="mobile"
                        class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                </div>

                <!-- Diseases Field -->
                <div class="mb-4">
                    <label for="diseases" class="block text-gray-900 font-bold text-xl mb-2">আপনি কি রোগে ভুগতেছেন<span
                            class="text-red-500">*</span></label>
                    <input required type="text" id="diseases" name="diseases"
                        class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                </div>

                <!-- Address Field -->
                <div class="mb-4">
                    <label for="address" class="block text-gray-900 font-bold text-xl mb-2">ঠিকানা<span
                            class="text-red-500">*</span></label>
                    <textarea id="address" name="address"
                        class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"></textarea>
                </div>

                <!-- Age Field -->
                <div class="mb-4">
                    <label for="age" class="block text-gray-900 font-bold text-xl mb-2">বয়স<span
                            class="text-red-500">*</span></label>
                    <input required type="text" id="age" name="age"
                        class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                </div>

                <!-- Comment Field -->
                <div class="mb-4">
                    <label for="comment" class="block text-gray-900 font-bold text-xl mb-2">মন্তব্য</label>
                    <textarea id="comment" name="comment"
                        class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" id="submitBtn"
                        class="bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Pay Now 1000Tk
                    </button>
                </div>
            </form>
            {{-- <div class="text-center">
                <form action="{{ route('get_registration_information') }}" method="post">
                    <!-- Name Field -->
                    @csrf
                    <div class="text-xl my-4">
                        If already registered
                        <div class="mb-4">
                            <label for="mobile" class="block text-gray-900 font-bold text-xl mb-2">Mobile<span
                                    class="text-red-500">*</span></label>
                            <input required type="text" id="mobile" name="mobile"
                                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="trx_id" class="block text-gray-900 font-bold text-xl mb-2">Tranjection ID<span
                                    class="text-red-500">*</span></label>
                            <input required type="text" id="trx_id" name="trx_id"
                                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="text-center">
                            <button type="submit" id="seeinformation"
                                class="bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                                See Information
                            </button>
                        </div>
                    </div>

                </form>
            </div> --}}
            {{-- <form action="{{ route('checkout') }}" method="get">
            @csrf
            <button style="padding: 10px 20px; margin: 10px; border: 1px solid black;">Pay Now</button>
        </form> --}}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            // $('#seeinformation').click(function(e) {
            //     e.preventDefault();

            //     // Get the values from the form
            //     var mobile = $('#mobile').val();
            //     var trx_id = $('#trx_id').val();

            //     // Send the data to the controller using AJAX
            //     $.ajax({
            //         url: "{{ route('get_registration_information') }}", // Change this to your actual route
            //         type: 'POST',
            //         data: {
            //             mobile: mobile,
            //             trx_id: trx_id,
            //             _token: "{{ csrf_token() }}" // Add CSRF token for Laravel
            //         },
            //         success: function(response) {
            //             // Display the information using SweetAlert2
            //             Swal.fire({
            //                 title: 'Registration Information',
            //                 html: response,
            //                 icon: 'info'
            //             });
            //         },
            //         error: function(error) {
            //             // Handle errors
            //             Swal.fire({
            //                 icon: 'error',
            //                 title: 'Error',
            //                 text: 'An error occurred. Please try again later.'
            //             });
            //         }
            //     });
            // });
            $('#seminarRegistrationForm').submit(function(e) {
                // Prevent the default form submission
                e.preventDefault();

                // Get form data
                var name = $('#name').val();
                var mobile = $('#mobile').val();
                var diseases = $('#diseases').val();
                var address = $('#address').val();
                var age = $('#age').val();
                var comment = $('#comment').val();

                // Validate fields
                var isNameValid = validateField($('#name'), 'Please enter a valid name.');
                var isMobileValid = validateField($('#mobile'),
                    'The phone number must start with 01 and have a length of 11 characters',
                    /^01\d{9}$/);
                var isDiseasesValid = validateField($('#diseases'),
                    'Please enter a valid diseases description.');
                var isAddressValid = validateField($('#address'), 'Please enter a valid address.');
                var isAgeValid = validateField($('#age'), 'Please enter a valid age.', /^[0-9]+$/);

                // You can add more specific validation checks if needed

                // If any validation fails, prevent form submission
                if (!isNameValid || !isMobileValid || !isDiseasesValid || !isAddressValid || !isAgeValid) {
                    return;
                }

                // If all validation passes, proceed with form submission
                // Add your AJAX submission logic or remove the following line if you want to submit the form normally
                $('#seminarRegistrationForm').unbind('submit').submit();
            });

            // Function to validate a field
            function validateField(element, errorMessage, regex) {
                var value = element.val();
                if (regex && !regex.test(value) || !value.trim()) {
                    showValidationError(element, errorMessage);
                    return false;
                } else {
                    clearValidationError(element);
                    return true;
                }
            }

            // Function to show validation error
            function showValidationError(element, errorMessage) {
                element.css('border-color', 'red');
                // Create or update a span element to display the error message
                var errorSpan = element.next('.validation-error');
                if (!errorSpan.length) {
                    errorSpan = $('<span class="validation-error"></span>').css({
                        'font-size': '18px',
                        'color': 'maroon',
                    });
                    element.after(errorSpan);
                }
                errorSpan.text(errorMessage);
            }

            // Function to clear validation error
            function clearValidationError(element) {
                element.css('border-color', ''); // Reset border color
                // Remove the error message span
                element.next('.validation-error').remove();
            }
        });
    </script>
@endsection


</body>

</html>
