<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param \Illuminate\Http\Request $request
     * @param  string  $path
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, string $path)
    {
        $width = request()->input('w');
        $height = request()->input('h');

        $path = 'events'. DIRECTORY_SEPARATOR . $path;
        // Obtenez le chemin complet de l'image
        $imagePath = public_path($path);

        // Vérifier si le fichier existe
        if (file_exists($imagePath)) {
            // Redimensionner l'image
            $image = \Intervention\Image\Facades\Image::make($imagePath);

            // Redimensionner l'image si les paramètres de taille sont spécifiés
            if ($width && $height) {
                $image->fit($width, $height);
            }

            // Obtenez l'encodage de l'image redimensionnée
            $encodedImage = $image->encode('data-url');

            // Afficher l'image redimensionnée dans la balise <img>
            return $encodedImage;
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
