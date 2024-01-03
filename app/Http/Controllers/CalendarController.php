<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCalendarRequest;
use App\Http\Requests\UpdateCalendarRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CalendarRepository;
use Illuminate\Http\Request;
use Flash;

class CalendarController extends AppBaseController
{
    /** @var CalendarRepository $calendarRepository*/
    private $calendarRepository;

    public function __construct(CalendarRepository $calendarRepo)
    {
        $this->calendarRepository = $calendarRepo;
    }

    /**
     * Display a listing of the Calendar.
     */
    public function index(Request $request)
    {
        $calendars = $this->calendarRepository->paginate(10);

        return view('calendars.index')
            ->with('calendars', $calendars);
    }

    /**
     * Show the form for creating a new Calendar.
     */
    public function create()
    {
        return view('calendars.create');
    }

    /**
     * Store a newly created Calendar in storage.
     */
    public function store(CreateCalendarRequest $request)
    {
        $input = $request->all();

        $calendar = $this->calendarRepository->create($input);

        Flash::success('Calendar saved successfully.');

        return redirect(route('calendars.index'));
    }

    /**
     * Display the specified Calendar.
     */
    public function show($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error('Calendar not found');

            return redirect(route('calendars.index'));
        }

        return view('calendars.show')->with('calendar', $calendar);
    }

    /**
     * Show the form for editing the specified Calendar.
     */
    public function edit($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error('Calendar not found');

            return redirect(route('calendars.index'));
        }

        return view('calendars.edit')->with('calendar', $calendar);
    }

    /**
     * Update the specified Calendar in storage.
     */
    public function update($id, UpdateCalendarRequest $request)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error('Calendar not found');

            return redirect(route('calendars.index'));
        }

        $calendar = $this->calendarRepository->update($request->all(), $id);

        Flash::success('Calendar updated successfully.');

        return redirect(route('calendars.index'));
    }

    /**
     * Remove the specified Calendar from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (empty($calendar)) {
            Flash::error('Calendar not found');

            return redirect(route('calendars.index'));
        }

        $this->calendarRepository->delete($id);

        Flash::success('Calendar deleted successfully.');

        return redirect(route('calendars.index'));
    }
}
