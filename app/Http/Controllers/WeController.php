<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Communityapprovedmail;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;
use Illuminate\Support\Facades\Redirect;

class WeController extends Controller
{
    //
    public function index()
    {
        $communities = DB::table('accepted_communities')->limit(12)->get();
        $blogs = DB::table('blogs')->get();
        // dd($communities);
        return view('we/index', compact('communities', 'blogs'));
    }
    public function login(Request $request)
    {
        if ($request->session()->has('FRONT_USER_LOGIN_ID')) {
            return redirect()->route('we.event');
        }
        return view('we.login');
    }
	public function awards()
    {
        $upcoming_awards = DB::table('award')
            ->where(['status' => 1])
            ->select('*')
            ->get();

        $past_awards = DB::table('award')
        ->where(['status' => 0])
        ->select('*')
        ->get();
        
        //dd($upcoming_awards);
        return view('we.awards', ['upcoming_awards' => $upcoming_awards, 'past_awards' => $past_awards]);

    }
	public function awards_detail($id)

    {

        $awards = DB::table('award')

            ->where(['id' => $id])

            ->select('*')

            ->get();

        return view('we.awards-details', ['awards' => $awards]);



    }
    public function awards_past()
    {
        $upcoming_awards = DB::table('award')
            ->where(['status' => 1])
            ->select('*')
            ->get();

        $past_awards = DB::table('award')
        ->where(['status' => 0])
        ->select('*')
        ->get();
        
        //dd($upcoming_awards);
        return view('we.awards-past', ['upcoming_awards' => $upcoming_awards, 'past_awards' => $past_awards]);

    }
    public function blog()
    {
        return view('we.blog');
    }
    public function pitchdeck()
    {
        return view('we.pitchdeck');
    }
    public function communities()
    {
       $communities = DB::table('accepted_communities')->paginate(6);
        $users = DB::table('users')->limit(12)->get();

        return view('we.communities', compact('communities', 'users'));
    }
    public function community_page()
    {
        return view('we.community-page');
    }
    public function contact_us()
    {
        return view('we.contact-us');
    }
    public function create_community_loggedin_stage2()
    {
        return view('we.create-community-loggedin-stage-2');
    }
    public function create_community_loggedin_stage3()
    {

        //$email = Auth::user()->email;
        //dd($email);
        $data = array(
            //'email' => $email,
            'email' => 'mosuhail084@gmail.com',
            //'name' => 'name',
        );
        Mail::to($data)->send(new Communityapprovedmail($data));
        return view('we.create-community-loggedin-stage-3');
    }
    public function create_community_main(Request $request)
    {
        $countries = DB::table('countries')->get();
        $industries = DB::table('industries')->get();
        $user_id = $request->session()->get('FRONT_USER_LOGIN_ID');
        $check = DB::table('communities')->where(['user_id' => $user_id, 'status' => 2])->get();
        if (isset($check[0])) {
            return view('we.create-community-fail');
        }
        return view('we.create-community-main', compact('countries', 'industries'));
    }
    public function edit_profile(Request $request)
    {
        $user_id = $request->session()->get('FRONT_USER_LOGIN_ID');
        $user = DB::table('users')->where(['id' => $user_id])->get();
        return view('we.edit-profile', compact('user'));
    }
 public function user_profile(Request $request)
    {
        $user_id = $request->session()->get('FRONT_USER_LOGIN_ID');
        $user = DB::table('users')->where(['id' => $user_id])->get();
        $com_ids = DB::table('community_followers')->where(['user_id' => $user_id])->select('community_id')->get();
        //$communities = [];
        foreach($com_ids as $com_id){
        //dd($com_id->community_id);
        $communities[] = DB::table('accepted_communities')->where(['id' => $com_id->community_id])->first();

       }

      // dd($communities);
       
        return view('we.profile-page', compact('user','communities'));
    }
	  public function update_profile(Request $request)
    {
        try {
            $data = $request->except(['_token', '_method']);

            $user_id = session()->get('FRONT_USER_LOGIN_ID');

            
            DB::table('users')->where(['id' => $user_id])->update($data);

            $output = array('msg' => 'Updated Successfully');
            return back()->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }
    public function event()
    {
        $upcoming_event = DB::table('events')
            ->join('cities', 'events.city_id', '=', 'cities.id')
            ->join('states', 'events.state_id', '=', 'states.id')
            ->where(['events.type' => 1])
            ->select('events.*', 'cities.name as city_name', 'states.statename')
            ->get();

        $past_event = DB::table('events')
            ->join('cities', 'events.city_id', '=', 'cities.id')
            ->join('states', 'events.state_id', '=', 'states.id')
            ->where(['events.type' => 0])
            ->select('events.*', 'cities.name as city_name', 'states.statename')
            ->get();


        return view('we.event', ['upcoming_event' => $upcoming_event, 'past_event' => $past_event]);
    }
    public function event_page($event_id)

    {

        $event = DB::table('events')

            ->join('cities', 'events.city_id', '=', 'cities.id')

            ->join('states', 'events.state_id', '=', 'states.id')

            ->where('events.id', $event_id)

            ->select('events.*', 'cities.name as city_name', 'states.statename')

            ->first();

        return view('we.event-page', ['event' => $event]);
    }

    public function express_login()
    {
        return view('we.express-login');
    }
    public function faq()
    {
        return view('we.faq');
    }
    public function get_started(Request $request)
    {
        if ($request->session()->has('FRONT_USER_LOGIN_ID')) {
            return redirect()->route('we.event');
        }
        return view('we.get-started');
    }
    public function homepage_login()
    {
        return view('we.homepage-login');
    }
    public function incubation()
    {
        return view('we.incubation');
    }
    public function in_the_press()
    {
        return view('we.in-the-press');
    }

    public function ourteam()
    {
        return view('we.ourteam');
    }

    public function profile_page()
    {
        return view('we.profile-page');
    }
    public function resource()
    {
        return view('we.resource');
    }
    public function signup_step_2()
    {
        return view('we.signup-step-2');
    }
    public function signup_step_3()
    {
        return view('we.signup-step-3');
    }
    public function we_learning()
    {
        return view('we.we-learning');
    }
    public function we_shop()
    {
        return view('we.we-shop');
    }

    public function empty_community()
    {
        return view('we.empty-community');
    }

    public function edit_community_details()
    {
        return view('we.edit-community-details');
    }

    public function join_community(Request $request, $com_id)
    {
        $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');

        DB::table('community_followers')->insert([
            'user_id' => $user_id,
            'community_id' => $com_id
        ]);

        DB::table('accepted_communities')->where('id', $com_id)->increment('followers');

        return redirect()->back()->with('msg', 'Community joined successfully');
    }

    public function unfollow_community(Request $request, $com_id)
    {
        $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');
        DB::table('community_followers')->where(['user_id' => $user_id, 'community_id' => $com_id])->delete();

        DB::table('accepted_communities')->where('id', $com_id)->decrement('followers');
        return redirect()->back()->with('msg', 'Community Unfollowed');
    }

       public function community_post_poll(Request $request)
    {
        $type = $request->type;

        // * FOR POST
        if ($type == "post") {
            $community_id = $request->community_id;
            $community_name = $request->community_name;
            $creator_id = $request->creator_id;
            $post_title = $request->post_title;
            if ($request->hasfile('post_image')) {
                $image = $request->file('post_image');
                $extension = $image->extension();
                $post_image = uniqid("", true) . "." . $extension;
                $image->move('we/images/', $post_image);
            }
            $post_content = $request->post_content;
            $status = $request->status ?? 1;
            $post_date = date("l, d F, Y");  // Saturday, 12 February, 2022
            $res = DB::table('community_post')->insert([
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "post_title" => $post_title,
                "post_image" => $post_image,
                "post_content" => $post_content,
                "status" => $status,
                "post_date" => $post_date
            ]);
            if ($res) {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Post Drafted Successfully");
                }
                return redirect()->back()->with("success", "Post Created Successfully");
            } else {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Post Can't be Drafted");
                }
                return redirect()->back()->with("fail", "Post Can't be Created");
            }
        }

