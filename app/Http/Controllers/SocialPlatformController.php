<?php

namespace App\Http\Controllers;

use App\Models\SocialPlatform;
use Illuminate\Http\Request;

class SocialPlatformController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $platforms = SocialPlatform::all(); // Fetch all platforms
        $title = trans('admin_validation.Platform List');

        return view('admin.social-platform.index', compact('platforms', 'title'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.social-platform.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);
        SocialPlatform::create($request->all());

        return redirect()->route('social-platform.index')->with('success', 'Platform created successfully.');
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $platform = SocialPlatform::findOrFail($id);
        return view('admin.social-platform.edit', compact('platform'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $platform = SocialPlatform::findOrFail($id);
        $platform->update($request->all());

        return redirect()->route('social-platform.index')->with('success', 'Social Platform updated successfully.');
    }
    public function toggleStatus(Request $request, $id)
    {
        $platform = SocialPlatform::findOrFail($id);

        // Toggle the status
        $platform->status = !$platform->status;
        $platform->save();
        return response()->json('Social Platform Status Updated successfully');

    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $platform = SocialPlatform::findOrFail($id);
        $platform->delete();

        return redirect()->route('social-platform.index')->with('success', 'Platform deleted successfully.');
    }
}
