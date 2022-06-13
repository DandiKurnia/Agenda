<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Mapel;
use Illuminate\Http\Request;

class AdminAgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agenda::all();
        return view('agenda.admin.admin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datamapel = Mapel::where('user_id', auth()->user()->id)->get();
        // $datamapel1 = Mapel::all();
    return view('agenda.admin.tambahagenda', compact('datamapel')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'user_id' => 'required',
            'mapel_id' => 'required',
            'materi' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'absen' => 'required',
            'kelas' => 'required',
            'pembelajaran' => 'required',
            'link' => 'required',
            'dokumentasi' => 'required|image',
            'keterangan' => 'required',
        ]);

        $data = Agenda::create($request->all());

        if ($request->hasFile('dokumentasi')) {
            $request->file('dokumentasi')->move('imageagenda/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admin.index')->with('success', 'Create Success !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Agenda::find($id);
        $datamapel1 = Mapel::where('user_id', auth()->user()->id)->get();
        return view('agenda.admin.editagenda', compact('data','datamapel1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Agenda::find($id);
        $data->update($request->all());
        if ($request->hasFile('dokumentasi')) {
            $request->file('dokumentasi')->move('imageagenda/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin.index')->with('edit', 'Edit Success !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->route('admin.index')->with('delete', 'Delete Success !!');
    }
}
