<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Planet;

use App\Models\Comet;

use App\Models\Constellation;

use App\Models\Observatory;

use App\Models\News;


class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    // upload planets
    
    public function add_planets(){

        $planets = Planet::all();


        return view('admin.add_planets', compact('planets'));

    }
    public function upload_planets(Request $request)
    {

        $planets = new Planet;

        $planets->name = $request->name;

        $image = $request->image;

        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('images', $imagename);

            $planets->image ='images/'. $imagename;
        }

        $planets->description = $request->description;

        $planets->diameter = $request->diameter;

        $planets->atmosphere = $request->atmosphere;

        $planets->distance_from_sun = $request->dfs;

        $planets->distance_from_earth = $request->dfe;


        $planets->save();

        return redirect()->back();


    }
    // upload comets
    public function add_comets(){

        $comets = Comet::all();


        return view('admin.add_comets', compact('comets'));

    }

    public function upload_comets(Request $request)
    {

        $comets = new Comet;

        $comets->name = $request->name;

        $image = $request->image;

        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('images', $imagename);

            $comets->image ='images/'. $imagename;
        }

        $comets->description = $request->description;

        $comets->discovery_date = $request->dd;

        $comets->period = $request->period;

        $comets->last_perihelion = $request->lp;

        $comets->next_perihelion = $request->np;


        $comets->save();

        return redirect()->back();


    }
    //upload constellation
    public function add_constellation(){

        $constellations = Constellation::all();


        return view('admin.add_constellation', compact('constellations'));

    }

    public function upload_constellation(Request $request)
    {

        $constellations = new Constellation;

        $constellations->name = $request->name;

        $image = $request->image;

        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('images', $imagename);

            $constellations->image ='images/'. $imagename;
        }

        $constellations->description = $request->description;

        $constellations->history = $request->history;

        $constellations->mythology = $request->mythology;

        $constellations->stars = $request->stars;

        $constellations->save();

        return redirect()->back();


    }
    //upload observatory
    public function add_observatory(){

        $observatories = Observatory::all();


        return view('admin.add_observatory', compact('observatories'));

    }

    public function upload_observatory(Request $request)
    {

        $observatories = new Observatory;

        $observatories->name = $request->name;

        $image = $request->image;

        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('images', $imagename);

            $observatories->image = 'images/'. $imagename;
        }

        $observatories->description = $request->description;

        $observatories->location = $request->location;

        $observatories->latitude = $request->latitude;

        $observatories->longitude = $request->longitude;

        $observatories->website = $request->website;


        $observatories->save();

        return redirect()->back();


    }
    //upload news
    public function add_news(){

        $news = News::all();


        return view('admin.add_news', compact('news'));

    }

    public function upload_news(Request $request)
    {

        $news = new News;

        $news->title = $request->title;

        $image = $request->image;

        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('images', $imagename);

            $news->image = 'images/'. $imagename;
        }

        $news->slug = $request->slug;

        $news->content = $request->content;

        $news->website = $request->website;

        $news->published_at = $request->pa;



        $news->save();

        return redirect()->back();


    }
}
