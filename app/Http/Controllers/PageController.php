<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File; 
// use File;

use Mail;
use App\User;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';

class PageController extends Controller
{
    public function index(Request $request) 
    {
           
        $data = array(
            'menu'=> ''
        );
        return view('page.index')->with('data', $data);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function req_login(Request $request)
    {

        if($request->session()->get('auth') == "")
        {
            try {
                $client = new Client();
                $responseBody = $client->request('POST', 'https://ms-auth.an.tv:443/api/auth/user', 
                    [
                        'verify'  => false,
                        'form_params' => [
                            'email' => $request->email,
                            'password' => $request->password
                        ]
                    ]
                );

            } catch (\GuzzleHttp\Exception\RequestException $e) {
                $responseBody = $e->getResponse();
            }

            // var_dump($responseBody);

            ///////////////////////////////////////////////////////////////
            if($responseBody->getStatusCode() == 200)
            {
                $responseBody = json_decode($responseBody->getBody());
                $request->session()->put('auth', $responseBody);
                $data = array(
                    'menu'=> 'INPUTPLANNED'
                );
                return view('page.index')->with('data', $data);
            }
            else if($responseBody->getStatusCode() != 200)
            {
                $data = array(
                    'menu'=> 'INPUTPLANNED'
                );
                return view('page.index')->with('data', $data);
            }
            ////////////////////////////////////////////////////////LOGINAUTH///////
        }
        if($request->session()->get('auth') != "")
        {
            $request->session()->put('auth', '');
                    
            $data = array(
                'menu'=> 'INPUTPLANNED'
            );
            return view('page.index')->with('data', $data);
        }

    }



    public function prog_logout(Request $request)
    {

        $request->session()->put('auth', '');   
        $data = array(
            'menu'=> 'INPUTPLANNED'
        );
        return view('page.index')->with('data', $data);


    }

    public function changemenu(Request $request)
    {
        if($request->menu == "INPUTPLANNED")
        {
            $data = array(
                'menu'=> 'INPUTPLANNED'
            );
            return view('page.index')->with('data', $data);
        }
        if($request->menu == "UPDATEPROGRESSDEAL")
        {
            $data = array(
                'menu'=> 'UPDATEPROGRESSDEAL'
            );
            return view('page.index')->with('data', $data);
        }
        if($request->menu == "UPDATEPROGRESSORDER")
        {
            $data = array(
                'menu'=> 'UPDATEPROGRESSORDER'
            );
            return view('page.index')->with('data', $data);
        }   
    }









    public function insert_INPUTPLANNED(Request $request)
    {
        $value = session('auth');
        if(gettype($value) == 'object')
        {
            $access_token = session('auth')->token;
            $string = base64_decode($access_token);
            $convert1 = substr($string,27);
            $variable = substr($convert1, 0, strpos($convert1, "}"));
            $convert_variable = $variable . "}";
            $my_array_data = json_decode($convert_variable, TRUE);
        }
        if(gettype($value) == 'array')
        {
            $access_token = $value['token'];
            $string = base64_decode($access_token);
            $convert1 = substr($string,27);
            $variable = substr($convert1, 0, strpos($convert1, "}"));
            $convert_variable = $variable . "}";
            $my_array_data = json_decode($convert_variable, TRUE);
        }
        ///////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////
        date_default_timezone_set("Asia/Jakarta");
        $date_now = date("Y-m-d h:i:sa");
        $return =  DB::table('ts_sponsor')->insert(
            array(
                'update_date'=>$date_now,
                'no_paket'=>$request->nomor_paket,
                'employee_id'=>$my_array_data['employee_id'],
                'employee_name'=>$my_array_data['name'],
                'employee_email'=>$my_array_data['email'],
                'agency'=>$request->agency,
                'advertiser_product'=>$request->advertiser_product
            )
        );
        ///////////////////////////////////////////////////////////
        $data = array(
            'menu'=> 'INPUTPLANNED'
        );
        return view('page.index')->with('data', $data);


        // $boa_v_companies = DB::select('SELECT * FROM boa_v_companies ORDER BY id DESC');
        // var_dump($boa_v_companies);
    }



}