<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    
    public function password(){

        return view('password-generator');

    }

    public function generate(Request $request){

        $formData = $request->validate([

            'length' => ['required', 'min:8', 'max:100'],

        ]);

        $length = $formData['length'];

        function generatePassword($length){

            $upper_case = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $lower_case = 'abcdefghijklmnopqrstuvwxyz';
            $numbers_ = '0123456789';
            $symbols_ = '!@#$%^&*()-_=+[]{}|:;,.?';

            
            $countChar = strlen($upper_case.$lower_case.$numbers_.$symbols_);
            $my_password = '';

            for ($i = 0; $i < $length; $i++) {
                $my_password .= $countChar[rand(0, $countChar - 1)];
            }
            return $my_password;

        }

        $password = generatePassword();

        if($password){

            return view('generated', compact('password'))->with('success', 'Password has been generated successfully');

        }else{
            return back()->with('error', 'Something went wrong, try again later');
        }


    }

}
