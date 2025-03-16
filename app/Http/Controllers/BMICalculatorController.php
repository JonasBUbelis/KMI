<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMICalculatorController
{
    public function calculate(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'height' => 'required|numeric|min:1',
            'weight' => 'required|numeric|min:1'
        ]);


        $height = $request->input('height') / 100;
        $weight = $request->input('weight');


        $bmi = $weight / ($height * $height);


        return view('result', compact('bmi'));
    }
}
