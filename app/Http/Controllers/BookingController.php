<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index(){
        $query = Bookings::select('bookings.*','users.name as user_name');
        $query->leftJoin('users','bookings.user_id','=','users.id');
        $data = $query->get();
        return view('AdminDashboard.Bookings.index',['data'=>$data]);
    }

    public function userBookings(){
        $query = Bookings::select('bookings.*','users.name as user_name');
        $query->leftJoin('users','bookings.user_id','=','users.id');
        $query->where('bookings.user_id',Auth::user()->id);
        $data = $query->get();
        return view('UserDashboard.Bookings.index',['data'=>$data]);
    }

    public function add(){
        $data = User::get();
        //dd(Auth::user()->user_type);
        if(Auth::user()->user_type == 1){
            return view('AdminDashboard.Bookings.addEdit',['data'=>$data]);
        }
        else{
            return view('UserDashboard.Bookings.addEdit',['data'=>$data]);
        }
    }

    public function save(Request $request){
        $user = new Bookings([
            'name'=>$request->get('booking_name'),
            'booking_datetime'=>$request->get('booking_on'),
            'status'=>$request->get('booking_status'),
            'user_id'=>Auth::user()->user_type == 1 ?$request->get('user_name') : Auth::user()->id
        ]);
        $user->save();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }
        else{
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }

    public function getBookingById($id){
        $data = User::get();
        $booking = Bookings::find($id);
        if(Auth::user()->user_type == 1){
            return view('AdminDashboard.Bookings.addEdit',['data'=>$data,'booking'=>$booking]);
        }
        else{
            return view('UserDashboard.Bookings.addEdit',['data'=>$data,'booking'=>$booking]);
        }
    }

    // public function updateBookingsById(Request $request){
    //     //dd($request->get('booking_name'));
    //     $booking = Bookings::find($request->get('user_name'));
    //     //dd($booking->name);
    //     $booking->name = $request->get('booking_name');
    //     $booking->booking_datetime = $request->get('booking_on');
    //     $booking->status = $request->get('booking_status');
    //     $booking->user_id = Auth::user()->user_type == 1 ?$request->get('user_name') : Auth::user()->id;
    //     $booking->save();
    //     if(Auth::user()->user_type == 1){
    //         $route = 'booking.all';
    //     }
    //     else{
    //         $route = 'booking.my';
    //     }
    //     return redirect()->route($route);
    // }
    public function updateBookingsById(Request $request){
    $booking = Bookings::where('id', $request->get('booking_id'))->first();
    //dd($booking);
    if ($booking) {
        // Booking found, update its properties
        $booking->name = $request->get('booking_name');
        $booking->booking_datetime = $request->get('booking_on');
        $booking->status = $request->get('booking_status');
        $booking->user_id = Auth::user()->user_type == 1 ? $request->get('user_name') : Auth::user()->id;
        $booking->save();
    } else {
        // Booking not found, handle the error (redirect, show a message, etc.)
        return redirect()->back()->with('error', 'Booking not found');
    }

    // Rest of your code
    if(Auth::user()->user_type == 1){
        $route = 'booking.all';
    } else {
        $route = 'booking.my';
    }

    return redirect()->route($route);
}


    public function viewDelete($id){
        if(Auth::user()->user_type == 1){
            $view = 'AdminDashboard.Bookings.delete';
        }
        else{
            $view = 'UserDashboard.Bookings.delete';
        }
        return view($view);
    }

    public function delete($id){
        $status = Bookings::where('id',$id)->delete();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }
        else{
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
}
