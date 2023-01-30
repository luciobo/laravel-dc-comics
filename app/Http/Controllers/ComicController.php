<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{

    public function index()
    {
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


    public function store(Request $request)
    {
        // recuperiamo tutti i dati inviati dal form sotto forma di array associativo
        $data = $request->all();

        // dd($data);

        // Prima alternativa.
        // Tramite il metodo fill, assegniamo tutti i valori al nuovo prodotto, automaticamente
        $comics = new Comic();
        // Prende ogni chiave dell'array associativo e ne assegna il valore all'istanza del prodotto
        $comics->fill($data);
        $comics->save();



        return redirect()->route("comics.show", $comics->id);
    }

    //            creato senza dependecy injection
    public function show($id)
    {

        // dalla tabella products, devo cercare un elemento che abbia l'id indicato
        $comics = Comic::findOrFail($id);
        
        // dd($comics);
        // Il find or fail, lavora come il find, con la differenza che se NON trova
        // quello che cerca, non ritorna null, ma lancia un errore 404 not found.
        // $comics = Comic::findOrFail($id);
        // dd($product);
        return view("comics.show", [
            "comics" => $comics
        ]);
    }



    
    //           creato con dependecy injection
    public function edit(Comic $comics)
    {
        // $comics = Comic::findOrFail($id);

        return view("comics.edit", [
            "comics" => $comics
        ]);
    }



    public function update(Request $request, $id)
    {
        // recuperiamo tutti i dati inviati dal form sotto forma di array associativo
        $data = $request->all();

        // dd($data);
        // $comics = Comic::findOrFail($id);
        // Prima alternativa.
        // Tramite il metodo fill, assegniamo tutti i valori al nuovo prodotto, automaticamente
        $comics = new Comic();
        // Prende ogni chiave dell'array associativo e ne assegna il valore all'istanza del prodotto
        $comics->update($data);
        // $comics->save();

        return redirect()->route("comics.show", $comics->id);
    }


    public function destroy($id)
    {
        $comics = Comic::findOrFail($id);

        // sull'istanza del model, il metodo da usare è delete()
        $comics->delete();

        // Un volta eliminato l'elemento dalla tabella, dobbiamo reindirizzare l'utente da qualche parte.
        return redirect()->route("comics.index");
    }
}
