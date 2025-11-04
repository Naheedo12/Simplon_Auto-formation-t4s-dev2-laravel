<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('services.index', ['services' => Service::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services', 'public');
            $data['image'] = $path;
        }

        Service::create($data);

        return redirect()->route('services.index')->with('success', 'Service créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('services.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $this->authorize('update', $service);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image si elle existe
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }

            // Sauvegarder la nouvelle image
            $path = $request->file('image')->store('services', 'public');
            $data['image'] = $path;
        }

        $service->update($data);

        return redirect()->route('services.show', $service)
            ->with('success', 'Service mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès.');
    }
}
