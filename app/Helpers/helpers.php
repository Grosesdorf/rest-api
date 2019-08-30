<?php
namespace App\Helpers;

// function return DATE in format "1 Серпня 2019, 10:10"

use Carbon\Carbon;

    function customFormatDate($date) {

        $date_parse = Carbon::parse($date)->locale('uk');
            return $date_parse->translatedFormat('jS F Y, g:i');
    }

