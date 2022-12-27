<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car_model;
use App\Models\Make;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Cars';
        $cars = Car::all();
        //var_dump();
        return view('admin.cars.index',compact('cars','title'));
    }
    public function create()
    {
        $title = 'Car Model';
        $makes = Make::all();
        return view('admin.cars.create',compact('makes','title'));
    }

    public function store(Request $request)
    {
        $model = new Car_model();

        $model->model = $request->input('model');
        $model->make = $request->input('make');

        if ($model->save()) {
            Session::flash('message','New Model has been Added');
            return redirect('admin/model');
        } else {

            Session::flash('message','Model Not Added !!');
            return redirect('admin/model');
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function show(Car_model $car_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_model $car_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_model $car_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_model $car_model)
    {
        //
    }
}
