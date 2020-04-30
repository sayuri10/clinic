<?php

namespace App\Http\Controllers;

use App\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Session;
use Redirect;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $appointments = appointment::all();
        return view('appointment',compact('appointments',$appointments));

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
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function showline(appointment $appointment)
    {
        //
        $today = Carbon::today();

        // echo $today;
        $appointment = appointment::where('dateapp', $today)
        ->join('members','members.id','=','appointments.memberid')
        ->get();

        foreach ($appointment as $key => $value) {
            echo $value->dateapp.'<br>'.$value->memberid.$value->membername;
        //LINE
            

      
                $chOne = curl_init(); 
                curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 

                curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
                curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 

                curl_setopt( $chOne, CURLOPT_POST, 1); 
                curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$today->toDateString()."\n[".$value->membername."]"); 

                curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
                $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer vrsyv0wunxSx3Vl9jIdv0sDwdOnjqXTbyc8SJOiU9J0', ); 

                curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 

                curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
                $result = curl_exec( $chOne ); 

                if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); } 
                    else { $result_ = json_decode($result, true); 
                        echo "status : ".$result_['status']; echo "message : ". $result_['message'];
                    } 

                curl_close( $chOne );
            
        //LINE
        }


        
    }
    public function show(appointment $appointment)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        //
    }
}
