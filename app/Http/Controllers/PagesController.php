<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\gestionSociosMailable;
use App\Mail\contactoMailable;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
  public function home(){

    return view('home');

  }

  public function enviar_contacto(Request $req){
    $correo= new contactoMailable($req->input('email'),$req->input('asunto'),$req->input('mensaje'));
    Mail::to('info@lalagrimatattoo.com')->send($correo);
    return view('home');
  }
}
