<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_table;

class HomeController extends Controller
{
    function HomeIndex() {
        return view('welcome');
    }

    function DataInsert(Request $request){
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $isInsertSuccess = customer_table::insert(['firstname'=>$firstname,
                                                'lastname'=>$lastname,
                                                'email'=>$email,
                                                'phone'=>$phone,
        ]);
            
        if($isInsertSuccess) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed</h1>';
    }
}
