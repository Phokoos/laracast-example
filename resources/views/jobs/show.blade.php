<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>

    <h2><strong>{{$job['title']}}</strong></h2>

    <p>Salary: {{$job['salary']}} per year.</p>

    <p class="mt-6">
        <x-button href="/jobs/{{$job['id']}}/edit">Edit Job</x-button>
    </p>
</x-layout>
