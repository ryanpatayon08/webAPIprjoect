<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAirPlaneFlightRequest;
use App\Http\Requests\UpdateAirPlaneFlightRequest;
use App\Repositories\AirPlaneFlightRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AirPlaneFlightController extends AppBaseController
{
    /** @var  AirPlaneFlightRepository */
    private $airPlaneFlightRepository;

    public function __construct(AirPlaneFlightRepository $airPlaneFlightRepo)
    {
        $this->airPlaneFlightRepository = $airPlaneFlightRepo;
    }

    /**
     * Display a listing of the AirPlaneFlight.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $airPlaneFlights = $this->airPlaneFlightRepository->all();

        return view('air_plane_flights.index')
            ->with('airPlaneFlights', $airPlaneFlights);
    }

    /**
     * Show the form for creating a new AirPlaneFlight.
     *
     * @return Response
     */
    public function create()
    {
        return view('air_plane_flights.create');
    }

    /**
     * Store a newly created AirPlaneFlight in storage.
     *
     * @param CreateAirPlaneFlightRequest $request
     *
     * @return Response
     */
    public function store(CreateAirPlaneFlightRequest $request)
    {
        $input = $request->all();

        $airPlaneFlight = $this->airPlaneFlightRepository->create($input);

        Flash::success('Air Plane Flight saved successfully.');

        return redirect(route('airPlaneFlights.index'));
    }

    /**
     * Display the specified AirPlaneFlight.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $airPlaneFlight = $this->airPlaneFlightRepository->find($id);

        if (empty($airPlaneFlight)) {
            Flash::error('Air Plane Flight not found');

            return redirect(route('airPlaneFlights.index'));
        }

        return view('air_plane_flights.show')->with('airPlaneFlight', $airPlaneFlight);
    }

    /**
     * Show the form for editing the specified AirPlaneFlight.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $airPlaneFlight = $this->airPlaneFlightRepository->find($id);

        if (empty($airPlaneFlight)) {
            Flash::error('Air Plane Flight not found');

            return redirect(route('airPlaneFlights.index'));
        }

        return view('air_plane_flights.edit')->with('airPlaneFlight', $airPlaneFlight);
    }

    /**
     * Update the specified AirPlaneFlight in storage.
     *
     * @param int $id
     * @param UpdateAirPlaneFlightRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAirPlaneFlightRequest $request)
    {
        $airPlaneFlight = $this->airPlaneFlightRepository->find($id);

        if (empty($airPlaneFlight)) {
            Flash::error('Air Plane Flight not found');

            return redirect(route('airPlaneFlights.index'));
        }

        $airPlaneFlight = $this->airPlaneFlightRepository->update($request->all(), $id);

        Flash::success('Air Plane Flight updated successfully.');

        return redirect(route('airPlaneFlights.index'));
    }

    /**
     * Remove the specified AirPlaneFlight from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $airPlaneFlight = $this->airPlaneFlightRepository->find($id);

        if (empty($airPlaneFlight)) {
            Flash::error('Air Plane Flight not found');

            return redirect(route('airPlaneFlights.index'));
        }

        $this->airPlaneFlightRepository->delete($id);

        Flash::success('Air Plane Flight deleted successfully.');

        return redirect(route('airPlaneFlights.index'));
    }
}
