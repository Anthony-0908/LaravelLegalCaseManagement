<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Model\Customer;
use App\Model\Role;
use Session;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

=======
     
>>>>>>> e2967fbaf1afcd9b41c852d75297fb0fcef96885
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['title'] ="Permition";
        $data['role_id'] = $id;
        $permissions = DB::table('permission_role')
                            ->select('roles.slug as role_name','permission_id','permissions.slug as permission_name','permissions.*', 'roles.*')
                            ->leftJoin('roles','roles.id','=','permission_role.role_id')
                            ->rightJoin('permissions','permissions.id','=','permission_role.permission_id')
                            ->where('roles.id',$id)->get();

<<<<<<< HEAD
        $data['permissions_array'] = $permissions->pluck('permission_id');
        $user = Auth::guard('admin')->user();


        return view('admin.role.permission',$data);

=======
        $data['permissions_array'] = $permissions->pluck('permission_id');     
        $user = Auth::guard('admin')->user();   

         
        return view('admin.role.permission',$data);
    
>>>>>>> e2967fbaf1afcd9b41c852d75297fb0fcef96885
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            // dd($request->all());
<<<<<<< HEAD
         $role  =  Role::find($id) ;
=======
         $role  =  Role::find($id) ;        
>>>>>>> e2967fbaf1afcd9b41c852d75297fb0fcef96885

        $permissions = ($request->has('permission')) ? $request->permission : array() ;


        $role->permissions()->detach();
<<<<<<< HEAD

        if(count($permissions) > 0) {
            $role->permissions()->sync($permissions);
        }

=======
        
        if(count($permissions) > 0) {
            $role->permissions()->sync($permissions);
        }
        
>>>>>>> e2967fbaf1afcd9b41c852d75297fb0fcef96885
        // Session::flash('success', 'Permissions update successfully.');
        // return redirect()->route('role.index');
             // return back()->with('success',"Permissions update successfully.");
         Session::flash('success',"Permissions update successfully.");
        return redirect()->route('role.index');

        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
