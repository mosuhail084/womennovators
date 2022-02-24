<?php

namespace App\Http\Controllers\Influncers;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Influencer;
use App\Models\Influencer_profile;
use App\Models\Country;
use App\Models\Industry;
use Illuminate\Http\Request;
use DB;
use Auth;

class WizardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:influencer');
    }
    public function index()
    {
      $country = Country::get();
      $state = State::get();
       // dd($state);
        return view('influencers/wizad/wizard',compact('state','country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $user = User::latest()->paginate(3);
        // dd($user);
        return view('faces.facesdetails.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */

    public function autocomplete(Request $request)
    {
        $res = Country::select("country_name")
                ->where("country_name","LIKE","%{$request->term}%")
                ->limit(5)->get();
    //dd($res);
        return response()->json($res);
    }
    public function autocompletecity(Request $request)
    {
        $res = State::select("statename")
                ->where("statename","LIKE","%{$request->term}%")
                ->limit(5)->get();
    //dd($res);
        return response()->json($res);
    }
    public function autocompleteindustry(Request $request)
    {
        dd($request);
       /* $res = Industry::select("name")
                ->where("name","LIKE","%{$request->term}%")
                ->limit(5)->get();
    //dd($res);
        return response()->json($res);*/
    }
    function fetch(Request $request)
    {
       // dd( $request);
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data1 = DB::table('countries')
        ->where('country_name', 'LIKE', "%{$query}%")
        ->get();
      //$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        $output = '';
      foreach($data1 as $row)
      {
       // $output .= '
       // <li><a>'.$row->country_name.'</a></li>
       // ';
        $output .= '<option value="'.$row->country_name.'">';
      }
      // $output .= '</ul>';
      return $output;
     }
    }
    function city(Request $request)
    {
       // dd( $request);
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('states')
        ->where('statename', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->statename.'</a></li>
       ';
      }
      $output .= '</ul>';
     // dd($output);
      echo $output;
     }
    }
    function industry(Request $request)
    {
       // dd( $request);
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('industries')
        ->where('name', 'LIKE', "%{$query}%")
        ->get();
      //$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        $output = '';
      foreach($data as $row)
      {
       // $output .= '
       // <li><a>'.$row->name.'</a></li>
       // ';
        $output .= '<option value="'.$row->name.'">';
      }
      // $output .= '</ul>';
     // dd($output);
      return $output;
     }
    }
    function qualification(Request $request)
    {
       // dd( $request);
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('degrees')
        ->where('name', 'LIKE', "%{$query}%")
        ->get();
      //$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      $output = '';
      foreach($data as $row)
      {
       // $output .= '
       // <li><a href="#">'.$row->name.'</a></li>
       // ';
        $output .= '<option value="'.$row->name.'">';
      }
      // $output .= '</ul>';
     // dd($output);
      return $output;
     }
    }
    public function store(Request $request)
    {
       //dd($request);
     /*   $request->validate([
            'name' => "required"
        ]);*/

        try {
            $data=$request->except(['_token']);
            if($request->comp_name||$request->comp_design)
            {
                $data['network2']=1;
            }
            if($request->residential_area)
            {
                $data['network4']=1;
            }
            if($request->friend_name)
            {
                $data['network1']=1;
            }
            $data['influencer_id']=Auth::user()->id;
          //  dd($data);
            $data = Influencer_profile::Create($data);
           
            $output = array('msg' => 'Create Successfully');
            return redirect('influencer/home')->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
       // $city = city::latest()->get();
        $blog = Blog::where('id', $id)->first();
        return view('faces.blog.edit', compact('id', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'name' => "required"
        ]);


        try {
            $data=$request->except(['_token']);
            if($request->hasFile('authorimage'))
            {
                $file=$request->file('authorimage');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/blog_image/',$filename);
                $data['authorimage']=$filename;
            }
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('backEnd/image/blog_image/',$filename);
                $data['image']=$filename;
            }
            Blog::find($id)->update($data);
            
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {

            Blog::destroy($id);
            $output = array('msg' => 'Deleted Successfully');
            return back()->with('success', $output);
              
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }

}
