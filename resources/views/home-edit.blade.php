@extends('main')
@section('content')
    <div class="text-4xl text-center awcpay-header py-2 font-semibold mb-4">Seminar Registrations Update of
        {{ $seminar->name }}
        ({{ $seminar->mobile }})
    </div>



    <form action="{{ route('seminar.update', $seminar->id) }}" method="POST"
        class="max-w-md mx-auto my-8 bg-slate-400 p-5 rounded-xl">
        @csrf
        @method('PUT')

        <div class="w-full mb-5">
            <label for="status" class="text-sm">Pay Status</label>
            <select id="status" name="status"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <option value="" {{ $seminar->status === '' ? 'selected' : '' }}>Select</option>
                <option value="paid" {{ $seminar->status === 'paid' ? 'selected' : '' }}>
                    Paid</option>
                <option value="pending" {{ $seminar->status === 'pending' ? 'selected' : '' }}>Pending</option>

            </select>
        </div>
        <div class="w-full mb-5">
            <label for="c_status" class="text-sm">Print Status</label>
            <select id="c_status" name="c_status"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <option value="" {{ $seminar->c_status === '' ? 'selected' : '' }}>Select</option>
                <option value="Ticket Generated" {{ $seminar->c_status === 'Ticket Generated' ? 'selected' : '' }}>Ticket
                    Generated</option>
                <option value="Confirm" {{ $seminar->c_status === 'Confirm' ? 'selected' : '' }}>Confirm</option>

            </select>
        </div>
        <div class="w-full mb-5">
            <label for="c_diseases" class="text-sm">Other Pay Status</label>
            <select id="c_diseases" name="c_diseases"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


                <option value="" {{ $seminar->c_diseases === '' ? 'selected' : '' }}>Select</option>
                <option value="mpaid" {{ $seminar->c_diseases === 'mpaid' ? 'selected' : '' }}>
                    Call Center Paid(Bkash)</option>
                <option value="rpaid" {{ $seminar->c_diseases === 'rpaid' ? 'selected' : '' }}>
                    Reception Paid</option>
            </select>
        </div>
        <div class="max-w-sm mx-auto">
            <label for="c_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="c_comment" name="c_comment" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment...">{{ $seminar->c_comment }}</textarea>
        </div>

        <div class="mb-4">
            <label for="name" class="block text-gray-900 font-bold text-xl mb-2">নাম<span
                    class="text-red-500">*</span></label>
            <input required type="text" id="name" name="name" value="{{ $seminar->name }}"
                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
        </div>

        <!-- Mobile Field -->
        <div class="mb-4">
            <label for="mobile" class="block text-gray-900 font-bold text-xl mb-2">মোবাইল নাম্বার<span
                    class="text-red-500">*</span></label>
            <input required type="text" id="mobile" name="mobile" value="{{ $seminar->mobile }}"
                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
        </div>

        <!-- Diseases Field -->
        <div class="mb-4">
            <label for="diseases" class="block text-gray-900 font-bold text-xl mb-2">আপনি কি রোগে ভুগতেছেন<span
                    class="text-red-500">*</span></label>
            <input required type="text" id="diseases" name="diseases" value="{{ $seminar->diseases }}"
                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
        </div>

        <!-- Address Field -->
        <div class="mb-4">
            <label for="address" class="block text-gray-900 font-bold text-xl mb-2">ঠিকানা<span
                    class="text-red-500">*</span></label>
            <textarea id="address" name="address" 
                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">{{ $seminar->address }}</textarea>
        </div>

        <!-- Age Field -->
        <div class="mb-4">
            <label for="age" class="block text-gray-900 font-bold text-xl mb-2">বয়স<span
                    class="text-red-500">*</span></label>
            <input required type="text" id="age" name="age" value="{{ $seminar->age }}"
                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
        </div>

        <!-- Comment Field -->
        <div class="mb-4">
            <label for="comment" class="block text-gray-900 font-bold text-xl mb-2">মন্তব্য</label>
            <textarea id="comment" name="comment" value="{{ $seminar->comment }}"
                class="w-full border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"></textarea>
        </div>

        @if (Auth::user()->role == 2)
            <button type="submit"
                class="text-white my-3 bg-blue-700/25 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        @endif
    </form>
@endsection
