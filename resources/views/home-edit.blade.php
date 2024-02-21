@extends('main')
@section('content')
    @include('layouts.navigation')
    <div class="text-4xl text-center awcpay-header py-2 font-semibold mb-4">Seminar Registrations Update of
        {{ $seminar->name }}</div>



    <form action="{{ route('seminar.update', $seminar->id) }}" method="POST"
        class="max-w-md mx-auto my-8 bg-slate-400 p-5 rounded-xl">
        @csrf
        @method('PUT')

        <div class="w-full mb-5">
            <label for="c_status" class="text-sm">Call Status</label>
            <select id="c_status" name="c_status"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" {{ $seminar->c_status === '' ? 'selected' : '' }}>Don't Call</option>
                <option value="Confirm" {{ $seminar->c_status === 'Confirm' ? 'selected' : '' }}>Confirm</option>
                <option value="Cancel" {{ $seminar->c_status === 'Cancel' ? 'selected' : '' }}>Cancel</option>
                <option value="No Response" {{ $seminar->c_status === 'No Response' ? 'selected' : '' }}>No Response
                </option>
                <option value="Switch Off" {{ $seminar->c_status === 'Switch Off' ? 'selected' : '' }}>Switch off
                </option>
                <option value="Call Later" {{ $seminar->c_status === 'Call Later' ? 'selected' : '' }}>Call Later
                </option>
            </select>
        </div>
        <div class="w-full mb-5">
            <label for="c_diseases" class="text-sm">Confirm Diseases</label>
            <select id="c_diseases" name="c_diseases"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" {{ $seminar->c_status === '' ? 'selected' : '' }}>Don't Confirm</option>
                <option value="Cholesterol" {{ $seminar->c_status === 'Cholesterol' ? 'selected' : '' }}>Cholesterol
                </option>
                <option value="Vitiligo" {{ $seminar->c_status === 'Vitiligo' ? 'selected' : '' }}>Vitiligo</option>
                <option value="Diabetes" {{ $seminar->c_status === 'Diabetes' ? 'selected' : '' }}>Diabetes</option>
                <option value="Cancer" {{ $seminar->c_status === 'Cancer' ? 'selected' : '' }}>Cancer</option>
                <option value="Heart Problems" {{ $seminar->c_status === 'Heart Problems' ? 'selected' : '' }}>Heart
                    Problems</option>
                <option value="Autism" {{ $seminar->c_status === 'Autism' ? 'selected' : '' }}>Autism</option>
                <option value="Gallstones" {{ $seminar->c_status === 'Gallstones' ? 'selected' : '' }}>Gallstones</option>
                <option value="Psoriasis" {{ $seminar->c_status === 'Psoriasis' ? 'selected' : '' }}>Psoriasis</option>
                <option value="Mental Health Issues" {{ $seminar->c_status === 'Mental Health Issues' ? 'selected' : '' }}>
                    Mental Health Issues</option>
                <option value="Digestive Problems" {{ $seminar->c_status === 'Digestive Problems' ? 'selected' : '' }}>
                    Digestive Problems</option>
                <option value="Sleep Problems" {{ $seminar->c_status === 'Sleep Problems' ? 'selected' : '' }}>Sleep
                    Problems</option>
                <option value="(IBS) Liver"
                    {{ $seminar->c_status === '(IBS) Liver' ? 'selected' : '' }}>Irritable Bowel
                    Syndrome (IBS) Liver</option>
            </select>

        </div>

        <div class="max-w-sm mx-auto">
            <label for="c_comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="c_comment" name="c_comment" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment...">{{ $seminar->c_comment }}</textarea>
        </div>

        <button type="submit"
            class="text-white my-3 bg-blue-700/25 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
    </form>
   
@endsection
