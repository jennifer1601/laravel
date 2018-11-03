<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('calculator');
    }

    public function calculate(Request $request)
    {
      $request->angka1;
      $request->angka2;
      switch($request->submit){
        case "+":
          $hasil = $request->angka1 + $request->angka2;
          $data["hasil"] = $hasil;
          return view("calculator", $data);
        case "-":
          $hasil = $request->angka1 - $request->angka2;
          $data["hasil"] = $hasil;
          return view("calculator", $data);
        case "/":
          $hasil = $request->angka1 / $request->angka2;
          $data["hasil"] = $hasil;
          return view("calculator", $data);
        case "*":
          $hasil = $request->angka1 * $request->angka2;
          $data["hasil"] = $hasil;
          return view("calculator", $data);

      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
