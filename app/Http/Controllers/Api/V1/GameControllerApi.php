<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Game;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\GameResource;
use App\Traits\Httpresponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameControllerApi extends Controller
{
    use Httpresponses;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GameResource::collection(Game::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'studio' => 'required|string',
            'releaseDate' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return $this->error('Error', 422, $validator->errors());
        }

        $created = Game::create($validator->validated());

        if (!$created) {
            return $this->error('Game not created', 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new GameResource(Game::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'studio' => 'required|string',
            'releaseDate' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return $this->error('Error', 422, $validator->errors());
        }

        $validated = $validator->validated();

        $updated = $game->update([
            'name' => $validated['name'],
            'studio' => $validated['studio'],
            'releaseDate' => $validated['releaseDate']
        ]);

        if (!$updated) {
            return $this->error('Game not updated', 400);
        }

        return $this->response('Game updated', 200, new GameResource($game));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $deleted = $game->delete();

        if (!$deleted) {
            return $this->error('Game not deleted', 400);
        }
        return $this->response('Game deleted', 200);
    }
}
