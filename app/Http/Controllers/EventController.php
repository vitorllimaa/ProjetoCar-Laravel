<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class EventController extends Controller
{
    public function index() {

        $car = Cars::all();
        
        return view('home', [
            "listCars" => $car
        ]);
    }

    public function create() {

        return view('register');
    }

    public function store(Request $request) {

        $car = new Cars;

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;

        $car->save();

        return redirect('/')->with('msg', 'Carro cadastrado com sucesso!');

    }

    public function edit($id) {

        $car = Cars::findOrFail($id);

        return view('edit', [
            'editCar' => $car
        ]);
    }

    public function update(Request $request) {

        Cars::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'Carro editado com sucesso!');
    }

    public function destroy($id) {

        Cars::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Carro Excluído com sucesso!');
    }
}
