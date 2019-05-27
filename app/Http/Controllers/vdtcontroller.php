<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vdtcontroller extends Controller
{
    public function page()
    {
    	return view('index.master');
    }
      public function price()
    {
    	return view('price.listprice');
    }
        public function Indexintroduce()
    {
    	return view('introduce.introduce');
    }
       public function Indexform()
    {
    	return view('form.form');
    }

}
