<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Skill;

class mycvController extends Controller
{
    public function show()
    {
        
            $listcvs = Resume::all();
            $listexps = Experience::all();
            $listedcs = Education::all();
            $listskills = Skill::all();
            $listsawrds = Award::all();
            $listservs= Service::all();
            
        return view('portfolio/index', [
            'listcvs' => $listcvs,
            'listexps'=>$listexps,
            'listedcs'=>$listedcs,
            'listskills'=>$listskills,
            'listsawrds'=>$listsawrds,
            'listservs'=>$listservs
    ]);
    }
   
}
