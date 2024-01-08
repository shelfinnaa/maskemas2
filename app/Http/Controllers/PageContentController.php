<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use App\Models\PageContent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageContentController extends Controller
{
    public function home()
    {
        $page_content = PageContent::all();
        $products = Product::all();
        $feedbacks = Feedback::all();
        $clients = User::all();
        return view('guesthome', compact('page_content', 'products', 'feedbacks', 'clients'));
    }

    public function about()
    {
        $page_content = PageContent::all();
        return view('about', compact('page_content'));
    }

    public function contact()
    {
        $page_content = PageContent::all();
        return view('contact', compact('page_content'));
    }


    public function edit(int $content_id)
    {
        try {
            $content = PageContent::findOrFail($content_id);
            return view('admin.page_content.edit', compact('content'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where no content is found, for example, redirect to a 404 page
            abort(404);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageContents = PageContent::all();
        $homeContents = $pageContents->where('page', 1);
        $aboutContents = $pageContents->where('page', 2);
        $contactContents = $pageContents->where('page', 3);
        return view('admin.page_content.index', compact('homeContents', 'aboutContents', 'contactContents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PageContent $pageContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $pageContentID)
    {


        $pageContent = PageContent::find($pageContentID);

        if ($pageContent) {
            $pageContent->update([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);

            if ($request->hasFile('image')) {
                $uploadPath = 'uploads/contents/';

                // Use the file method instead of input to get the file
                $imageFile = $request->file('image');

                if ( File::exists($pageContent->content)) {
                    File::delete($pageContent->content);
                }

                // Check if the file is not null
                if ($imageFile !== null) {
                    $extension = $imageFile->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $imageFile->move($uploadPath, $filename);
                    $finalImagePathName = $uploadPath . $filename;

                    $pageContent->update([
                        'content' => $finalImagePathName,
                    ]);
                } else {

                }
            }

            return redirect('admin/content')->with('message', 'Content Updated Successfully');

        } else {

            return redirect('admin/content')->with('message', 'Content not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageContent $pageContent)
    {
        //
    }
}
