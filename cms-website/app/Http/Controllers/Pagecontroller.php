<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
//use Brick\Math\Exception\NegativeNumberException;


class Pagecontroller extends Controller
{
    public function Addpage(Request $request){

        $page = Page::where('page_title','home')->get();
        $numrow = count($page);
        if($numrow > 0){
            return view('admin/home/addpage',['page'=>$page]);
        }else{
            $page = new Page();
            return view('admin/home/addpage',['page'=>$page]);
        }
    }

    public function ourcompany(Request $request){
        $page = Page::where('page_title','our_company')->get();
        return view('admin/company/ourcompany',['page'=>$page, 'total_row'=>count($page)]);
    }

    public function services(Request $request){
        $page = Page::where('page_title','services')->get();
        return view('admin/service/services',['page'=>$page, 'total_row'=>count($page)]);
    }

    public function CreatePage(Request $request){
        $pagevalues['title'] = $request->title; //عنوان الصفحه الرئسيهhome or company or......
        $datavalues = array();
        if($request->txt_name){
            $field =  $request->txt_name;
            if($field){
                for($j=0;$j<count($field);$j++){
                    $text = $field[$j];//تخزين كل العناوين والايقونات والمحتوي داخل $text
                    $tx = $request->$text;//اجلب من قاعده البيانات كل الملعومات من ايقونات وعناوين والمحتوي وخزنه في $tx
                    $field_name = Page::where(['section_title'=>$text,'page_title'=>$pagevalues['title']])->get();
                    if(count($field_name)>0){ // اذا كان هناك قيم
                        $datavalues[$text] = $tx; //ضتخزين المحتويات والعناوين والايقونات في مصفوفه $datavalue
                    }else{ //اذا لم توجد قيم او  اذا لم يتم تغيير اي شي
                        $newvalues[$text] = $tx; // اذا لم يتم تغيير اي شي اي ان المستخدم دخل على صفحه الداشبورد لاكن لم يعدل على شي
                    }
                }
            }
        }
        if($request->image){
            $field =  $request->image;
            if($field){
                for($j=0;$j<count($field);$j++){
                    $image_name = $field[$j];
                    if($request->$image_name){
                        $filename = $this->fileUpload($request,$image_name,'');

                        $field_name = Page::where(['section_title'=>$image_name,'page_title'=>$pagevalues['title']])->get();
                        if(count($field_name)>0){
                            $datavalues[$image_name] = $filename;
                        }else{
                            $newvalues[$image_name] = $filename;
                        }
                    }
                }
            }
        }
        if(!empty($datavalues)){
            foreach($datavalues as $key => $value){//$key==$datavalues يعني العناوين الفرعيه والايقونات والمحتوات (النصوص)
                $where = array('section_title'=>$key,'page_title'=>$pagevalues['title']);
                $res =  Page::where($where)->update(array('data'=>$value));
                if($res){
                    $success = 1;
                }
            }
        }

        if(!empty($newvalues)){ // هذه عباره عن المصفوفه التي لم يتم تغيير القيم او لم يتم اضافه شي لها (الافتراضيه) او دخل المستخدم لاكن لم يعدل عليها
            foreach($newvalues as $key => $value){
                $data = array(
                        'page_title' => $pagevalues['title'],// اضافه عنوان رئيسي للصفحه التي اختارها ولم يعدل عليها
                        'section_title' => $key, // القيم الافتراضيه للصفحه الاساسيه لانه لم يتم تغيير شي
                        'data' => $newvalues[$key],
                        );
                $res =  Page::create($data);
            }
        }

        if($pagevalues['title']=='home')
            return redirect('/page-add');
        elseif($pagevalues['title']=='our_company')
            return redirect('/company-page-add');
        else
            return redirect('/services-page-add');

    }

}
