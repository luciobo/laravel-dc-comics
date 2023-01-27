<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{

    public function index() {
        // recuperare tutti i dati della tabella products
        $comics = Comic::all();

            dump($comics);

        // Ordino per data in ordine decrescente e recupero solo i primi 10,
        // tramite la funzione limit
        // Product::orderBY("created_at", "desc")->limit(10)->get()

        // Filtriamo i dati in base al nome, li ordiniamo e recuperiamo SOLO
        // le colonne name e description.
        // Product::where("name", "LIKE", "%ino%")->orderBy("name")->select("name", "desc")->get();

        // possiamo specificare di ricevere solo determinate colonne tramite la funzione select
        // $products = Product::select("name", "description")->get();

        // dd($products);

        // ritornare una view dove mostrare questi dati
        return view("comics.index", [
            "comics" => $comics
        ]);

        // return view("products.index", compact("products"));
    }


    public function create()
    {
        return view("comics.create");
    }


    public function store(Request $request) {
        // recuperiamo tutti i dati inviati dal form sotto forma di array associativo
        $data = $request->all();

        dd($data);


        return redirect()->route("comics.show",);
    }


    public function show($id) {
        // dalla tabella products, devo cercare un elemento che abbia l'id indicato
        // $product = Product::find($id);

        // Il find or fail, lavora come il find, con la differenza che se NON trova
        // quello che cerca, non ritorna null, ma lancia un errore 404 not found.
        $comics = Comic::findOrFail($id);

        if (!$comics) {
            // faccio un altra ricerca o lancio un errore.
        }

        // dd($product);
        return view("comics.show", [
            "comics" => $comics
        ]);
    }

    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
