<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Artist extends Controller
{
    /**
     * 
     * @var \Illuminate\Http\Request
     */
    protected $request;
    
    public function __construct(Request $request) {
        $this->request = $request;
    }
    
    public function view(){
        
        $artists = \App\Models\Artist::paginate(25);
        
       
        return view('artist.view', [
            'artists' => $artists
        ]);
    }
    
    public function artists($id){
        
        $artist = \App\Models\Artist::with(['albums'])->where('ArtistId', $id)->first();
        
        return view('artist.artist', [
            'artist' => $artist
        ]);
        
    }
    public function albums($id, $albumId){
        
        $artist = \App\Models\Artist::with(['album.tracks' => function($q) use($albumId){
            $q->where('AlbumId', $albumId);
        }])->where('ArtistId', $id)->first();
        
       
        return view('artist.album', [
            'artist' => $artist
        ]);
        
    }
}
