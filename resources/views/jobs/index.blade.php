<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block rounded-lg border border-gray-200 px-4 py-6 cursor-pointer">
                <div class="text-sm text-blue-500 bold">{{$job->employer->name}}</div>
                <div>
                    <strong>{{$job['title']}}:</strong> {{$job['salary']}}
                </div>
            </a>
        @endforeach
    </div>


    {{-- Pagination --}}
    <div class="mt-8">
        {{$jobs->links()}}
    </div>
</x-layout>
