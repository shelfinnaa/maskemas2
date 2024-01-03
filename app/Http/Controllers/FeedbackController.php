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
        return view('admin.feedback.index', compact('feedbacks', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $feedbacks = Feedback::all();
        $clients = User::all();
        return view('admin.feedback.create', compact('feedbacks', 'clients'));
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

        // Create a new product using Eloquent
        $feedback = Feedback::create($validatedData);

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

        return redirect('admin/feedback/')->with('message', 'Feedback Added Successfully');
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
    public function edit($feedback_id)
    {
        $feedback = Feedback::findorFail($feedback_id);
        $clients = User::all();
        return view('admin.feedback.edit', compact('feedback', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $feedback_id)
    {
        $validatedData = $request->validate([
            'person_name' => 'string|required',
            'person_title' => 'string|required',
            'feedback' => 'required',
            // 'client' => 'required',
            // ... other validation rules
        ]);

        $feedback = Feedback::find($feedback_id);

        if ($feedback) {
            $feedback->update([
                'person_name' => $validatedData['person_name'],
                'person_title' => $validatedData['person_title'],
                'feedback' => $validatedData['feedback'],
                // 'client' => $validatedData['client'],
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


            return redirect('feedback/')->with('message', 'Feedback Updated Successfully');
        } else {

            return redirect('feedback/')->with('message', 'Feedback not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($feedback_id)
    {
        $feedback = Feedback::findorFail($feedback_id);
        $feedback->delete();
        return redirect('feedback/')->with('message', 'Feedback Deleted Successfully');
    }
}
