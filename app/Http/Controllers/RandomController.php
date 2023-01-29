<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Random;
use App\Models\Breakdown;

class RandomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


   public function generate() {
    $number_of_iterations = rand(5,10);

    for($i = 0; $i < $number_of_iterations; $i++) {
         $random = rand(1,7);

        $random_word = '';

        if($random == 1) {
            $random_word = 'The';
        }

        else if($random == 2) {
            $random_word = 'wheels';
        }

        else if($random == 3) {
            $random_word = 'on';
        }

        else if($random == 4) {
            $random_word = 'bus';
        }

        else if($random == 5) {
            $random_word = 'round';
        }

        else if($random == 6) {
            $random_word = 'day';
        }

        else if($random == 7) {
            $random_word = 'long';
        }

        $randoms = new Random;

        $randoms->value = $random_word;

        $randoms->save();




        $breakdown_number = rand(1,5);

        $breakdown_word = '';

        if($breakdown_number == 1) {
            $breakdown_word = 'Type';
        }

        else if($breakdown_number == 2) {
            $breakdown_word = 'on';
        }

       else if($breakdown_number == 3) {
            $breakdown_word = 'a';
        }

       else if($breakdown_number == 4) {
            $breakdown_word = 'swirl';
        }

        else if($breakdown_number == 5) {
            $breakdown_word = 'custom';
        }

        $breakdowns = new Breakdown;

        $breakdowns->value = $breakdown_word;

        $breakdowns->random_id = $randoms->id;

        $breakdowns->save();
    }

    $random = new Random;
    $data['loop'] = $random->all();
    // $breakdown = new Breakdown;
    // $data['loop'] = $breakdown->random()->get();
    // dd($data['loop']);
    return view('welcome', $data);
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
