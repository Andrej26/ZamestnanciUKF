<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers;
use App\Model\Zamestnanci;
use Illuminate\Http\Request;


class UKFController extends Controller
{

    public function index()
    {
        /*$table = Zamestnanci::all();*/
        return view('index'/*,['zamestnanci' =>$table]*/);
    }

    public function login()
    {
        return view('login');
    }

    public function prihlas(Request $request)
    {
        $username = $request->get('email');
        $password = $request->get('heslo');

        $checkuser = Zamestnanci::selectRaw("Count(*) as Total")->from('Zamestnanec')->where('email','=',$username)->first();


        if(intval($checkuser->Total) > 0){

            $getpassword = Zamestnanci::select('heslo')->where('heslo','=',$username)->first();

            if(password_verify($password,$getpassword->Password)){
                $request->session()->set('username',$username);
                return redirect('welcome');
            }
            else{
                return redirect('login');
            }

        }else{
           // return redirect('login');

            echo "nie je tu nic";
        }

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
    }


    public function create()
    {
        return view('DBControl.create');
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'meno' => 'required|max:20',
            'priezvisko' => 'required|max:20',
            'email' => 'required|max:50',
            'heslo' => 'required|max:20',
            'vek' => 'required|max:3'
        ]);

        DB::create($request->all());

        return redirect()->route('lolo.index')
            ->with('success','Emploier created successfully');

    }

    public function show($id)
    {
        $table = DB::find($id);
        return view('DBControl.show',compact('table'));
    }


    public function edit($id)
    {
        $table = DB::find($id);
        return view('DBControl.edit',compact('table'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'meno' => 'required',
            'priezvisko' => 'required',
            'email' => 'required',
            'heslo' => 'required',
            'vek' => 'required',
        ]);
        DB::find($id)->update($request->all());
        return redirect()->route('lolo.index')
            ->with('success','Emploier updated successfully');
    }

    public function destroy($id)
    {
        DB::find($id)->delete();
        return redirect()->route('lolo.index')
            ->with('success','Emploier deleted successfully');
    }

}