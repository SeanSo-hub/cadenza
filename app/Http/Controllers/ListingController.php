<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(8)
        ]);
    }

    public function show($id)
    {
        $listing = Listing::find($id);

        if ($listing) {
            return view('listings.show', [
                'listing' => Listing::find($id)
            ]);
        } else {
            abort(404);
        }
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'organizer' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'contact_number' => ['required', 'numeric', 'digits_between:7,15'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('event_banner')) {
            $formFields['event_banner'] = $request->file('event_banner')->store('event-banners', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Gig created successfully!');
    }

    public function edit($id)
    {
        $listing = Listing::find($id);
        
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $id) {
        $formFields = $request->validate([
            'title' => 'required',
            'organizer' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'contact_number' => ['required', 'numeric', 'digits_between:7,15'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('event_banner')) {
            $formFields['event_banner'] = $request->file('event_banner')->store('event-banners', 'public');
        }

        $id->update($formFields);

        return back()->with('message', 'Gig updated successfully!');
    }

    public function destroy($id) {
        $listing = Listing::where('id', $id);
        $listing->delete();

        return redirect('/')->with('message', 'Listing deleted successfully!');
    }
    
}
