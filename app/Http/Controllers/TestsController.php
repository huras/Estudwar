<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;
use App\Models\Blacklist;
use App\Models\Cluster;

class TestsController extends Controller
{
    public function getRegistersDisponiveis(){
        $cluster = Cluster::all();
        $unavaliablePeopleIds = [];
        // dd($cluster->blacklisters[0]->blacklist->reason);
        foreach($cluster as $clus){
            $unavaliablePeoples = $clus->blacklisters;
            foreach($unavaliablePeoples as $unavaliablePeople){
                $unavaliablePeopleIds[] = $unavaliablePeople->id;
                echo $unavaliablePeople->id.' '.$unavaliablePeople->name.' '.$unavaliablePeople->blacklist->reason.''.'<br>';
            }
        }

        dd($unavaliablePeopleIds);
    }
}
