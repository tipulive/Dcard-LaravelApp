<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Imagick;
use Auth;
use DB;
use PDF;
use Illuminate\Support\Str;
use App;



class TestController extends Controller
{
    //
    public function generateQrCode(){
        /*\QrCode::size(500)
        ->format('png')
        ->generate('codingdriver.com', public_path('images/qrcode.png'));


return view('qr-code');*/


return \QrCode::size(500)
->format('png')
->merge('images/api.jpg', 0.5, true)
->generate('codingdriver.com', public_path('images/qrcode2.png'));

//phpinfo();




    }
    public function testPostData(Request $request){
        $input=$request->all();
       $data=array();
       for($i=0;$i<count($input["onlineData"]);$i++){
       $data[]=[
         "name"=>$input["onlineData"][$i]["name"],
         "email"=>$input["onlineData"][$i]["name"],
       ];

        }


        $check=DB::table("testdatas")
        ->insert($data);

        if($check)
        {
            return response([
                // "allinput"=>$input,
                // "data2"=>$input["item"],
                 "onlineto"=>$input["onlineData"][0]["name"]
             ]);
        }




    }

    public function testGetData(){



      /* $check=DB::select("select *from testdatas");
        return response([
            "status"=>true,
            "result"=>$check,



            ],200);*/


             /* $check=\QrCode::size(500)
        ->format('png')
        ->generate('Vuba ndaje', public_path('images/qrcode1.png'));

        var_dump($check);//null */


$random = Str::random(5);

echo $random;


    }

    public function testPdf(){
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

       // return $pdf->download('itsolutionstuffte.pdf');
       return $pdf->stream();

       /* $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();*/

    }
    public function testencrypt(){

    }

}
