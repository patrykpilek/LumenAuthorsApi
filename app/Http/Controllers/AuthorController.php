<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of authors
     */
    public function index()
    {
        //
    }

    /**
     * Create one new author
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Obtains and show one author
     */
    public function show($author)
    {
        //
    }

    /**
     * Update an existing author
     */
    public function update(Request $request, $author)
    {
        //
    }

    /**
     * Remove an existing author
     */
    public function destroy($author)
    {
        //
    }
}
