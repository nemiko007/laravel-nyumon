<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = \App\Models\Diary::all();
        return view('diary.index', ['diaries' => $diaries]);
    }

    public function create()
    {
        return view('diary.create');
    }

    public function store(Request $request)
    {
        $diary = new \App\Models\Diary();
        $diary->title = $request->title;
        $diary->body = $request->body;
        $diary->date = date('Y-m-d');
        $diary->save();

        return redirect('/diary');
    }

    public function show($id)
    {
        $diary = \App\Models\Diary::find($id);
        return view('diary.show', ['diary' => $diary]);
    }

    public function edit($id)
    {
        $diary = \App\Models\Diary::find($id);
        return view('diary.edit', ['diary' => $diary]);
    }

    public function update(Request $request, $id)
    {
        $diary = \App\Models\Diary::find($id);
        $diary->title = $request->title;
        $diary->body = $request->body;
        $diary->save();

        session()->flash('message', '更新しました');
        return redirect('/diary');
    }

    public function destroy($id)
    {
        $diary = \App\Models\Diary::find($id);
        $diary->delete();
        return redirect('/diary');
    }

    public function apiIndex()
    {
        $diaries = \App\Models\Diary::all();
        return response()->json($diaries);
    }
}
