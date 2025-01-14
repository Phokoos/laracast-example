<x-layout>
    <x-slot:heading>
        Crate Job page
    </x-slot:heading>


    <form method="POST" action="/jobs">
        @CSRF

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="font-semibold text-gray-900 text-base/7">Create a new job.</h2>
                <p class="mt-1 text-gray-600 text-sm/6">Please provide some details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block font-medium text-gray-900 text-sm/6">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title"
                                       class="block flex-1 border-0 bg-transparent px-3 placeholder:text-gray-400 text-gray-900 py-1.5 focus:ring-0 sm:text-sm/6"
                                       required
                                       placeholder="Shift Leader">
                            </div>

                            @error('title')
                                <div class="mt-2 text-red-600 text-sm/6">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="sm:col-span-4">
                        <label for="salary" class="block font-medium text-gray-900 text-sm/6">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="salary" id="salary"
                                       class="block flex-1 border-0 bg-transparent px-3 placeholder:text-gray-400 text-gray-900 py-1.5 focus:ring-0 sm:text-sm/6"
                                       placeholder="$50,000">
                            </div>
                            @error('salary')
                                <div class="mt-2 text-red-600 text-sm/6">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

{{--                    @if($errors->any())--}}
{{--                        <div class="sm:col-span-6">--}}
{{--                            <div class="mt-2 text-red-600 text-sm/6">--}}
{{--                                <ul class="list-disc pl-5 space-y-1">--}}
{{--                                    @foreach($errors->all() as $error)--}}
{{--                                        <li>{{$error}}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
            <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save
            </button>
        </div>
    </form>

</x-layout>
