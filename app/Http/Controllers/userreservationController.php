<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\r_event;

class userreservationController extends Controller
{
    public function index(){
        return view('user.userreservation');
    }

    public function reserve(Request $request,reservation $reservation,r_event $event){
            
            $reservation = new reservation();
            $reservation->fname = $request->fname;
            $reservation->mname = $request->mname;
            $reservation->lname = $request->lname;
            $reservation->email = $request->email;
            $reservation->Address = $request->Address;
            $reservation->contact = $request->contact;
            $reservation->alternate = $request->alternate;
            $reservation->Event_date = $request->Event;

            $res = $reservation->save();

            $lastId = $reservation->id;
            


            foreach ($request->input('Services') as $key) {
                
                $event = new r_event();

                $event->reservation_id = $lastId;
                $event->Type = "Event";
                $event->Service = $key;

                $event->save();

            }

            foreach ($request->input('Other_Services') as $key) {
                
                $event = new r_event();

                $event->reservation_id  = $lastId;
                $event->Type = "Service";
                $event->Service  = $key;
                $event->save();

            }

            if($res){
                return back()->with('Success','Reserve successfuly !, Please check your email for confirmation.');
            }else{
    
                return back()->with('Failed','Something went wrong !, Please try again.');
            }
           
    }
}
