<?php

namespace App\Http\Controllers;

use App\Models\Weblog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hekmatinasser\Verta\Verta;


class WeblogController extends Controller
{
    //
    public function index(){

        $weblog = Weblog::IndexWeblog();
        return view('weblog',compact('weblog'));
    }
    public function send(){
        $this->validate(request(),[
            'title'=>'required',
            'author'=>'required',
            'email'=>'required',
            'content'=>'required'
        ],[
            'author.required'=>'پر کردن فیلد نویسنده الزامی است',
            'title.required'=>'پر کردن فیلد عنوان الزامی است',
            'email.required'=>'پر کردن فیلد ایمیل الزامی است',
            'content.required'=>'پر کردن فیلد متن الزامی است',
            'The email must be a valid email address.'=>'فرمت ایمیل را رعایت نکرده اید'

        ]);
       Weblog::CreateWeblog();
        return redirect('/');

    }
    public function detail($id,$weblogslug){
        $weblog  = Weblog::DetailWeblog($id,$weblogslug);

        return view('weblogdetail',compact('weblog'));
    }
    public function delete($id){
        $w = Weblog::destroy($id);
        return redirect('/weblog');
    }

}
