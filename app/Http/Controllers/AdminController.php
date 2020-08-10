<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\Admin;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Redirect;
use Image;
use Carbon\Carbon;

class AdminController extends Controller
{ 

  private $totalPage = 5;

  public function __construct(User $usuarios)
  {
    $this->middleware('admin');
    $this->repository = $usuarios;
  }

  public function index()
  {
    return view('admin.index');
  }

  public function login()
  {
  	return view('auth.login-admin');
  }

  public function postLogin(Request $request)
  {
    $validator = validator($request->all(),[
      'email'    => 'required|email|max:255|',
      'password' => 'required|min:5|' 
    ]);

    if($validator->fails())
    {
      return redirect('admin/login')
      ->withErrors($validator)
      ->withInput();
    }

    $credenciais = [
      'email'    => $request->get('email'),
      'password' => $request->get('password')];

  	if ( auth()->guard('admin')->attempt($credenciais))
    {
      return redirect('/admin');
    }else{
      return redirect('/admin/login')
        ->withErrors(['errors'=>'Login Inválido!'])
        ->withInput();
    }
  }

  public function logout()
  {
    auth()->guard('admin')->logout();
    return redirect('/admin/login');
  }

  public function listaUsuario()
  {
    $usuarios = User::paginate($this->totalPage);
    $conta= 0;

    return view('admin.consulta.usuarios',compact(
      'usuarios',
      'conta'
    ));
  }

  public function adminSearch(Request $request, User $usuarios)
  {
    $dataForm = $request->all();
    $usuarios = $usuarios->search($dataForm, $this->totalPage);

    return view('admin.consulta.usuarios',compact('usuarios'));
  }

  public function Adminperfil()
  {         
    return view('admin.perfil.perfil-admin',array('user'=>Auth::user()));
  }

  public function AdminAtualizaperfil(Request $request)
  {
    if($request->hasFile('avatar'))
    {
      $avatar = $request->file('avatar');
      $nome_arquivo = time() . '.' . $avatar->getClientOriginalExtension();
      
      Image::make($avatar)
        ->resize(300, 300)
        ->save( public_path('/imagens/avatar/' . $nome_arquivo));

      $user = Auth::user();
      $user->avatar = $nome_arquivo;
      $user->save();

    }

    return view('admin.perfil.perfil-admin',array('user'=>Auth::user()));
  }

  public function show($id)
  {
    if (!$usuarios = $this->repository->find($id))
      return redirect()->back();

    return view('admin.consulta.detalhes', [
      'usuarios' => $usuarios
    ]);
  }
}