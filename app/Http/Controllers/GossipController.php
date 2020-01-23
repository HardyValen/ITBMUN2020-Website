<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gossip;

function changeDate(){

}

class GossipController extends Controller
{
    public function viewGossipIndex(){
        $gossips = Gossip::orderBy('created_at', 'desc')->paginate(10)->onEachSide(1);
        return view('gossip.gossipIndex')->with('gossips', $gossips);
    }

    public function create(){
        return view('gossip.gossipCreate');
    }

    public function store(Request $request){
        $data = new Gossip([


            'sender' => $request->sender,
            'reciever' => $request->reciever,
            'council' => $request->council,
            'title' => $request->title,
            'body' => $request->body
        ]);
        $data->save();

        return redirect('/gossip')->with('status', "The gossip has been posted successfully.");
    }
}
