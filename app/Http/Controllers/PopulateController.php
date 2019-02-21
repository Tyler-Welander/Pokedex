<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopulateController extends Controller
{
    function sanitizeString($str) {
        $length = strlen($str) - 4;
        $str = substr($str, 2, $length);
        $str = str_replace('""', '', $str);
        $str = str_replace('", "', ' ', $str);
        return $str;
    }

    function populate() {
        $counter = 0;
        if (($handle = fopen(public_path() . "\pokedex.csv", "r")) !== FALSE)
        {
            while (( $data = fgetcsv($handle, 1000, ',')) !== FALSE)
            {
                $counter++;
                if ($counter == 1) continue;
                $types = PopulateController::sanitizeString($data[2]);
                $abilities = PopulateController::sanitizeString($data[5]);
                $eggGroups = PopulateController::sanitizeString($data[6]);
                $stats = explode(",", PopulateController::sanitizeString($data[7]));

                $pokemon = new \App\pokemon();
                $pokemon->id = (int)$data[0];
                $pokemon->name = $data[1];
                $pokemon->types = $types;
                $pokemon->height = (double)$data[3];
                $pokemon->weight = (double)$data[4];
                $pokemon->abilities = $abilities;
                $pokemon->hp = (int)explode(":", $stats[0])[1];
                $pokemon->speed = (int)explode(":", $stats[1])[1];
                $pokemon->attack = (int)explode(":", $stats[2])[1];
                $pokemon->defense = (int)explode(":", $stats[3])[1];
                $pokemon->specialDefense = (int)explode(":", $stats[4])[1];
                $pokemon->specialAttack = (int)explode(":", $stats[5])[1];
                $pokemon->egg_groups = $eggGroups;
                $pokemon->genus = $data[8];
                $pokemon->description = $data[9];
                $pokemon->save();
            }

            fclose($handle);
        }
    }
}
