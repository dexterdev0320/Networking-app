<?php

namespace App\Http\Controllers;

use App\Code;
use App\Http\Requests\CreateCodeRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CodeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $codes = Code::paginate(10);

        return view('code.index', compact('codes'));
    }

    public function create()
    {
        return view('code.create');
    }

    public function store(CreateCodeRequest $request)
    {
        for ($i=0; $i < $request->code; $i++) { 
            Code::create([
                'user_id' => auth()->user()->id,
                'code' => Str::random(15),
            ]);
        }

        return redirect('code')->with('message', 'Code generated Successfully');
    }

    public function show(Code $code)
    {
        //
    }

    public function edit(Code $code)
    {
        //
    }

    public function update(Request $request, Code $code)
    {
        //
    }

    public function destroy(Code $code)
    {
        //
    }
}