        // * FOR POLL
        if ($type ==  "poll") {
            $community_id = $request->community_id;
            $community_name = $request->community_name;
            $creator_id = $request->creator_id;
            $poll_title = $request->poll_title;
            $poll_options_arr = $request->poll_options;
            // $poll_options = implode(",", $poll_options_arr);
            $poll_date = date("l, d F, Y");  // Saturday, 12 February, 2022
            $poll_end_time =$request->poll_end_time;  // Saturday, 12 February, 2022
            $status = $request->status ?? 1;

            $com_poll_id = DB::table('community_poll')->insertGetId([
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "poll_title" => $poll_title,
                "poll_date" => $poll_date,
                "poll_end_time" => $poll_end_time,
                "status" => $status
            ]);

            foreach ($poll_options_arr as $option) {
                DB::table('community_poll_vote')->insert([
                    'community_poll_id' => $com_poll_id,
                    'poll_option' => $option
                ]);
            }

            if ($com_poll_id) {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Poll Drafted Successfully");
                }
                return redirect()->back()->with("success", "Poll Created Successfully");
            } else {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Poll Can't be Drafted");
                }
                return redirect()->back()->with("fail", "Poll Can't be Created");
            }
        }

        // * FOR RESOURCE
        if ($type == "resource") {
            $community_id = $request->community_id;
            $community_name = $request->community_name;
            $creator_id = $request->creator_id;
            $resource_title = $request->resource_title;
            $resource_content = $request->resource_content;
            $resource_date = date("l, d F, Y");  // Saturday, 12 February, 2022
            $status = $request->status ?? 1;

            $res = DB::table('community_resource')->insert([
                "community_id" => $community_id,
                "community_name" => $community_name,
                "creator_id" => $creator_id,
                "resource_title" => $resource_title,
                "resource_content" => $resource_content,
                "resource_date" => $resource_date,
                "status" => $status,
            ]);


            if ($res) {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Resource Drafted Successfully");
                }
                return redirect()->back()->with("success", "Resource Created Successfully");
            } else {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Resource Can't be Drafted");
                }
                return redirect()->back()->with("fail", "Resource Can't be Created");
            }
        }
    }
    public function community_events(Request $request)
    {
        $type = $request->type;

        // * FOR NORMAL EVENT
        if ($type == "normal_event") {
            // dd($request->all());
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
            $community_name = $request->community_name;
            $creator_id = $request->creator_id;
            $status = $request->status ?? 1;
            $state = 'none';
            $city = 'none';
            $sector = 'none';
            $jury = 'none';
            $faces = 'none';
            $event_link = 'none';

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
                if ($status == 0) {
                    return redirect()->back()->with("success", "Normal Event Drafted Successfully");
                }
                return redirect()->back()->with("success", "Normal Event Created Successfully");
            } else {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Normal Event Can't be Drafted");
                }
                return redirect()->back()->with("fail", "Normal Event Can't be Created");
            }
        }

        // * FOR ROUND TABLE
        if ($type == "round_table") {
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
            $community_name = $request->community_name;
            $creator_id = $request->creator_id;
            $status = $request->status ?? 1;
            $state = 'none';
            $city = 'none';
            $sector = 'none';
            $jury = 'none';
            $faces = 'none';
            $event_link = 'none';

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
                if ($status == 0) {
                    return redirect()->back()->with("success", "Round Table Drafted Successfully");
                }
                return redirect()->back()->with("success", "Round Table Created Successfully");
            } else {
                if ($status == 0) {
                    return redirect()->back()->with("success", "Round Table Can't be Drafted");
                }
                return redirect()->back()->with("fail", "Round Table Can't be Created");
            }
        }

        // * FOR WE PITCH
        if ($type == "we_pitch") {
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
            $community_name = $request->community_name;
            $creator_id = $request->creator_id;
            $status = $request->status ?? 1;
            $state = 'none';
            $city = 'none';
            $sector = 'none';
            $jury = 'none';
            $faces = 'none';
            $event_link = 'none';

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
                if ($status == 0) {
                    return redirect()->back()->with("success", "We Pitch Drafted Successfully");
                }
                return redirect()->back()->with("success", "We Pitch Created Successfully");
            } else {
                if ($status == 0) {
                    return redirect()->back()->with("success", "We Pitch Can't be Drafted");
                }
                return redirect()->back()->with("fail", "We Pitch Can't be Created");
            }
        }
    }
    // * Like Community
    public function like_community(Request $request)
    {

        $post_id = $request->post_id;
        $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');

        DB::table('community_likes')->insert([
            'user_id' => $user_id,
            'community_post_id' => $post_id
        ]);

        $data = DB::table('community_post')->where(['id' => $post_id])->select(['like_count'])->first();

        $check = DB::table('community_post')->where(['id' => $post_id])->update([
            'like_count' => $data->like_count + 1
        ]);


        if ($check) {
            return response()->json(['status' => 'succcess']);
        } else {
            return response()->json(['status' => 'fail']);
        }
    }

    // * Community Poll Vote
    public function poll_vote(Request $request)
    {
        $opt_id = $request->opt_id;
        $poll_id = $request->poll_id;
        $user_id =  $request->session()->get('FRONT_USER_LOGIN_ID');

        $res1 = DB::table('community_poll_vote')->where(['id' => $opt_id])->increment('vote');
        $res2 = DB::table('community_poll_user')->insert([
            'user_id' => $user_id,
            'community_poll_id' => $poll_id
        ]);

        if ($res1 && $res2) {
            return response()->json(['status' => 'succcess']);
        } else {
            return response()->json(['status' => 'fail']);
        }
    }
	 public function newsletter_store(Request $request)

    {

        DB::table('newsletter')->insert([

            'email' => $request->email

           

        ]);

        return Redirect::back()->withErrors(['msg' => 'Success']);

    }
}
