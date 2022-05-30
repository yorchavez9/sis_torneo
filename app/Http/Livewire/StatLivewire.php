<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Player;
use App\Models\Stat;
use App\Models\Team;
use Carbon\Carbon;
use Livewire\Component;

class StatLivewire extends Component{

    public $isOpen=false;
    public $team_id,$game_id,$player,$type,$local,$visitor;
    public $ganador;
    public $equipos;

    public function render(){
        $games=Game::all();
        $teams=Team::where('name',$this->local)->orWhere('name',$this->visitor)->get();
        $players=Player::where('team_id',$this->team_id)->get();

        return view('livewire.stat-livewire',compact('games','players','teams'));
    }

    //cambia el estado del partido [Programado,Iniciado,Terminado]
    public function status($idgame,$value){
        $game=Game::find($idgame);
        $game->status=$value;
        //$game->save();
        if($value=='Terminado'){
            $teams=Stat::where('game_id',$idgame)->select('team_id')->groupBy('team_id')->distinct()->get();
            //$this->equipos=(json_encode($teams));
            //Si no hay registro de goles => empate si goles
            if(!$teams->isEmpty()){
                $countGoals=[];
                $nameTeam=[];
                //$this->equipos=(json_encode($teams));
                foreach ($teams as $key=>$team) {
                    $goals=Stat::where('team_id',$team->team_id)->where('type','Gol')->get();
                    $nameTeam[$key]=$team->team_id;
                    $countGoals[$key]=$goals->count();
                }
                //$this->equipos=(json_encode($nameTeam));
                $game->glocal=$countGoals[0];
                $game->gvisitante=$countGoals[1];
                //Empate misma cantidad de goles
                if($countGoals[0]==$countGoals[1]){
                    $game->winner="Empate";
                    //$this->ganador="Empate";
                }else{
                    if($countGoals[0]>$countGoals[1]){
                        $team=Team::find($nameTeam[0]);
                        //$this->ganador=$team->name." [".$countGoals[0]."]";
                        $game->winner=$team->name;
                    }else{
                        $team=Team::find($nameTeam[1]);
                        //$this->ganador=$team->name." [".$countGoals[1]."]";
                        $game->winner=$team->name;
                    }
                }
            //Empate 0 a 0 sin goles
            }else{
                $game->glocal=0;
                $game->gvisitante=0;
                $game->winner="Empate";
                $this->ganador="Empate";
            }
            //$this->emit('alert','Partido Terminado');
        }
        $game->save();
    }

    public function create(Game $game,$type){
        $this->game_id=$game->id;
        $this->visitor=$game->visitor;
        $this->local=$game->local;
        $this->type=$type;
        $this->isOpen=true;
        //return view('livewire.stat-create');
    }

    public function store(){
        $this->validate([
            'player'=>'required'
        ]);
        $mytime = Carbon::now();
        Stat::create([
            'player'=>$this->player,
            'type'=>$this->type,
            'datetime'=>$mytime->toDateTimeString(),
            'team_id'=>$this->team_id,
            'game_id'=>$this->game_id
        ]);
        $this->reset(['isOpen']);
        $this->emit('alert','Registro creado satisfactoriamente');
    }


}
