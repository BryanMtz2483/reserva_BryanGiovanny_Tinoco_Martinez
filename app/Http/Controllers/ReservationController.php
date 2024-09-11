<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::orderBy('id','desc')-> paginate();
        return view('reservation.index-reservations', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservation.create-reservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();

        $reservation ->nombre_sala = $request -> nombre_sala;
        $reservation ->fecha_reserva = $request -> fecha_reserva;
        $reservation ->hora_inicio = $request -> hora_inicio;
        $reservation ->hora_fin = $request -> hora_fin;
        $reservation ->nombre_cliente = $request -> nombre_cliente;

        $reservation -> save();

        return redirect()-> route('reservation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($reservation)
    {
        $reservationDetail = Reservation::find($reservation);
        return view('reservation.show-reservation', compact('reservationDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update($reservation)
    {
        $updateReservation = Reservation::find($reservation);
        return view('reservation.update-reservation', compact('updateReservation'));
    }

    public function change(Request $request, $id)
    {
        $reservation = Reservation::find($id);

        $reservation ->nombre_sala = $request -> nombre_sala;
        $reservation ->fecha_reserva = $request -> fecha_reserva;
        $reservation ->hora_inicio = $request -> hora_inicio;
        $reservation ->hora_fin = $request -> hora_fin;
        $reservation ->nombre_cliente = $request -> nombre_cliente;

        $reservation -> save();

        return redirect()-> route('reservation.show', $reservation );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($reservation)
    {
        $deleteReservation = Reservation::find($reservation);
        $deleteReservation -> delete();
        return redirect()-> route('reservation.index');
    }
    public function getReportAll(){
        $reservations = Reservation::all();
        $pdf = Pdf::loadView('reservation.reportAll', compact('reservations'));
        return $pdf->stream('report-reservations.pdf');
    }
    public function reportOne($reservation){
        $reservations = Reservation::find($reservation);
        $pdf = Pdf::loadView('reservation.reportOne', compact('reservations'));
        return $pdf->stream('reservation-report.pdf');
    }
}
