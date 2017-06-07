<?php

function fallout_weapon() {
    
    $weapon = [

        ".32 pistol" => [
            "damage" => 6
        ],
        "sniper riffle" => [
            "damage" => 40
        ],
        "combat shotgun" => [
            "damage" => 55
        ],
        "10mm SMG" => [
            "damage" => 7
        ],
        "fat man" => [
            "damage" => 10 + 1600
        ],
        "axe" => [
            "damage" => 20
        ],
        "combat knife" => [
            "damage" => 7
        ],
        "frag grenade" => [
            "damage" => 1 + 100
        ],
        "alien blaster" => [
            "damage" => 100
        ]

    ];

    return array_values($weapon);
};

print_r(fallout_weapon());
