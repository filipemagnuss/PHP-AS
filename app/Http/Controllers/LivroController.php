<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livro;
use App\Models\Autor;


class LivroController extends Controller
{
        public function index()
    {
        $livros = Livro::all();
        return view('livro.index', compact('livros'));
    }

    public function create()
    {
        return view('livro.create');
    }


    public function store(Request $request)
        {   

            Livro::create($request->all());
            return redirect('livro')->with('success', 'livro created successfully.');
        }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livro.edit', compact('livro'));
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($request->all());
        return redirect('livro')->with('success', 'livro updated successfully.');
    }

    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect('livro')->with('success', 'livro deleted successfully.');


    }
}
