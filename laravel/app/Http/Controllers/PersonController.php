<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\View\View;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Get average of like
     *
     * @return View
     */
    public function getAverageLike()
    {
        $persons = Person::all();
        return view('average', ['average' => $persons->avg('numberLike')]);
    }

    /**
     * Get the person who's got max of like
     *
     * @return View
     */
    public function getMaxLike()
    {
        $person = Person::orderBy('numberLike', 'desc')->first();
        return view('persons', ['persons' => [$person]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $persons = Person::all();
        return view('persons', ['persons' => $persons]);
    }

    /**
     * Search person by year of birthDate
     *
     * @param string
     * @return View
     */
    public function searchByYear(string $year)
    {
        $person = Person::whereYear('birthDate', $year)->get();
        return view('persons', ['persons' => $person]);

    }

    /**
     * Search person by name
     *
     * @param string
     * @return View
     */
    public function searchByName(string $name)
    {
        $person = Person::where('name', $name)->get();
        return view('persons', ['persons' => $person]);
    }

    /**
     * Find a person with id
     *
     * @param string $id
     * @return mixed
     */
    public function searchById(string $id)
    {
        $person = Person::where('id', $id)->get();
        return $person;
    }


    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return View
     */
    public function show(string $id)
    {
        $person = $this->searchById($id);
        return view('persons', ['persons' => $person]);
    }

    /**
     * Sort persons ordered by descending number of like
     *
     * @return View
     */
    public function sortByNumberLikeDesc()
    {
        $persons = Person::all()->sortByDesc("numberLike");
        return view('persons', ['persons' => $persons]);
    }
}
