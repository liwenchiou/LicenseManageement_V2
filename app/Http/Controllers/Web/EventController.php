<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Calendar;
use App\Entities\Event;
use App\Repositories\EventRepository;

class EventController extends Controller
{
    public function __construct(EventRepository $EventRepo) {
        $this->EventRepo = $EventRepo;
    }

    public function index()
    {
        $events = [];
        $data = $this->EventRepo->index();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#18b9e6',
                        'textColor'=>'#000000',
                        'url' => 'event/'.$value->id,

                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('event.index', compact('calendar'));
//        return 'OK';
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
        Event::create($request->all());
//        dd($request);
        return redirect()->route('event.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $event_post = $this->EventRepo->find($id);
        return view('event.show', ['event_post' => $event_post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

//        $crud_post = $this->CRUDRepo->find($id);
//        $company_post = $this->companyRepo->index();
//        $lisence_post = $this->lisenceRepo->index();
//        return view('events.edit', ['value' => $value]);
        $event_post = $this->EventRepo->find($id);
        return view('event.edit', ['event_post' => $event_post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only('title', 'start_date', 'end_date');
        $event_post = $this->EventRepo->update($id, $data);
        if ($event_post) {
            return redirect()->route('event.index', $id);
        }
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->EventRepo->delete($id);
        return redirect()->route('event.index');
    }
}
