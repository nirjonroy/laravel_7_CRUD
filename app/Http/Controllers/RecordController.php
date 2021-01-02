<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\facades\Redirect;
use App\Http\Requests;
use DB;
class RecordController extends Controller
{
    public function index(){
    	return view('admin.create_record');
    }
    public function save_record(Request $request){
    	$data = array();
    	$data['id'] = $request->id;
    	$data['name'] = $request->name;
    	$data['mobile'] = $request->mobile;
    	$data['email'] = $request->email;
    	$data['address'] = $request->address;
    	$data['publication_status']=$request->publication_status;
    	$image = $request->file('photo');    	
    	if($image){
    	$image_name = rand(1, 999);
    	$ext = strtolower($image->getClientOriginalExtension());
    	$image_full_name = $image_name. '.'. $ext;
    	$upload_path = 'photo/';
    	$image_url = $upload_path. $image_full_name;
    	$success = $image->move($upload_path, $image_full_name);
    	if($success)
    	{
    		$data['photo'] = $image_url;
    		DB::table('records')->insert($data);
    		return Redirect::to('/dashboard');
    	}
}

    	$data['photo'] = '';
    	DB::table('record')->insert($data);
    		return Redirect::to('create_record');
    }
    public function all_record(){
    	$all_record_info = DB::table('records')->get();
    	$manage_record = view('admin.dashboard')
    	->with('all_record_info', $all_record_info);
    	return view('admin_layout')
    	->with('admin.dashboard', $manage_record);

    } 

    public function deactive_record($id){
        DB::table('records')

            ->where('id', $id)
            ->update(['publication_status' => 0]);
            return Redirect::to('/dashboard');
    }
    public function active_record($id){
            DB::table('records')
            ->where('id', $id)
            ->update(['publication_status' => 1]);
            return Redirect::to('/dashboard');
    }
    public function delete_record($id){
            DB::table('records')
            ->where('id', $id)
            ->delete();
            return Redirect::to('/dashboard');
    }
    public function edit_record($id){
        $record_info = DB::table('records')
        ->where('id', $id)
        ->first();
        $record_info = view('admin.edit_record')
        ->with('record_info', $record_info);
        return view('admin_layout')
        ->with('admin.edit_record', $record_info);
    }
    

     public function update_record(Request $request, $id)
       {
        $data = array();
        $data['name']=$request->name;
        $data['mobile'] = $request->mobile;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $image = $request->file('photo');       
        if($image){
        $image_name = rand(1, 999);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name. '.'. $ext;
        $upload_path = 'photo/';
        $image_url = $upload_path. $image_full_name;
        $success = $image->move($upload_path, $image_full_name);
        if($success)
        {
            $data['photo'] = $image_url;
            DB::table('records')
            ->where('id', $id)
            ->update($data);
            return Redirect::to('/dashboard');
        }
}

        $data['photo'] = '';
        DB::table('record')
        ->where('id', $id)
        ->update($data);
            return Redirect::to('edit_record');
    }   

       

}
