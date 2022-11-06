<?php

namespace App\Http\Controllers;

use App\Models\Menssagen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Main extends Controller
{
    public function x(){
        return view('mensagem_form');
    }

    public function init(Request $request){
        
        
    

        $request->validate(
            [
                'text_from' => 'required|email|max:50',
                'text_to' => 'required|email|max:50',
                'text_message' => 'required|max:250'
            ],

            [
                'text_form.required' => 'From is required',
                'text_from.email' => 'From must be a valid email',
                'text_from.max' => 'From must have less than 50 chars',
                'text_to.required' => 'To is required',
                'text_to_email' => 'To must be a valid email',
                'text_to_max' => 'To must have less than 50 chars',
                'text_message.required' => 'Message is required',
                'text_message.max' => 'From must have less than 250 chars'
            ]
        );

        $purl_code = Str::random(52);

        $mensagen = new Menssagen();
        $mensagen->send_from = $request->text_from;
        $mensagen->send_from = $request->text_to;
        $mensagen->send_from = $request->text_form;
        $mensagen->purl_confirmation = $purl_code;
        $mensagen->save();

    }

    public function confirm($purl){
        echo 'confir';
    }

    public function read($purl){
        
    }
}
