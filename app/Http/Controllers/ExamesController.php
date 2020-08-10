<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Image;
use App\Exame;

class ExamesController extends Controller
{

  public function __construct(Exame $exames)
  {
    $this->repository = $exames;
  }

  public function index()
  {
  	$exames = Exame::all();
  	return view('usuario.exame.exame',compact('exames'));
  }

  public function show($id)
  {

    if (!$exames = $this->repository->find($id))
      return redirect()->back();

    return view('usuario.exame.detalhes', [
      'exames' => $exames
    ]);
  }
}
