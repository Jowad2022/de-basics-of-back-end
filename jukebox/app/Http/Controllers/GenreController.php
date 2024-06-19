<?php

// app/Http/Controllers/GenreController.php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View; // Import the View class

class GenreController extends Controller
{
    /**
     * Toon alle genres op de dashboardpagina.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $genres = Genre::all();
        return view('dashboard', compact('genres'));
    }
}
