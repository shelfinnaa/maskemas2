<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        $clients = collect(User::all());
        return view('feedback.index', compact('feedbacks', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $feedbacks = Feedback::all();
        $clients = User::all();
        return view('feedback.create', compact('feedbacks', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'person_name' => 'string|required',
            'person_title' => 'string|required',
            'feedback' => 'required',
            'client' => 'required',
            // ... other validation rules
        ]);

        if ($request->hasFile('person_image')) {
            $validateData = $request->validate([
                'person_image' => 'image'
            ]);

            $imageFile = $validateData['person_image'];
            $uploadPath = 'uploads/feedback/';
            $extension = $imageFile->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $imageFile->move($uploadPath, $filename);
            $finalImagePathName = $uploadPath . $filename;

            $validateData['person_image'] = $finalImagePathName;
        }

        // Create a new product using Eloquent
        $feedback = Feedback::create($validatedData);

        return redirect('feedback.index')->with('message', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
