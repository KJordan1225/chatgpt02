<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class ChatController extends Controller
{
    public function formView(Request $request)
    {  
        return view('form');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function chatGPT(Request $request)
    {    
        $request->validate([
            'prompt' => 'required|string',
        ]);
 
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
         ])->post('https://api.openai.com/v1/responses',
         ["model"=> "gpt-4o",
         "input"=>$request->prompt
         ]);
     
        $output = "";
         
        if($response->successful()){
            $output = $response->json()['output'][0]['content'][0]['text'];           
        }
        else{
          $output = "Something Went Wrong";         
        }
 
         return view('form',compact('output'));
 
        
 
    }
 
}