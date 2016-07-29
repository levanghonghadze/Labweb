<?php

namespace laravel\Http\Controllers;

use Illuminate\Http\Request;
use laravel\Http\Requests;
use Input;

use laravel\events;
use laravel\Event_mentors;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = events::paginate(20);
      return view('admin.Events.events')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'stime' => 'required',
        'etime' => 'required',
        'description' => 'required',
        'agenda' => 'required',
        'location' => 'required',
        'speaker' => 'required',
        // 'lat' => 'required',
        // 'lng' => 'required',
      ]);
      $file = Input::file('photo');
        if($file) {
          $filename = uniqid().'.jpg';
          $photo = $file->move(public_path() .'/uploads/', $filename );
        }
      $post = new events;
      $post->title = $request->name;
      $post->start = $request->stime;
      $post->end = $request->etime;
      $post->description = $request->description;
      $post->agenda = $request->agenda;
      $post->location = $request->location;
      $post->lat = $request->lat;
      $post->lng = $request->lng;
      $post->photo = $filename;
      $post->save();

      $eventId = $post->id;
      if(isset($request->multiselect)) {
        foreach($request->multiselect as $key) {
          $data = array(
            'mentor_id'=>$key,
            'event_id'=>$eventId
          );
          event_mentors::insert($data);
        }
      }

      return json_encode($post['success'] = true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = events::find($id);
        return view('admin.Events.edit')->withPost($post);
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
      $this->validate($request, [
        'name' => 'required',
        'stime' => 'required',
        'etime' => 'required',
        'description' => 'required',
        'agenda' => 'required',
        'location' => 'required',
        'speaker' => 'required',
        // 'lat' => 'required',
        // 'lng' => 'required',
      ]);

      $post = events::find($id);
      $post->title = $request->name;
      $post->start = $request->stime;
      $post->end = $request->etime;
      $post->description = $request->description;
      $post->agenda = $request->agenda;
      $post->location = $request->location;
      $post->lat = $request->lat;
      $post->lng = $request->lng;
      $post->save();


      return json_encode($post['success'] = true);

      $eventId = $post->id;
      if(!empty($request->multiselect)) {
        $post = new Event_mentors;
        foreach($request->multiselect as $key) {
          $post->mentor_id = $key;
          $post->event_id = $eventId;
          $post->save();
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = events::where('id', $id)->delete();
      $post = Event_mentors::where('event_id', $id)->delete();
    }
}
