<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Imports\ViewingCodes;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ticket;
use App\Models\Tickes;
use App\Models\ViewingCode;
use App\Models\ViewingCodeTaken;
class ImprtExportController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ViewingCodes,request()->file('file'));
           
        return back();
    }

    public function view_tiket(){
        $tiket=Tickes::first();
        return view('buyticket',compact('tiket'));;
    }
    public function add_tikcet(Request $req){
        $tiket=new Tickes();
        $tiket->code=$req->code;
        $tiket->image=$req->image;
        $tiket->price=$req->price;
        $tiket->save();
        return $tiket;
    }
    public function update_tiket(Request $req){
        $id=$req->id;
        $tiket=Tickes::find($id);
        $tiket->code=$req->code;
        $tiket->image=$req->image;
        $tiket->price=$req->price;
        $tiket->save();
        return $tiket;
    }
    public function allocate_viewing(Request $req){
        $code=ViewingCode::where('status','=','0')->first();
        // return $code;
        if($code!=null){
        $codetaken=new ViewingCodeTaken();
        $codetaken->gender=$req->gender;
        $codetaken->firstname=$req->firstname;
        $codetaken->lastname=$req->lastname;
        $codetaken->email=$req->email;
        $codetaken->phone=$req->phone;
        $codetaken->viwingcode=$code->code;
        $codetaken->save();
        $code_update=ViewingCode::where('id',$code->id)->update(['status'=>'taken']);
        //  $data=array(
        //     'codetaken' =>$codetaken,
        // );
        // Mail::to($email)->send(new verification($data));
        return $codetaken;
        }
        else{
            return "tikern taken";
        }

    }
}
