<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PokemonController extends Controller
{
    // public function index(Request $request){

    //     $name = $request->name;
    //     $email = $request->email;
    //     $street = $request->adress->street;

    //     return view('welcome');
    // }


    public function index(){
        $pokemon = Pokemon::all();
        $pokemon->groupBy('element');
        return view('pokemons.listePokemon',  $pokemon);
    }

    public function pageRecap(Request $request){
        $pok = Pokemon::all();
        $pok = $pok->where('id', '=', $request->id)->first();
       // dd($pok);
        return view('pokemons.recap',[
            'pokemon' => $pok
        ]);
    }


    public function create(Request $request){


        $users = User::all();
        $users->get(0)->pokemons;
        $users->get(1)->pokemons;
        $users->get(2)->pokemons;

        $users = User::with(['pokemons'])->get();
        $users = User::with(['pokemons', 'user_id', 'label'])->get(0);
        $users->get(0)->pokemons;


        $request->validate([
            // 'provider_name' => 'required|min:1|max:20',
            // 'provider_email' => 'required|email',
            'Element' => Rule::in(['Feu', 'Eau', 'Terre', 'Vent', 'PSY']),
            // 'File' => 'nullable|image|extensions:jpg, jpeg, png|mimes: jpg, jpeg, png|max:2048',
            'Age' => 'gt:15',
            // 'Quantity' => 'gt:0|lte:10000'
        ]);


        $pokemon = new Pokemon();
        $pokemon->user_id = 1;
        $pokemon->breed = $request->Race;
        $pokemon->age = $request->Age;
        $pokemon->element = $request->Element;   
        $pokemon->save();

        return to_route('exo1.show', ['id' => $pokemon->id]);


        // $Race = $request->Race;
        // $Element = $request->Element;
        // $Age= $request->Age;

        // return to_route('exo1.pageRecap', [
        //     'Race' => $Race, 
        //     'Element' => $Element,
        //     'Age' => $Age
        // ]);
    }


    public function store(Request $request){

    }
    
    public function routage(){       
        return redirect('URL');
        return to_route('pokemon.index');
        return back()->with([
            'message' => 'Pokemon create suceffuly'
        ]);
    }

    public function listPokemon(){
        return view('pokemons.listePokemon',  ['pokemons' => Pokemon::paginate(15)]);
    }

    public function show(Request $request){

        $pokemon = Pokemon::find($request->id);
        dd($pokemon);
    }

    public function searchBar(Request $request){
        $query = Pokemon::query();
        $searchText = $request->seachtexh;
        if($searchText){
            $query->where(function($query) use ($searchText){
                foreach(['champ1', 'champ2', 'champ3'] as $col){
                    $query->orWhere(
                        $col, 'like', '%'.$searchText.'%'
                    );
                }
            });
        }
        return view('pokemons.listePokemon', ['pokemons' => $query->paginate(15)]);
    }

    public function update(Request $request){
        $id = $request->id;
        return $id;
    }   


    public function delete(Request $request){
        $pok = Pokemon::all();
        $pok = Pokemon::where('element', '=', 'Feu');

        $pok = Pokemon::where(function($query) use ($request){
            $query->where('element', '=', 'Feu') // simule les parentèses autour des 2 premier where
                ->where('age', '>', 20);
        })
        ->orWhere('age', '<', 20);
    }

    public function toJSON(Request $request){
        $name = $request->name;
        $email = $request->email;
        $distanceFromSerever = $request->distanceFromSerever;
        $isHuman = $request->isHuman;

        return response()->json([
            "name" => $name,
            "email" => $email,
            "distanceFromServer" => $distanceFromSerever,
            "isHuman" => $isHuman
        ]);
    }


    public function collectionTest(){
        $pok = Pokemon::all(); // requêt sql effectué 

        dd( 
            $pok->sum('age'), // gestin de collection hors BDD
            $pok->max('age'),
            $pok->pluck('label')->toArray(),
            $pok->pluck('label'), // collection of label 
            $pok->pluck('label', 'id'),
            $pok->random(),
            $pok->random(3), // get collection of 3 random pokemons
            $pok->keyBy('id'),
            $pok->keyBy('element'),// collection of id
            $pok->keyBy('id')->get(34), // select pokemons at id 34
            $pok->groupBy('user_id'), // restructure selon un critère 
            $pok->where('age', '<', 20) // ce n'est toujours pas du SQL -> / :: 

        ); // on agit pas directement sur la collection mais sur une copie !!! 

    }

}