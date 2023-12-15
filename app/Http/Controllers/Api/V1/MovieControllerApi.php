<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MovieResource;
use App\Traits\Httpresponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieControllerApi extends Controller
{
    use Httpresponses;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MovieResource::collection(Movie::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'genre' => 'required|string',
            'description' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return $this->error('Error', 422, $validator->errors());
        }

        $created = Movie::create($validator->validated());

        if (!$created) {
            return $this->error('Movie not created', 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new MovieResource(Movie::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'genre' => 'required|string',
            'description' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return $this->error('Error', 422, $validator->errors());
        }

        $validated = $validator->validated();

        $updated = $movie->update([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'description' => $validated['description']
        ]);

        if (!$updated) {
            return $this->error('Movie not updated', 400);
        }

        return $this->response('Movie updated', 200, new MovieResource($movie));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $deleted = $movie->delete();

        if (!$deleted) {
            return $this->error('Movie not deleted', 400);
        }
        return $this->response('Movie deleted', 200);
    }
}
