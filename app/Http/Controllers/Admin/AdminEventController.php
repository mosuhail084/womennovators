<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminEventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // *  Show Add Normal Event Form
    public function normal_event_add_form(Request $request)
    {
        $sector = Sector::latest()->get();
        $states = DB::table('state_and_city')->select('state_id', 'state_name')->distinct()->orderby('state_id')->get();
        $communities = DB::table('accepted_communities')->select('id', 'name')->get();
        return view('backEnd.normal_event.add_form', compact('sector', 'states', 'communities'));
    }

    // * Get cities based of state_id
    public function get_cities(Request $request)
    {
        $state_id = $request->state_id;
        $cities = DB::table('state_and_city')->select('city_id', 'city_name')->where(['state_id' => $state_id])->get();

        $html = '';
        foreach ($cities as $city) {
            $html .= '<option value="' . $city->city_id . '">' . $city->city_name . '</option>';
        }
        return $html;
    }

    // * Create Normal Event
    public function create_normal_event(Request $request)
    {
        $normal_event_title = $request->normal_event_title;
        if ($request->hasfile('normal_event_poster')) {
            $image = $request->file('normal_event_poster');
            $extension = $image->extension();
            $normal_event_poster = uniqid("", true) . "." . $extension;
        }
        $normal_event_mode = $request->normal_event_mode;
        $normal_event_start_date = $request->normal_event_start_date;
        $normal_event_end_date = $request->normal_event_end_date;
        $normal_event_from = $request->normal_event_from;
        $normal_event_to = $request->normal_event_to;
        $normal_event_desc = $request->normal_event_desc;
        $community_id = $request->community_id;
        $data = DB::table('accepted_communities')->select('name', 'user_id')->where(['id' => $community_id])->first();
        $community_name = $data->name;
        $creator_id = $data->user_id;
        $status = 1;
        $state = $request->state;
        $city = $request->city;
        $sector = $request->sector;
        $type = "normal_event";
        $jury = $request->jury;
        $faces = $request->faces;
        $event_link = $request->event_link;

        $res = DB::table('community_normal_event')->insert([
            "normal_event_title" => $normal_event_title,
            "normal_event_poster" => $normal_event_poster,
            "normal_event_mode" => $normal_event_mode,
            "normal_event_start_date" => $normal_event_start_date,
            "normal_event_end_date" => $normal_event_end_date,
            "normal_event_from" => $normal_event_from,
            "normal_event_to" => $normal_event_to,
            "normal_event_desc" => $normal_event_desc,
            "community_id" => $community_id,
            "community_name" => $community_name,
            "creator_id" => $creator_id,
            "status" => $status,
            "state" => $state,
            "city" => $city,
            "sector" => $sector,
            "type" => $type,
            "jury" => $jury,
            "faces" => $faces,
            "event_link" => $event_link,
        ]);

        if ($res) {
            $image->move('we/images/', $normal_event_poster);
            return back()->with('success', 'Normal Event Added Successfully!');
        } else {
            return back()->with('fail', 'Normal Event Can not be Added!');
        }
    }

    // * Show Mormal Event List
    public function list_normal_event(Request $request)
    {

        $normal_events = DB::table('community_normal_event')
            ->leftjoin('state_and_city', 'state_and_city.city_id', '=', 'community_normal_event.city')
            ->leftjoin('sectors', 'sectors.id', '=', 'community_normal_event.sector')
            ->select('community_normal_event.*', 'state_and_city.state_name', 'state_and_city.city_name', 'sectors.sectorname')
            ->distinct()
            ->get();
        // dd($normal_events);
        return view("backEnd.normal_event.event_list", ['normal_events' => $normal_events]);
    }

    // * Show a Normal Event based on ID
    public function show_normal_event(Request $request, $id)
    {
        $normal_event = DB::table('community_normal_event')
            ->leftjoin('state_and_city', 'state_and_city.city_id', '=', 'community_normal_event.city')
            ->leftjoin('sectors', 'sectors.id', '=', 'community_normal_event.sector')
            ->select('community_normal_event.*', 'state_and_city.state_name', 'state_and_city.city_name', 'sectors.sectorname')
            ->where('community_normal_event.id', '=', $id)
            ->distinct()
            ->first();

        return view("backEnd.normal_event.event_details", ['normal_event' => $normal_event]);
    }

    // * Show Normal Event Edit Form 
    public function normal_event_edit_form(Request $request, $id)
    {
        $sector = Sector::latest()->get();
        $states = DB::table('state_and_city')->select('state_id', 'state_name')->distinct()->orderby('state_id')->get();
        $communities = DB::table('accepted_communities')->select('id', 'name')->get();

        $event = DB::table('community_normal_event')->where(['id' => $id])->first();
        $cities =  DB::table('state_and_city')->select('city_id', 'city_name')->where(['state_id' => $event->state])->get();

        return view('backEnd.normal_event.edit_form', compact('sector', 'states', 'communities', 'event', 'cities'));
    }

    // * Update Normal Event
    public function update_normal_event(Request $request, $id)
    {

        $normal_event_title = $request->normal_event_title;
        $normal_event_mode = $request->normal_event_mode;
        $normal_event_start_date = $request->normal_event_start_date;
        $normal_event_end_date = $request->normal_event_end_date;
        $normal_event_from = $request->normal_event_from;
        $normal_event_to = $request->normal_event_to;
        $normal_event_desc = $request->normal_event_desc;
        $community_id = $request->community_id;
        $data = DB::table('accepted_communities')->select('name', 'user_id')->where(['id' => $community_id])->first();
        $community_name = $data->name;
        $creator_id = $data->user_id;
        $state = $request->state;
        $city = $request->city;
        $sector = $request->sector;
        $jury = $request->jury;
        $faces = $request->faces;
        $event_link = $request->event_link;

        $old_image = DB::table('community_normal_event')->where(['id' => $id])->select('normal_event_poster')->first();

        if ($request->hasfile('normal_event_poster')) {

            $destination = "we/images/" . $old_image->normal_event_poster;
            if (File::exists($destination)) {
                File::delete($destination);
            }


            $image = $request->file('normal_event_poster');
            $extension = $image->extension();
            $normal_event_poster = uniqid("", true) . "." . $extension;

            $res = DB::table('community_normal_event')->where(['id' => $id])->update([
                "normal_event_title" => $normal_event_title,
                "normal_event_poster" => $normal_event_poster,
                "normal_event_mode" => $normal_event_mode,
                "normal_event_start_date" => $normal_event_start_date,
                "normal_event_end_date" => $normal_event_end_date,
                "normal_event_from" => $normal_event_from,
                "normal_event_to" => $normal_event_to,
                "normal_event_desc" => $normal_event_desc,
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "state" => $state,
                "city" => $city,
                "sector" => $sector,
                "jury" => $jury,
                "faces" => $faces,
                "event_link" => $event_link,
            ]);
        } else {
            $image = '';
            $res = DB::table('community_normal_event')->where(['id' => $id])->update([
                "normal_event_title" => $normal_event_title,
                "normal_event_mode" => $normal_event_mode,
                "normal_event_start_date" => $normal_event_start_date,
                "normal_event_end_date" => $normal_event_end_date,
                "normal_event_from" => $normal_event_from,
                "normal_event_to" => $normal_event_to,
                "normal_event_desc" => $normal_event_desc,
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "state" => $state,
                "city" => $city,
                "sector" => $sector,
                "jury" => $jury,
                "faces" => $faces,
                "event_link" => $event_link,
            ]);
        }

        if ($res) {
            if ($image) {
                $image->move('we/images/', $normal_event_poster);
            }
            return back()->with('success', 'Normal Event Updated Successfully!');
        } else {
            return back()->with('fail', 'Normal Event Can not be Added!');
        }
    }

    // * Show Round Table Add Form
    public function round_table_add_form(Request $request)
    {
        $sector = Sector::latest()->get();
        $states = DB::table('state_and_city')->select('state_id', 'state_name')->distinct()->orderby('state_id')->get();
        $communities = DB::table('accepted_communities')->select('id', 'name')->get();
        return view('backEnd.round_table.add_form', compact('sector', 'states', 'communities'));
    }

    // * Create Round Table Event
    public function create_round_table(Request $request)
    {
        $round_table_title = $request->round_table_title;
        if ($request->hasfile('round_table_poster')) {
            $image = $request->file('round_table_poster');
            $extension = $image->extension();
            $round_table_poster = uniqid("", true) . "." . $extension;
        }
        $round_table_mode = $request->round_table_mode;
        $round_table_start_date = $request->round_table_start_date;
        $round_table_end_date = $request->round_table_end_date;
        $round_table_from = $request->round_table_from;
        $round_table_to = $request->round_table_to;
        $round_table_desc = $request->round_table_desc;
        $community_id = $request->community_id;
        $data = DB::table('accepted_communities')->select('name', 'user_id')->where(['id' => $community_id])->first();
        $community_name = $data->name;
        $creator_id = $data->user_id;
        $status = 1;
        $state = $request->state;
        $city = $request->city;
        $sector = $request->sector;
        $type = "round_table";
        $jury = $request->jury;
        $faces = $request->faces;
        $event_link = $request->event_link;

        $res = DB::table('community_round_table')->insert([
            "round_table_title" => $round_table_title,
            "round_table_poster" => $round_table_poster,
            "round_table_mode" => $round_table_mode,
            "round_table_start_date" => $round_table_start_date,
            "round_table_end_date" => $round_table_end_date,
            "round_table_from" => $round_table_from,
            "round_table_to" => $round_table_to,
            "round_table_desc" => $round_table_desc,
            "community_id" => $community_id,
            "community_name" => $community_name,
            "creator_id" => $creator_id,
            "status" => $status,
            "state" => $state,
            "city" => $city,
            "sector" => $sector,
            "type" => $type,
            "jury" => $jury,
            "faces" => $faces,
            "event_link" => $event_link,
        ]);

        if ($res) {
            $image->move('we/images/', $round_table_poster);
            return back()->with('success', 'Round Table Event Added Successfully!');
        } else {
            return back()->with('fail', 'Round Table Event Can not be Added!');
        }
    }

    // * Show Round Table Event List
    public function list_round_table(Request $request)
    {

        $round_table_events = DB::table('community_round_table')
            ->leftjoin('state_and_city', 'state_and_city.city_id', '=', 'community_round_table.city')
            ->leftjoin('sectors', 'sectors.id', '=', 'community_round_table.sector')
            ->select('community_round_table.*', 'state_and_city.state_name', 'state_and_city.city_name', 'sectors.sectorname')
            ->distinct()
            ->get();
        // dd($round_table_events);
        return view("backEnd.round_table.event_list", ['round_table_events' => $round_table_events]);
    }

    // * Show a Round Table Event based on ID
    public function show_round_table(Request $request, $id)
    {
        $round_table_event = DB::table('community_round_table')
            ->leftjoin('state_and_city', 'state_and_city.city_id', '=', 'community_round_table.city')
            ->leftjoin('sectors', 'sectors.id', '=', 'community_round_table.sector')
            ->select('community_round_table.*', 'state_and_city.state_name', 'state_and_city.city_name', 'sectors.sectorname')
            ->where('community_round_table.id', '=', $id)
            ->distinct()
            ->first();

        return view("backEnd.round_table.event_details", ['round_table_event' => $round_table_event]);
    }

    // * Show Round Table Event Edit Form 
    public function round_table_edit_form(Request $request, $id)
    {
        $sector = Sector::latest()->get();
        $states = DB::table('state_and_city')->select('state_id', 'state_name')->distinct()->orderby('state_id')->get();
        $communities = DB::table('accepted_communities')->select('id', 'name')->get();

        $event = DB::table('community_round_table')->where(['id' => $id])->first();
        $cities =  DB::table('state_and_city')->select('city_id', 'city_name')->where(['state_id' => $event->state])->get();

        return view('backEnd.round_table.edit_form', compact('sector', 'states', 'communities', 'event', 'cities'));
    }

    // * Update Round Table Event
    public function update_round_table(Request $request, $id)
    {

        $round_table_title = $request->round_table_title;
        $round_table_mode = $request->round_table_mode;
        $round_table_start_date = $request->round_table_start_date;
        $round_table_end_date = $request->round_table_end_date;
        $round_table_from = $request->round_table_from;
        $round_table_to = $request->round_table_to;
        $round_table_desc = $request->round_table_desc;
        $community_id = $request->community_id;
        $data = DB::table('accepted_communities')->select('name', 'user_id')->where(['id' => $community_id])->first();
        $community_name = $data->name;
        $creator_id = $data->user_id;
        $state = $request->state;
        $city = $request->city;
        $sector = $request->sector;
        $jury = $request->jury;
        $faces = $request->faces;
        $event_link = $request->event_link;

        $old_image = DB::table('community_round_table')->where(['id' => $id])->select('round_table_poster')->first();

        if ($request->hasfile('round_table_poster')) {

            $destination = "we/images/" . $old_image->round_table_poster;
            if (File::exists($destination)) {
                File::delete($destination);
            }


            $image = $request->file('round_table_poster');
            $extension = $image->extension();
            $round_table_poster = uniqid("", true) . "." . $extension;

            $res = DB::table('community_round_table')->where(['id' => $id])->update([
                "round_table_title" => $round_table_title,
                "round_table_poster" => $round_table_poster,
                "round_table_mode" => $round_table_mode,
                "round_table_start_date" => $round_table_start_date,
                "round_table_end_date" => $round_table_end_date,
                "round_table_from" => $round_table_from,
                "round_table_to" => $round_table_to,
                "round_table_desc" => $round_table_desc,
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "state" => $state,
                "city" => $city,
                "sector" => $sector,
                "jury" => $jury,
                "faces" => $faces,
                "event_link" => $event_link,
            ]);
        } else {
            $image = '';
            $res = DB::table('community_round_table')->where(['id' => $id])->update([
                "round_table_title" => $round_table_title,
                "round_table_mode" => $round_table_mode,
                "round_table_start_date" => $round_table_start_date,
                "round_table_end_date" => $round_table_end_date,
                "round_table_from" => $round_table_from,
                "round_table_to" => $round_table_to,
                "round_table_desc" => $round_table_desc,
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "state" => $state,
                "city" => $city,
                "sector" => $sector,
                "jury" => $jury,
                "faces" => $faces,
                "event_link" => $event_link,
            ]);
        }

        if ($res) {
            if ($image) {
                $image->move('we/images/', $round_table_poster);
            }
            return back()->with('success', 'Normal Event Updated Successfully!');
        } else {
            return back()->with('fail', 'Normal Event Can not be Added!');
        }
    }

    // *  Show Add We-pitch Event Form
    public function we_pitch_add_form(Request $request)
    {
        $sector = Sector::latest()->get();
        $states = DB::table('state_and_city')->select('state_id', 'state_name')->distinct()->orderby('state_id')->get();
        $communities = DB::table('accepted_communities')->select('id', 'name')->get();
        return view('backEnd.we_pitch.add_form', compact('sector', 'states', 'communities'));
    }

    // * Create We-pitch Event
    public function create_we_pitch(Request $request)
    {
        $we_pitch_title = $request->we_pitch_title;
        if ($request->hasfile('we_pitch_poster')) {
            $image = $request->file('we_pitch_poster');
            $extension = $image->extension();
            $we_pitch_poster = uniqid("", true) . "." . $extension;
        }
        $we_pitch_mode = $request->we_pitch_mode;
        $we_pitch_start_date = $request->we_pitch_start_date;
        $we_pitch_end_date = $request->we_pitch_end_date;
        $we_pitch_from = $request->we_pitch_from;
        $we_pitch_to = $request->we_pitch_to;
        $we_pitch_desc = $request->we_pitch_desc;
        $community_id = $request->community_id;
        $data = DB::table('accepted_communities')->select('name', 'user_id')->where(['id' => $community_id])->first();
        $community_name = $data->name;
        $creator_id = $data->user_id;
        $status = 1;
        $state = $request->state;
        $city = $request->city;
        $sector = $request->sector;
        $type = "we_pitch";
        $jury = $request->jury;
        $faces = $request->faces;
        $event_link = $request->event_link;

        $res = DB::table('community_we_pitch')->insert([
            "we_pitch_title" => $we_pitch_title,
            "we_pitch_poster" => $we_pitch_poster,
            "we_pitch_mode" => $we_pitch_mode,
            "we_pitch_start_date" => $we_pitch_start_date,
            "we_pitch_end_date" => $we_pitch_end_date,
            "we_pitch_from" => $we_pitch_from,
            "we_pitch_to" => $we_pitch_to,
            "we_pitch_desc" => $we_pitch_desc,
            "community_id" => $community_id,
            "community_name" => $community_name,
            "creator_id" => $creator_id,
            "status" => $status,
            "state" => $state,
            "city" => $city,
            "sector" => $sector,
            "type" => $type,
            "jury" => $jury,
            "faces" => $faces,
            "event_link" => $event_link,
        ]);

        if ($res) {
            $image->move('we/images/', $we_pitch_poster);
            return back()->with('success', 'We-pitch Event Added Successfully!');
        } else {
            return back()->with('fail', 'We-pitch Event Can not be Added!');
        }
    }

    // * Show Mormal Event List
    public function list_we_pitch(Request $request)
    {
        $we_pitch_events = DB::table('community_we_pitch')
            ->leftjoin('state_and_city', 'state_and_city.city_id', '=', 'community_we_pitch.city')
            ->leftjoin('sectors', 'sectors.id', '=', 'community_we_pitch.sector')
            ->select('community_we_pitch.*', 'state_and_city.state_name', 'state_and_city.city_name', 'sectors.sectorname')
            ->distinct()
            ->get();
        // dd($we_pitch_events);
        return view("backEnd.we_pitch.event_list", ['we_pitch_events' => $we_pitch_events]);
    }

    // * Show a We-pitch Event based on ID
    public function show_we_pitch(Request $request, $id)
    {
        $we_pitch_event = DB::table('community_we_pitch')
            ->leftjoin('state_and_city', 'state_and_city.city_id', '=', 'community_we_pitch.city')
            ->leftjoin('sectors', 'sectors.id', '=', 'community_we_pitch.sector')
            ->select('community_we_pitch.*', 'state_and_city.state_name', 'state_and_city.city_name', 'sectors.sectorname')
            ->where('community_we_pitch.id', '=', $id)
            ->distinct()
            ->first();

        return view("backEnd.we_pitch.event_details", ['we_pitch_event' => $we_pitch_event]);
    }

    // * Show We Pitch Event Edit Form 
    public function we_pitch_edit_form(Request $request, $id)
    {
        $sector = Sector::latest()->get();
        $states = DB::table('state_and_city')->select('state_id', 'state_name')->distinct()->orderby('state_id')->get();
        $communities = DB::table('accepted_communities')->select('id', 'name')->get();

        $event = DB::table('community_we_pitch')->where(['id' => $id])->first();
        $cities =  DB::table('state_and_city')->select('city_id', 'city_name')->where(['state_id' => $event->state])->get();

        return view('backEnd.we_pitch.edit_form', compact('sector', 'states', 'communities', 'event', 'cities'));
    }

    // * Update We-pitch Event
    public function update_we_pitch(Request $request, $id)
    {

        $we_pitch_title = $request->we_pitch_title;
        $we_pitch_mode = $request->we_pitch_mode;
        $we_pitch_start_date = $request->we_pitch_start_date;
        $we_pitch_end_date = $request->we_pitch_end_date;
        $we_pitch_from = $request->we_pitch_from;
        $we_pitch_to = $request->we_pitch_to;
        $we_pitch_desc = $request->we_pitch_desc;
        $community_id = $request->community_id;
        $data = DB::table('accepted_communities')->select('name', 'user_id')->where(['id' => $community_id])->first();
        $community_name = $data->name;
        $creator_id = $data->user_id;
        $state = $request->state;
        $city = $request->city;
        $sector = $request->sector;
        $jury = $request->jury;
        $faces = $request->faces;
        $event_link = $request->event_link;

        $old_image = DB::table('community_we_pitch')->where(['id' => $id])->select('we_pitch_poster')->first();

        if ($request->hasfile('we_pitch_poster')) {

            $destination = "we/images/" . $old_image->we_pitch_poster;
            if (File::exists($destination)) {
                File::delete($destination);
            }


            $image = $request->file('we_pitch_poster');
            $extension = $image->extension();
            $we_pitch_poster = uniqid("", true) . "." . $extension;

            $res = DB::table('community_we_pitch')->where(['id' => $id])->update([
                "we_pitch_title" => $we_pitch_title,
                "we_pitch_poster" => $we_pitch_poster,
                "we_pitch_mode" => $we_pitch_mode,
                "we_pitch_start_date" => $we_pitch_start_date,
                "we_pitch_end_date" => $we_pitch_end_date,
                "we_pitch_from" => $we_pitch_from,
                "we_pitch_to" => $we_pitch_to,
                "we_pitch_desc" => $we_pitch_desc,
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "state" => $state,
                "city" => $city,
                "sector" => $sector,
                "jury" => $jury,
                "faces" => $faces,
                "event_link" => $event_link,
            ]);
        } else {
            $image = '';
            $res = DB::table('community_we_pitch')->where(['id' => $id])->update([
                "we_pitch_title" => $we_pitch_title,
                "we_pitch_mode" => $we_pitch_mode,
                "we_pitch_start_date" => $we_pitch_start_date,
                "we_pitch_end_date" => $we_pitch_end_date,
                "we_pitch_from" => $we_pitch_from,
                "we_pitch_to" => $we_pitch_to,
                "we_pitch_desc" => $we_pitch_desc,
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "state" => $state,
                "city" => $city,
                "sector" => $sector,
                "jury" => $jury,
                "faces" => $faces,
                "event_link" => $event_link,
            ]);
        }

        if ($res) {
            if ($image) {
                $image->move('we/images/', $we_pitch_poster);
            }
            return back()->with('success', 'We-pitch Event Updated Successfully!');
        } else {
            return back()->with('fail', 'We-pitch Event Can not be Added!');
        }
    }
}
