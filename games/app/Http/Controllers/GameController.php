<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $game = new Game();
        $game->game_name = $request->game_name;
        $game->platform = $request->platform;
        $game->genre = $request->genre;
        $game->rating = $request->rating;
        $game->save();

        return redirect('/games');
    }

    public function show($id)
    {
        $game = Game::find($id);
        return view('games.show', ['game' => $game]);
    }

    public function edit($id)
    {
        $game = Game::find($id);
        return view('games.edit', ['game' => $game]);
    }

    public function update(Request $request, $id)
    {
        $game = Game::find($id);
        $game->game_name = $request->game_name;
        $game->platform = $request->platform;
        $game->genre = $request->genre;
        $game->rating = $request->rating;
        $game->save();

        return redirect('/games');
    }

    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();

        return redirect('/games');
    }
}