<?php

namespace App\Http\Controllers\Api;

use App\Models\Tournament;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Http\Resources\TournamentResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TournamentController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = User::find(Auth::id());
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        Gate::authorize('view-tournaments');

        return TournamentResource::collection(
            Tournament::where('user_id', $this->user->id)->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreTournamentRequest $request
     * @return TournamentResource
     */
    public function store(StoreTournamentRequest $request)
    {
        Gate::authorize('create-tournament');
        $tournament = $this->user->tournaments()->create($request->validated());

        return TournamentResource::make($tournament);
    }

    /**
     * Display the specified resource.
     * @param Tournament $tournament
     * @return TournamentResource
     */
    public function show(Tournament $tournament)
    {
        Gate::authorize('show', $tournament);

        return TournamentResource::make($tournament);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateTournamentRequest $request
     * @param Tournament $tournament
     * @return TournamentResource
     */
    public function update(UpdateTournamentRequest $request, Tournament $tournament)
    {
        Gate::authorize('update', $tournament);
        $tournament->update($request->validated());

        return TournamentResource::make($tournament);
    }

    /**
     * Remove the specified resource from storage.
     * @param Tournament $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        Gate::authorize('delete', $tournament);
        $tournament->delete();

        return response()->json(
            ['message' => 'Tournament deleted successfully'],
            200
        );
    }

}
