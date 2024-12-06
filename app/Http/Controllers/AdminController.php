<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Comet;
use App\Models\Constellation;
use App\Models\Observatory;
use App\Models\News;






class AdminController extends Controller
{   //planet
    public function view_planets()
    {
        $planets = Planet::all();
        return view ('admin.planets', compact('planets'));

    }
    public function delete_planets($id)
    {

        $planets = Planet::find($id);

        $planets->delete();

        return redirect()->back();

    }
    public function update_planets($id)
    {

        $planets = Planet::find($id);
        return view('admin.update_planets', compact('planets'));

    }
    public function edit_planets(Request $request, $id)
    {

        $planets = Planet::find($id);

        $planets->name = $request->name;
        $image = $request->file('image');

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
    
            $image->move(public_path('images'), $imagename);
    
            $planets->image = 'images/' . $imagename;
        }
        

        $planets->description = $request->description;

        $planets->diameter = $request->diameter;

        $planets->atmosphere = $request->atmosphere;

        $planets->distance_from_sun = $request->dfs;

        $planets->distance_from_earth = $request->dfe;

        $planets->save();

        return redirect('/view_planets');

    }
    //comet
    public function view_comets()
    {
        $comets = Comet::all();
        return view ('admin.comets', compact('comets'));

    }
    public function delete_comets($id)
    {

        $comets = Comet::find($id);

        $comets->delete();

        return redirect()->back();

    }
    public function update_comets($id)
    {

        $comets = Comet::find($id);
        return view('admin.update_comets', compact('comets'));

    }
    public function edit_comets(Request $request, $id)
    {

        $comets = Comet::find($id);

        $comets->name = $request->name;

        $image = $request->file('image');


        if ($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('images'), $imagename);


            $comets->image ='images/'. $imagename;

        }

        $comets->description = $request->description;

        $comets->discovery_date = $request->dd;

        $comets->period = $request->period;

        $comets->last_perihelion = $request->lp;

        $comets->next_perihelion = $request->np;


        $comets->save();

        return redirect('/view_comets');

    }
    //constellation
    public function view_constellation()
    {
        $constellations = Constellation::all();
        return view ('admin.constellation', compact('constellations'));

    }
    public function delete_constellation($id)
    {

        $constellations = Constellation::find($id);

        $constellations->delete();

        return redirect()->back();

    }
    public function update_constellation($id)
    {

        $constellations = Constellation::find($id);
        return view('admin.update_constellation', compact('constellations'));

    }
    public function edit_constellation(Request $request, $id)
    {

        $constellations = Constellation::find($id);

        $constellations->name = $request->name;

        $image = $request->file('image');


        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('images'), $imagename);


            $constellations->image ='images/'. $imagename;

        }

        $constellations->description = $request->description;

        $constellations->history = $request->history;

        $constellations->mythology = $request->mythology;

        $constellations->stars = $request->stars;


        $constellations->save();

        return redirect('/view_constellation');

    }
    //observatory
    public function view_observatory()
    {
        $observatories = Observatory::all();
        return view ('admin.observatory', compact('observatories'));

    }
    public function delete_observatory($id)
    {

        $observatories = Observatory::find($id);

        $observatories->delete();

        return redirect()->back();

    }
    public function update_observatory($id)
    {

        $observatories = Observatory::find($id);
        return view('admin.update_observatory', compact('observatories'));

    }
    public function edit_observatory(Request $request, $id)
    {

        $observatories = Observatory::find($id);

        $observatories->name = $request->name;

        $image = $request->file('image');


        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('images'), $imagename);


            $observatories->image ='images/'. $imagename;

        }

        $observatories->description = $request->description;

        $observatories->location = $request->location;

        $observatories->latitude = $request->latitude;

        $observatories->longitude = $request->longitude;

        $observatories->website = $request->website;


        $observatories->save();

        return redirect('/view_observatory');

    }
    //News
    public function view_news()
    {
        $news = News::all();
        return view ('admin.news', compact('news'));

    }
    public function delete_news($id)
    {

        $news = News::find($id);

        $news->delete();

        return redirect()->back();

    }
    public function update_news($id)
    {

        $news = News::find($id);
        return view('admin.update_news', compact('news'));

    }
    public function edit_news(Request $request, $id)
    {

        $news = News::find($id);

        $news->title = $request->title;

        $image = $request->file('image');


        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('images'), $imagename);


            $news->image ='images/'. $imagename;

        }

        $news->slug = $request->slug;

        $news->content = $request->content;

        $news->website = $request->website;

        $news->published_at = $request->pa;

        $news->save();

        return redirect('/view_news');

    }
}
