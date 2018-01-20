<?php namespace Bantenprov\ProfilNpwp\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\ProfilNpwp\Facades\ProfilNpw;
use Bantenprov\ProfilNpwp\Models\ProfilNpwpModel;
use App\User;
use Validator;

/**
 * The ProfilNpwpController class.
 *
 * @package Bantenprov\ProfilNpwp
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilNpwpController extends Controller
{
    public function demo()
    {
        return "profil";
    }

    public function index()
    {
    	$profils = ProfilNpwpModel::all();
        return view('profil-npwp::index',compact('profils'));
    }


    public function create()
    {
    	$users = User::all();
        return view('profil-npwp::create',compact('users'));
    }

    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(),[ 
    		'user_id' => 'required|unique:profil_npwp,user_id',
    		'no_npwp' => 'required', 
    		'nama_terdaftar' => 'required', 
    		'tgl_daftar' => 'date|required', 
    		'alamat_terdaftar' => 'required', 
    		'status' => 'required', 
    	]); 
    	if($validator->fails()){ 
    		return redirect()->back()->withErrors($validator)->withInput();
    	}

        ProfilNpwpModel::create($request->all());
        return redirect()->back()->with('message','add success');
    
    }

     public function edit($id)
    {
    	$users = User::all();
        $profil = ProfilNpwpModel::find($id);
        return view('profil-npwp::edit',compact('profil','users'));
    }

    public function update(Request $request, $id)
    {	


    	$validator = Validator::make($request->all(),[ 
    		'user_id' => 'required',
    		'no_npwp' => 'required', 
    		'nama_terdaftar' => 'required', 
    		'tgl_daftar' => 'date|required', 
    		'alamat_terdaftar' => 'required', 
    		'status' => 'required',
    	]); 
    	if($validator->fails()){ 
    		return redirect()->back()->withErrors($validator)->withInput();
    	}

         ProfilNpwpModel::where('id',$id)->update([
            "user_id" => $request->user_id,
            "no_npwp" => $request->no_npwp,
            "nama_terdaftar" => $request->nama_terdaftar,
            "tgl_daftar" => $request->tgl_daftar,
            "alamat_terdaftar" => $request->alamat_terdaftar,
            "status" => $request->status
        ]);
        return redirect()->back()->with('message','update success');
    }

    public function destroy($id)
    {
        ProfilNpwpModel::find($id)->delete();

        return redirect()->back();
    }

}
