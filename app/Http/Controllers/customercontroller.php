<?php

namespace App\Http\Controllers;
use Session;
use App\Mail\OrderShipped;
use App\Mail\feedMail;
use App\Mail\TestMail;
use App\Models\customer;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
class customercontroller extends Controller
{
   public function register(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'pass'=>'required|min:8',

        ]);
        $otp=rand(1,9999);
        $user= new customer();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->pass;
        $user->otp=$otp;

        $dis=$user->save();

        if($dis){

            Mail::to($user->email)->send(new testMail());

            Session::put('cname',$request->name);
            Session::put('cemail',$request->email);
            Session::put('cpass',$request->pass);
            Session::put('cotp',$otp);
            Schema::connection('mysql')->create($user->name,function($table){
                $table->increments('id');
                $table->String('items');
                $table->String('price');
                $table->String('image');
                $table->String('size');
                $table->String('color');
                $table->String('count');
                $table->String('total');
            });

            return redirect('/home');

            

        }

    }

    public function login(Request $request){
        $request->validate([
            
            'email'=>'required',
            'pass'=>'required|min:8',

        ]);
         $user= new customer();
         $data=customer::where('email','=',$request->email)->first();


         if($data){

            if($data['password']==$request->pass){
            
            Session::put('cname',$data['name']);
            Session::put('cemail',$data['email']);
            Session::put('cpass',$data['password']);
                return redirect('/home');
            }

         }

          

}
public function itemadd(Request $request){


    $total=($request->prize)*($request->count);
               DB::table(Session::get('cname'))->insert([
          'items' => $request->itemname,
          'price' => $request->prize,
          'image' => $request->imagename,
          'count' => $request->count,
          'size'  => $request->size,
          'color' => $request->color,
          'total' =>  $total,
          
   ]);

   return redirect('/home');
  }

  public function actcontact(Request $request){

    Mail::to($request->email)->send(new feedMail());

    Session::put('fname',$request->name);
    Session::put('femail',$request->email);
    Session::put('fsubject',$request->subject);
    Session::put('fbody',$request->body);


    return redirect('/home');
    

  }


}  
