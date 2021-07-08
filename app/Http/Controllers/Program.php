<?php

namespace App\Http\Controllers;

use App\Services\Program\ProgramService;
use Carbon\Carbon;

class Program extends Controller {

    private ProgramService $programService;

    public function __construct( ProgramService $programService ) {
        $this->programService = $programService;
    }

    public function getList() {
        $now = Carbon::now();
        $channel = \App\Models\Program\Program::first()->id;
        $programs = $this->programService->getProgramsForDay( $channel, $now );
        return view( "program/list", [
            'now' => $now,
            'channel' => $channel,
            'programs' => $programs
        ] );
    }
}
