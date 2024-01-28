<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\TravelPack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TravelPackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travels = TravelPack::orderBy('id', 'asc')->get();
        return view('admin.travel.index', compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.travel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'             => ['required'],
            'slug'              => ['required'],
            'location'          => ['required'],
            'about'             => ['required'],
            'featured_event'    => ['required'],
            'language'          => ['required'],
            'foods'             => ['required'],
            'departure_date'    => ['required'],
            'duration'          => ['required'],
            'type'              => ['required'],
            'price'             => ['required'],
            'image'             => ['required', 'max:2048'],
        ]);

        $travel = TravelPack::create([
            'title'             => $request->title,
            'slug'              => $request->slug,
            'location'          => $request->location,
            'about'             => $request->about,
            'featured_event'    => $request->featured_event,
            'language'          => $request->language,
            'foods'             => $request->foods,
            'departure_date'    => $request->departure_date,
            'duration'          => $request->duration,
            'type'              => $request->type,
            'price'             => $request->price,
        ]);

        foreach ($request->file('image') as $image) {
            $namaFile = $image->getClientOriginalName();
            $image->move(public_path('gallery'), $namaFile);

            Gallery::create([
                'travel_pack_id'    => $travel->id,
                'image'              => 'gallery/' . $namaFile
            ]);
        }



        toast('Berhasil', 'success');
        return to_route('travel.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(TravelPack $travel)
    {
        $travel->load('gallery');
        return view('admin.travel.show', compact('travel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TravelPack $travel)
    {
        $travel->load('gallery');
        return view('admin.travel.edit', compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TravelPack $travel, Gallery $gallery)
    {
        $request->validate([
            'title'             => ['required'],
            'slug'              => ['required'],
            'location'          => ['required'],
            'about'             => ['required'],
            'featured_event'    => ['required'],
            'language'          => ['required'],
            'foods'             => ['required'],
            'departure_date'    => ['required'],
            'duration'          => ['required'],
            'type'              => ['required'],
            'price'             => ['required'],
        ]);

        $travel->update([
            'title'             => $request->title,
            'slug'              => $request->slug,
            'location'          => $request->location,
            'about'             => $request->about,
            'featured_event'    => $request->featured_event,
            'language'          => $request->language,
            'foods'             => $request->foods,
            'departure_date'    => $request->departure_date,
            'duration'          => $request->duration,
            'type'              => $request->type,
            'price'             => $request->price,
        ]);

        $travel->load('gallery');
        if ($request->file('image')) {
            if ($travel->gallery) {
                foreach ($travel->gallery as $item) {
                    File::delete($item->image);
                }
            }
            foreach ($request->file('image') as $image) {
                $namaFile = $image->getClientOriginalName();
                $image->move(public_path('gallery'), $namaFile);

                $gallery->update([
                    'travel_pack_id'    => $travel->id,
                    'image'             => 'gallery/' . $namaFile
                ]);
            }
        }

        toast('Berhasil', 'success');
        return to_route('travel.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TravelPack $travel)
    {
        $travel->delete();

        toast('Berhasil', 'success');
        return to_route('travel.index')->with('success');
    }
}
