<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klient;
use App\Usluga;
use App\Zayavka;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
	
	//clients
    public function all()
	{
		$klients = DB::table('klient')->get();
		
		 $data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	
	}

	public function one($id)
	{
		$klients = DB::table('klient')->where('id', $id)->first();
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		
	}
	
    public function store(Request $request)
    {
		$name = $request->input('name');
		$klients = DB::table('klient')->insert(
		['name' => $name]);
		
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
	public function change(Request $request, $id)
	{
		 $name = $request->input('name');
		 $klients = DB::table('klient')->where('id', $id)->update(['name' => $name]);
		 $data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	}

	 public function deletee($id)
    {
		$klients = DB::table('klient')->where('id', '=', $id)->delete();
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
			return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
     }
    //uslugi
	
	public function all1()
	{
		$klients = DB::table('usluga')->get();
		
		 $data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	
	}

	public function one1($id)
	{
		$klients = DB::table('usluga')->where('id', $id)->first();
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		
	}
	
    public function store1(Request $request)
    {
		$text = $request->input('text');
		$klients = DB::table('usluga')->insert(
		['text' => $text]);
		
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
	public function change1(Request $request, $id)
	{
		 $text = $request->input('text');
		 $klients = DB::table('usluga')->where('id', $id)->update(['text' => $text]);
		 $data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	}

	 public function deletee1($id)
    {
		$klients = DB::table('usluga')->where('id', '=', $id)->delete();
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
			return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
     }
	 
	 
	 //zayavki
	 
	 
	public function all2()
	{
		$klients = DB::table('zayavka')->get();
		
		 $data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	
	}

	public function one2($id)
	{
		$klients = DB::table('zayavka')->where('id', $id)->first();
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		
	}
	
    public function store2(Request $request)
    {
		$id_klient = $request->input('id_klient');
		$id_uslugi = $request->input('id_uslugi');
		$klients = DB::table('zayavka')->insert(
		['id_klient' => $id_klient,'id_uslugi'=> $id_uslugi, 'data'=>date("Y-m-d")]);
		
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
	public function change2(Request $request, $id)
	{
		$id_klient = $request->input('id_klient');
		$id_uslugi = $request->input('id_uslugi');
		$klients = DB::table('zayavka')->where('id', $id)->update(['id_klient' => $id_klient,'id_uslugi'=>$id_uslugi]);
		 $data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
	 return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	}

	 public function deletee2($id)
    {
		$klients = DB::table('zayavka')->where('id', '=', $id)->delete();
		$data = array( 'url' => url()->current(),
           'response' =>  $klients,
		   'method' => $_SERVER['REQUEST_METHOD']);
			return response()->json($data,200,[],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
     } 
	 
}
