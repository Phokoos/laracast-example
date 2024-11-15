<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index',
        ['jobs' => $jobs]
    );
});


// Index
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Create
Route::post('/jobs', function () {
    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required',
    ]);

    $job = new Job();
    $job->title = request('title');
    $job->salary = request('salary');
    $job->employer_id = 1;
    $job->save();

    return redirect('/jobs');
});

// Show
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
    //
});


// Edit
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => Job::find($job->id)]);
});


// Update
Route::put('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required',
    ]);

    $job->update(request(['title', 'salary']));

    return redirect('/jobs/' . $job->id);
})->name('jobs.update');


// Delete
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
})->name('jobs.destroy');


Route::get('/contact', function () {
    return view('contact');
});
