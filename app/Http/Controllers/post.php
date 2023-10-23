<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{
    public function create()
    {
        $data['post_data'] = DB::table('try1_table')->get();
        return view('post/index', $data);

        // dd($data);
    }

    public function store(Request $request)
    {
        $data['name'] = $request['title'];
        $data['details'] = $request['details'];

        DB::table('try1_table')->insert($data);
        // dd(DB::table('try1_table')->get());
        return redirect('post');
    }

    public function show_single($id)
    {
        $data['post_data'] = DB::table('try1_table')->get()->where('id', $id)->first();
        return view('post/show', $data);
        // dd($data);
    }

    public function  edit($id)
    {
        $data['posts'] = DB::table('try1_table')->get()->where('id', $id)->first();
        return view('post/edit', $data);
    }


    public function  update(Request $request, $id)
    {
        $data['name'] = $request['name'];
        $data['details'] = $request['details'];
        DB::table('try1_table')->where('id', $id)->update($data);

        return redirect('post');
    }


    public function destroy(Request $request, $id)
    {
        DB::table('post')->where('id', $id)->delete();
    }
}
