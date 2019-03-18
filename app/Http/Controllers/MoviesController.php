<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

use App\Http\Requests\MovieRequest;

class MoviesController extends Controller
{
     public function create(Request $request)
    {
        
        
        if ($request->isMethod('POST')) {
            // $movie = Movie::create(['title' => $request->title, 'content' => $request->content]);
            
            $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'files' => 'required'
            ]);
            
            $movie = new Movie();
            $movie->title = $request->title;
            $movie->content = $request->content;
            $movie->save();
            
            foreach ($request->file('files') as $index => $e) {
                $ext = $e['image']->guessExtension();
                $filename = "{$request->title}_{$index}.{$ext}";
                $path = $e['image']->storeAs('images', $filename);
                
                $movie->images()->create(['path' => $path]);
            }
            
            return back()->with(['success' => '保存しました！']);
            
        }

       
        return view('movies.create');
    }
    
    
    
    public function index() {
        $movies = Movie::all();
        
        
        
            
    return view('movies.index', compact('movies'));
        
    }
    
    public function show($id)
    {
        $movie = Movie::find($id);

        return view('movies.show', [
            'movie' => $movie,
        ]);
    }
}
