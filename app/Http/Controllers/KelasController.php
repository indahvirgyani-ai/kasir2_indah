<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         // Filter search
        $kelass = Kelas::query()
            ->when($request->search, function ($query, $search) {
                $query->where('id', 'like', "%{$search}%")
                    ->orWhere('nama_kelas', 'like', "%{$search}%")
                    ->orWhere('jenjang_id', 'like', "%{$search}%")
                    ->orWhere('jurusan_id', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%");
            })
            ->paginate(10);

        return view('kelas.index', compact('kelass'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
