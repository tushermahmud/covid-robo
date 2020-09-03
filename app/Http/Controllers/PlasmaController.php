<?php

namespace App\Http\Controllers;

use App\Recipent;
use Illuminate\Http\Request;
use App\Donar;
use App\Http\Requests;

class PlasmaController extends Controller
{
    public function index(){
        $donars=Donar::where('status',0)->get();
        return view('plasma',compact('donars'));
    }
    public function create(){
        return view('plasmaCreate');
    }
    public function plasmaDonarStore(Requests\PlasmaDonarRequest $request){
        $data           =$this->handleRequest($request);
        Donar::create($data);
        return redirect('plasma')->with('status','The Donars information has been successfully added !');
    }
    public function recipentCreate(){
        return view('plasmaNeed');
       /* $data           =$this->handleRequest($request);
        dd($data);
        die();
        Recipent::create($data);
        return redirect('plasma')->with('status','The Recipent information has been successfully added !');*/
    }
    public function recipentStore(Requests\RecipentRequest $request){
        $data           =$this->handleRequest($request);
        Recipent::create($data);
        return redirect('plasma')->with('status','The Recipent information has been successfully added !');
    }
    private function handleRequest($request){
        $data=$request->all();
        if( $request->hasFile('covid_verified')){

            $image              =$request->file('covid_verified');
            $filename           =$image->getClientOriginalName();
            $uploadPath         =public_path('uploads/covidVerified');
            $destinationPath    =$uploadPath;
            $successUploaded=$image->move($destinationPath, $filename);

            $data['covid_verified']=$filename;

        }
        if( $request->hasFile('covid_recovered')){

            $image              =$request->file('covid_recovered');
            $filename           =$image->getClientOriginalName();
            $uploadPath         =public_path('uploads/covidRecovered');
            $destinationPath    =$uploadPath;
            $successUploaded=$image->move($destinationPath, $filename);

            $data['covid_recovered']=$filename;

        }
        if( $request->hasFile('covid_recipent_verified')){

            $image              =$request->file('covid_recipent_verified');
            $filename           =$image->getClientOriginalName();
            $uploadPath         =public_path('uploads/recipentVerified');
            $destinationPath    =$uploadPath;
            $successUploaded=$image->move($destinationPath, $filename);

            $data['covid_recipent_verified']=$filename;

        }
        if( $request->hasFile('plasma_need_verified_doctor')){

            $image              =$request->file('plasma_need_verified_doctor');
            $filename           =$image->getClientOriginalName();
            $uploadPath         =public_path('uploads/doctorVerified');
            $destinationPath    =$uploadPath;
            $successUploaded=$image->move($destinationPath, $filename);

            $data['plasma_need_verified_doctor']=$filename;

        }
        return $data;
    }
}
