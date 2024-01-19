<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("/ticket_types/index", ['ticket_types'=>TicketType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("/ticket_types/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type_ticket=new TicketType;
        $type_ticket->type=$request->input("type");
        $type_ticket->save();
        return redirect("ticket_types");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket_type= TicketType::find($id);
        return view("/ticket_types/show", ['ticket_type'=>$ticket_type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket_type= TicketType::find($id);
        return view("/ticket_types/edit", ['ticket_type'=>$ticket_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type_ticket=TicketType::find($id);
        $type_ticket->type=$request->input("type");
        $type_ticket->save();
        return redirect("ticket_types");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket_type=TicketType::find($id);
        $ticket_type->delete($id);
        return redirect("ticket_types");
    }
}
