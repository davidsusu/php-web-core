<?php

namespace Webarticum\Core\Graphics\Misc;


// TODO: befejezni...
/**
 * Character map for simplified character drawing
 */
class Charmap {
    
    static protected $charmap = [
        
        'a' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4] ],
        'á' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4], [0.4,0.2,  0.7,0] ],
        'à' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4], [0.4,0,  0.7,0.2] ],
        'ä' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4],
            [0.2,0.1,  0.3,0.1,  0.3,0,  0.2,0,  0.2,0.1], [0.7,0.1,  0.8,0.1,  0.8,0,  0.7,0,  0.7,0.1]
        ],
        'â' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4], [0.3,0.2,  0.5,0,  0.7,0.2] ],
        'ă' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4], [0.3,0,  0.5,0.2,  0.7,0] ],
        'å' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4],
            [0.5,0,  0.7,0.1,  0.7,0.2,  0.5,0.3,  0.3,0.2,  0.3,0.1,  0.5,0]
        ],
        'ą' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1,  0.9,0.4],
            [0.6,1,  0.6,1.2,  0.8,1.2]
        ],
        'æ' => [ 1, [0.5,0.4,  0.3,0.4,  0.1,0.7,  0.1,1,  0.5,1,  0.5,0.8,  0.9,0.6,  0.9,0.4,  0.5,0.4,  0.5,0.8,  0.7,1,  0.9,1] ],
        'b' => [ 1, [0.1,0, 0.1,1,  0.7,1,  0.9,0.8,  0.9,0.4,  0.1,0.4] ],
        'c' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1] ],
        'ć' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1], [0.4,0.2,  0.7,0] ],
        'ç' => [ 1, [0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1], [0.6,1,  0.6,1.2,  0.4,1.2] ],
        'd' => [ 1, [0.9,0,  0.9,1,  0.1,1,  0.1,0.7,  0.4,0.4,  0.9,0.4] ],
        'e' => [ 1, [0.1,0.7,  0.9,0.7,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1] ],
        'é' => [ 1, [0.1,0.7,  0.9,0.7,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1], [0.4,0.2,  0.7,0] ],
        'è' => [ 1, [0.1,0.7,  0.9,0.7,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1], [0.4,0,  0.7,0.2] ],
        'ë' => [ 1, [0.1,0.7,  0.9,0.7,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1],
            [0.2,0.1,  0.3,0.1,  0.3,0,  0.2,0,  0.2,0.1], [0.7,0.1,  0.8,0.1,  0.8,0,  0.7,0,  0.7,0.1]
        ],
        'ê' => [ 1, [0.1,0.7,  0.9,0.7,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1], [0.3,0.2,  0.5,0,  0.7,0.2] ],
        'ę' => [ 1, [0.1,0.7,  0.9,0.7,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1],
            [0.6,1,  0.6,1.2,  0.8,1.2]
        ],
        'f' => [ 1, [0.9,0.2, 0.7,0, 0.6,0,  0.4,0.2,  0.4,1], [0.2,0.5,  0.8,0.5] ],
        'g' => [ 1, [0.1,1.3,  0.3,1.5,  0.7,1.5,  0.9,1.3,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1] ],
        'h' => [ 1, [0.1,0,  0.1,1], [0.1,0.4,  0.7,0.4,  0.9,0.6,  0.9,1] ],
        'i' => [ 1, [0.5,0.4,  0.5,1], [0.5,0.1,  0.6,0.1,  0.6,0,  0.5,0,  0.5,0.1] ],
        'í' => [ 1, [0.5,0.4,  0.5,1], [0.4,0.2,  0.7,0] ],
        'ï' => [ 1, [0.5,0.4,  0.5,1],
            [0.2,0.1,  0.3,0.1,  0.3,0,  0.2,0,  0.2,0.1], [0.7,0.1,  0.8,0.1,  0.8,0,  0.7,0,  0.7,0.1]
        ],
        'î' => [ 1, [0.5,0.4,  0.5,1], [0.3,0.2,  0.5,0,  0.7,0.2] ],
        'j' => [ 1, [0.6,0.4,  0.6,1.3,  0.4,1.5,  0.2,1.3], [0.5,0.1,  0.6,0.1,  0.6,0,  0.5,0,  0.5,0.1] ],
        'k' => [ 1, [0.1,0,  0.1,1], [0.1,0.8,  0.9,0.4], [0.5,0.6,  0.9,1] ],
        'l' => [ 0.5, [0.2,0,  0.2,1] ],
        'ł' => [ 0.5, [0.5,0,  0.5,1], [0.3,0.6,  0.7,0.3] ],
        'm' => [ 1.5, [0.1,1,  0.1,0.4,  0.6,0.4,  0.8,0.6,  0.8,1], [0.7,0.5,  1,0.4,  1.3,0.4,  1.3,1] ],
        'n' => [ 1, [0.1,1,  0.1,0.4,  0.7,0.4,  0.9,0.6,  0.9,1] ],
        'ñ' => [ 1, [0.1,1,  0.1,0.4,  0.7,0.4,  0.9,0.6,  0.9,1], [0.2,0.1,  0.4,0,  0.6,0.1, 0.8,0] ],
        'ń' => [ 1, [0.1,1,  0.1,0.4,  0.7,0.4,  0.9,0.6,  0.9,1], [0.4,0.2,  0.7,0] ],
        'o' => [ 1, [0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1,  0.1,0.4,  0.9,0.4] ],
        'ó' => [ 1, [0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1,  0.1,0.4,  0.9,0.4], [0.4,0.2,  0.7,0] ],
        'ö' => [ 1, [0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1,  0.1,0.4,  0.9,0.4],
            [0.2,0.1,  0.3,0.1,  0.3,0,  0.2,0,  0.2,0.1], [0.7,0.1,  0.8,0.1,  0.8,0,  0.7,0,  0.7,0.1]
        ],
        'ő' => [ 1, [0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1,  0.1,0.4,  0.9,0.4], [0.3,0.2,  0.6,0], [0.6,0.2,  0.9,0] ],
        'õ' => [ 1, [0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1,  0.1,0.4,  0.9,0.4], [0.2,0.1,  0.4,0,  0.6,0.1, 0.8,0] ],
        'ô' => [ 1, [0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1,  0.1,0.4,  0.9,0.4], [0.3,0.2,  0.5,0,  0.7,0.2] ],
        'ø' => [ 1, [0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1,  0.1,0.4,  0.9,0.4], [0,1,  1,0.4] ],
        'œ' => [ 1, [0.5,0.4,  0.1,0.4,  0.1,1,  0.3,1,  0.9,0.6,  0.9,0.4,  0.5,0.4,  0.5,0.8,  0.7,1,  0.9,1] ],
        'p' => [ 1, [0.1,1.5,  0.1,0.4,  0.9,0.4,  0.9,0.8,  0.7,1,  0.1,1] ],
        'q' => [ 1, [0.9,1.5,  0.9,0.4,  0.4,0.4,  0.1,0.7,  0.1,1,  0.9,1] ],
        'r' => [ 1, [0.1,1,  0.1,0.4,  0.7,0.4,  0.9,0.6] ],
        's' => [ 1, [0.9,0.4,  0.3,0.4,  0.1,0.7,  0.9,0.7,  0.7,1, 0.1,1] ],
        'ś' => [ 1, [0.9,0.4,  0.3,0.4,  0.1,0.7,  0.9,0.7,  0.7,1, 0.1,1], [0.4,0.2,  0.7,0] ],
        'š' => [ 1, [0.9,0.4,  0.3,0.4,  0.1,0.7,  0.9,0.7,  0.7,1, 0.1,1], [0.3,0,  0.5,0.2,  0.7,0] ],
        'ş' => [ 1, [0.9,0.4,  0.3,0.4,  0.1,0.7,  0.9,0.7,  0.7,1, 0.1,1], [0.6,1,  0.6,1.2,  0.4,1.2] ],
        't' => [ 1, [0.9,0.8,  0.7,1, 0.6,1,  0.4,0.8,  0.4,0], [0.2,0.4,  0.8,0.4] ],
        'ţ' => [ 1, [0.9,0.8,  0.7,1, 0.6,1,  0.4,0.8,  0.4,0], [0.2,0.4,  0.8,0.4], [0.6,1,  0.6,1.2,  0.4,1.2] ],
        'u' => [ 1, [0.1,0.4,  0.1,0.7,  0.4,1,  0.9,1,  0.9,0.4] ],
        'ú' => [ 1, [0.1,0.4,  0.1,0.7,  0.4,1,  0.9,1,  0.9,0.4], [0.4,0.2,  0.7,0] ],
        'ù' => [ 1, [0.1,0.4,  0.1,0.7,  0.4,1,  0.9,1,  0.9,0.4], [0.4,0,  0.7,0.2] ],
        'ü' => [ 1, [0.1,0.4,  0.1,0.7,  0.4,1,  0.9,1,  0.9,0.4],
            [0.2,0.1,  0.3,0.1,  0.3,0,  0.2,0,  0.2,0.1], [0.7,0.1,  0.8,0.1,  0.8,0,  0.7,0,  0.7,0.1]
        ],
        'ű' => [ 1, [0.1,0.4,  0.1,0.7,  0.4,1,  0.9,1,  0.9,0.4],
            [0.3,0.2,  0.6,0], [0.6,0.2,  0.9,0]
        ],
        'û' => [ 1, [0.1,0.4,  0.1,0.7,  0.4,1,  0.9,1,  0.9,0.4], [0.3,0.2,  0.5,0,  0.7,0.2] ],
        'v' => [ 1, [0.1,0.4,  0.1,0.6,  0.5,1,  0.9,0.6,  0.9,0.4] ],
        'w' => [ 1, [0.1,0.4,  0.1,0.7,  0.3,1,  0.5,0.7,  0.5,0.4], [0.5,0.7,  0.7,1,  0.9,0.7,  0.9, 0.4] ],
        'x' => [ 1, [0.1,0.4,  0.9,1], [0.9,0.4,  0.1,1] ],
        'y' => [ 1, [0.9,0.4,  0.9,0.6,  0.1,1.4], [0.1,0.4,  0.1,0.6,  0.5,1] ],
        'ÿ' => [ 1, [0.9,0.4,  0.9,0.6,  0.1,1.4], [0.1,0.4,  0.1,0.6,  0.5,1],
            [0.2,0.1,  0.3,0.1,  0.3,0,  0.2,0,  0.2,0.1], [0.7,0.1,  0.8,0.1,  0.8,0,  0.7,0,  0.7,0.1]
        ],
        'z' => [ 1, [0.1,0.4,  0.9,0.4,  0.1,1,  0.9,1] ],
        'ź' => [ 1, [0.1,0.4,  0.9,0.4,  0.1,1,  0.9,1], [0.4,0.2,  0.7,0] ],
        'ż' => [ 1, [0.1,0.4,  0.9,0.4,  0.1,1,  0.9,1], [0.5,0.1,  0.6,0.1,  0.6,0,  0.5,0,  0.5,0.1] ],
        
        // capital chars
        'A' => [ 1, [0,1,  0.5,0,  1,1], [0.25,0.5,  0.75,0.5] ],
        'Á' => [ 1, [0,1,  0.5,0,  1,1], [0.25,0.5,  0.75,0.5], [0.6,-0.1,  0.9,-0.3] ],
        'À' => [ 1, [0,1,  0.5,0,  1,1], [0.25,0.5,  0.75,0.5], [0.5,-0.3,  0.8,-0.1] ],
        'Ä' => [ 1, [0,1,  0.5,0,  1,1], [0.25,0.5,  0.75,0.5],
            [0.2,-0.3,  0.3,-0.3,  0.3,-0.2,  0.2,-0.2,  0.2,-0.3], [0.7,-0.3,  0.8,-0.3,  0.8,-0.2,  0.7,-0.2,  0.7,-0.3]
        ],
        'Â' => [ 1, [0,1,  0.5,0,  1,1], [0.25,0.5,  0.75,0.5], [0.3,-0.1,  0.5,-0.3,  0.7,-0.1] ],
        'Ǎ' => [ 1, [0,1,  0.5,0,  1,1], [0.25,0.5,  0.75,0.5], [0.3,-0.3,  0.5,-0.1,  0.7,-0.3] ],
        'Å' => [ 1, [0,1,  0.5,0,  1,1], [0.25,0.5,  0.75,0.5],
            [0.5,-0.3,  0.7,-0.2,  0.7,-0.1,  0.5,0,  0.3,-0.1,  0.3,-0.2,  0.5,-0.3]
        ],
        'Ą' => [ 1, [0,1,  0.5,0,  0.9,0.9,  0.6,1,  0.6,1.2,  0.8,1.2], [0.25,0.5,  0.75,0.5] ],
        'Æ' => [ 1, [0,1,  0.5,0,  0.5,1,  0.9,1], [0.5,0,  0.9,0], [0.2,0.6,  0.8,0.6] ],
        'B' => [ 1, [0.1,0.4,  0.6,0.4,  0.7,0.3,  0.7,0.1,  0.6,0,  0.1,0,  0.1,1,  0.6,1,  0.8,0.9,  0.9,0.7,  0.8,0.5,  0.6,0.4] ],
        'C' => [ 1, [0.9,0.1,  0.7,0,  0.4,0,  0.1,0.3,  0.1,0.7,  0.4,1,  0.7,1,  0.9,0.9] ],
        'Ć' => [ 1, [0.9,0.1,  0.7,0,  0.4,0,  0.1,0.3,  0.1,0.7,  0.4,1,  0.7,1,  0.9,0.9], [0.4,-0.1,  0.7,-0.3] ],
        'Ç' => [ 1, [0.9,0.1,  0.7,0,  0.4,0,  0.1,0.3,  0.1,0.7,  0.4,1,  0.7,1,  0.9,0.9], [0.6,1,  0.6,1.2,  0.4,1.2] ],
        'D' => [ 1, [0.1,0,  0.6,0,  0.9,0.3,  0.9,0.7,  0.6,1,  0.1,1,  0.1,0] ],
        'E' => [ 1, [0.9,0,  0.1,0,  0.1,1,  0.9,1], [0.1,0.5,  0.7,0.5] ],
        'É' => [ 1, [0.9,0,  0.1,0,  0.1,1,  0.9,1], [0.1,0.5,  0.7,0.5], [0.6,-0.1,  0.9,-0.3] ],
        'È' => [ 1, [0.9,0,  0.1,0,  0.1,1,  0.9,1], [0.1,0.5,  0.7,0.5], [0.5,-0.3,  0.8,-0.1] ],
        'Ë' => [ 1, [0.9,0,  0.1,0,  0.1,1,  0.9,1], [0.1,0.5,  0.7,0.5],
            [0.2,-0.3,  0.3,-0.3,  0.3,-0.2,  0.2,-0.2,  0.2,-0.3], [0.7,-0.3,  0.8,-0.3,  0.8,-0.2,  0.7,-0.2,  0.7,-0.3]
        ],
        'Ê' => [ 1, [0.9,0,  0.1,0,  0.1,1,  0.9,1], [0.1,0.5,  0.7,0.5], [0.3,-0.1,  0.5,-0.3,  0.7,-0.1] ],
        'Ę' => [ 1, [0.9,0,  0.1,0,  0.1,1,  0.9,1], [0.1,0.5,  0.7,0.5], [0.6,1,  0.6,1.2,  0.8,1.2] ],
        'F' => [ 1, [0.9,0,  0.1,0,  0.1,1], [0.1,0.5,  0.7,0.5] ],
        'G' => [ 1, [0.9,0.1,  0.7,0,  0.3,0,  0.1,0.2,  0.1,0.8,  0.3,1,  0.7,1,  0.9,0.8,  0.9,0.5,  0.5,0.5] ],
        'H' => [ 1, [0.1,0,  0.1,1], [0.9,0,  0.9,1], [0.1,0.5,  0.9,0.5] ],
        'I' => [ 1, [0.5,0,  0.5,1], [0.3,0,  0.7,0], [0.3,1,  0.7,1] ],
        'Í' => [ 1, [0.5,0,  0.5,1], [0.3,0,  0.7,0], [0.3,1,  0.7,1], [0.6,-0.1,  0.9,-0.3] ],
        'Ï' => [ 1, [0.5,0,  0.5,1], [0.3,0,  0.7,0], [0.3,1,  0.7,1],
            [0.2,-0.3,  0.3,-0.3,  0.3,-0.2,  0.2,-0.2,  0.2,-0.3], [0.7,-0.3,  0.8,-0.3,  0.8,-0.2,  0.7,-0.2,  0.7,-0.3]
        ],
        'Î' => [ 1, [0.5,0,  0.5,1], [0.3,0,  0.7,0], [0.3,1,  0.7,1], [0.3,-0.1,  0.5,-0.3,  0.7,-0.1] ],
        'J' => [ 1, [0.4,0,  0.8,0,  0.8,0.8,  0.6,1,  0.4,1,  0.2,0.8] ],
        'K' => [ 1, [0.1,0,  0.1,1], [0.1,0.8,  0.9,0], [0.4,0.5,  0.9,1] ],
        'L' => [ 1, [0.1,0,  0.1,1,  0.9,1] ],
        'Ł' => [ 1, [0.1,0,  0.1,1,  0.9,1], [0,0.6,  0.5,0.3] ],
        'M' => [ 1, [0.1,1,  0.1,0,  0.5,0.6,  0.9,0,  0.9,1] ],
        'N' => [ 1, [0.1,1,  0.1,0,  0.9,1,  0.9,0] ],
        'Ñ' => [ 1, [0.1,1,  0.1,0,  0.9,1,  0.9,0], [0.2,-0.1,  0.4,-0.2,  0.6,-0.1, 0.8,-0.2] ],
        'Ń' => [ 1, [0.1,1,  0.1,0,  0.9,1,  0.9,0], [0.5,-0.1,  0.8,-0.3] ],
        'O' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0] ],
        'Ó' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0],
            [0.4,-0.1,  0.7,-0.3]
        ],
        'Ö' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0],
            [0.2,-0.3,  0.3,-0.3,  0.3,-0.2,  0.2,-0.2,  0.2,-0.3], [0.7,-0.3,  0.8,-0.3,  0.8,-0.2,  0.7,-0.2,  0.7,-0.3]
        ],
        'Ő' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0],
            [0.3,-0.1,  0.6,-0.3], [0.6,-0.1,  0.9,-0.3]
        ],
        'Õ' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0],
            [0.2,-0.1,  0.4,-0.2,  0.6,-0.1, 0.8,-0.2]
        ],
        'Ô' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0],
            [0.3,-0.1,  0.5,-0.3,  0.7,-0.1]
        ],
        'Ø' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0],
            [0.9,0,  0.1,1]
        ],
        'Œ' => [ 1, [0.9,0,  0.3,0,  0.1,0.1,  0,0.3,  0,0.7,  0.1,0.9,  0.3,1,  0.9,1], [0.5,0,  0.5,1], [0.5,0.5,  0.8,0.5] ],
        'P' => [ 1, [0.2,0.6,  0.6,0.6,  0.8,0.5,  0.9,0.4,  0.9,0.2,  0.8,0.1,  0.6,0,  0.2,0,  0.2,1] ],
        'Q' => [ 1, [0.4,0,  0.6,0,  0.8,0.1,  0.9,0.3,  0.9,0.7,  0.8,0.9,  0.6,1,  0.4,1,  0.2,0.9,  0.1,0.7,  0.1,0.3,  0.2,0.1,  0.4,0],
            [0.6,0.7,  0.9,1]
        ],
        'R' => [ 1, [0.2,0.6,  0.6,0.6,  0.8,0.5,  0.9,0.4,  0.9,0.2,  0.8,0.1,  0.6,0,  0.2,0,  0.2,1], [0.6,0.6,  0.9,1] ],
        'S' => [ 1, [0.9,0.1,  0.7,0,  0.3,0,  0.1,0.2,  0.1,0.4,  0.2,0.5,  0.8,0.5,  0.9,0.6,  0.9,0.8,  0.7,1,  0.3,1,  0.1,0.8] ],
        'Ś' => [ 1, [0.9,0.1,  0.7,0,  0.3,0,  0.1,0.2,  0.1,0.4,  0.2,0.5,  0.8,0.5,  0.9,0.6,  0.9,0.8,  0.7,1,  0.3,1,  0.1,0.8],
            [0.4,-0.1,  0.7,-0.3]
        ],
        'Š' => [ 1, [0.9,0.1,  0.7,0,  0.3,0,  0.1,0.2,  0.1,0.4,  0.2,0.5,  0.8,0.5,  0.9,0.6,  0.9,0.8,  0.7,1,  0.3,1,  0.1,0.8],
            [0.3,-0.3,  0.5,-0.1,  0.7,-0.3]
        ],
        'Ş' => [ 1, [0.9,0.1,  0.7,0,  0.3,0,  0.1,0.2,  0.1,0.4,  0.2,0.5,  0.8,0.5,  0.9,0.6,  0.9,0.8,  0.7,1,  0.3,1,  0.1,0.8],
            [0.6,1,  0.6,1.2,  0.4,1.2]
        ],
        'T' => [ 1, [0.1,0,  0.9,0], [0.5,0,  0.5,1] ],
        'Ţ' => [ 1, [0.1,0,  0.9,0], [0.5,0,  0.5,1,  0.6,1,  0.6,1.2,  0.4,1.2] ],
        'U' => [ 1, [0.1,0,  0.1,0.7,  0.2,0.9,  0.4,1,  0.6,1,  0.8,0.9,  0.9,0.7,  0.9,0] ],
        'Ú' => [ 1, [0.1,0,  0.1,0.7,  0.2,0.9,  0.4,1,  0.6,1,  0.8,0.9,  0.9,0.7,  0.9,0], [0.4,-0.1,  0.7,-0.3] ],
        'Ù' => [ 1, [0.1,0,  0.1,0.7,  0.2,0.9,  0.4,1,  0.6,1,  0.8,0.9,  0.9,0.7,  0.9,0], [0.3,-0.3,  0.6,-0.1] ],
        'Ü' => [ 1, [0.1,0,  0.1,0.7,  0.2,0.9,  0.4,1,  0.6,1,  0.8,0.9,  0.9,0.7,  0.9,0],
            [0.3,-0.3,  0.4,-0.3,  0.4,-0.2,  0.3,-0.2,  0.3,-0.3], [0.6,-0.3,  0.7,-0.3,  0.7,-0.2,  0.6,-0.2,  0.6,-0.3]
        ],
        'Ű' => [ 1, [0.1,0,  0.1,0.7,  0.2,0.9,  0.4,1,  0.6,1,  0.8,0.9,  0.9,0.7,  0.9,0],
            [0.3,-0.1,  0.6,-0.3], [0.6,-0.1,  0.9,-0.3]
        ],
        'Û' => [ 1, [0.1,0,  0.1,0.7,  0.2,0.9,  0.4,1,  0.6,1,  0.8,0.9,  0.9,0.7,  0.9,0], [0.3,-0.1,  0.5,-0.3,  0.7,-0.1] ],
        'V' => [ 1, [0,0,  0.5,1,  1,0] ],
        'W' => [ 1, [0,0,  0.2,1,  0.5,0.3,  0.8,1,  1,0] ],
        'X' => [ 1, [0.1,0,  0.9,1], [0.9,0,  0.1,1] ],
        'Y' => [ 1, [0.1,0,  0.5,0.5,  0.5,1], [0.5,0.5,  0.9,0] ],
        'Ÿ' => [ 1, [0.1,0,  0.5,0.5,  0.5,1], [0.5,0.5,  0.9,0],
            [0.2,-0.3,  0.3,-0.3,  0.3,-0.2,  0.2,-0.2,  0.2,-0.3], [0.7,-0.3,  0.8,-0.3,  0.8,-0.2,  0.7,-0.2,  0.7,-0.3]
        ],
        'Z' => [ 1, [0.1,0,  0.9,0,  0.1,1,  0.9,1] ],
        'Ź' => [ 1, [0.1,0,  0.9,0,  0.1,1,  0.9,1], [0.5,-0.1,  0.8,-0.3] ],
        'Ż' => [ 1, [0.1,0,  0.9,0,  0.1,1,  0.9,1], [0.5,-0.1,  0.6,-0.1,  0.6,-0.2,  0.5,-0.2,  0.5,-0.1] ],
        
        // numbers
        '1' => [ 1, [0.3,0.4,  0.7,0,  0.7,1] ],
        '2' => [ 1, [0.1,0.3,  0.5,0,  0.8,0.2,  0.8,0.4,  0.1,0.9,  0.1,1,  0.8,1] ],
        '3' => [ 1, [0.3,0.2,  0.6,0,  0.8,0.3,  0.6,0.5,  0.8,0.6,  0.8,0.8,  0.6,1,  0.4,1,  0.2,0.8] ],
        '4' => [ 1, [0.6,0,  0.1,0.7,  0.8,0.7], [0.5,0.5,  0.5,1] ],
        '5' => [ 1, [0.7,0,  0.1,0,  0.1,0.5,  0.6,0.5,  0.8,0.7,  0.6,1,  0.1,1] ],
        '6' => [ 1, [0.8,0,  0.4,0,  0.1,0.3,  0.1,0.8,  0.3,1,  0.8,1,  0.8,0.7,  0.6,0.5,  0.1,0.5] ],
        '7' => [ 1, [0.1,0,  0.9,0,  0.3,1] ],
        '8' => [ 1, [0.6,0.5,  0.8,0.3,  0.7,0,  0.3,0,  0.2,0.3,  0.4,0.5,  0.6,0.5,  0.8,0.7,  0.7,1,  0.3,1,  0.2,0.7,  0.4,0.5] ],
        '9' => [ 1, [0.2,1,  0.6,1,  0.9,0.7,  0.9,0.2,  0.7,0,  0.2,0,  0.2,0.3,  0.4,0.5,  0.9,0.5] ],
        '0' => [ 1, [0.1,0.3,  0.3,0,  0.6,0,  0.8,0.3,  0.8,0.7,  0.6,1,  0.3,1,  0.1,0.7,  0.1,0.3] ],
        
        // signs
        ' ' => [ 1 ],
        '.' => [ 0.6, [0.3,1,  0.4,1,  0.4,0.9,  0.3,0.9,  0.3,1] ],
        ',' => [ 0.6, [0.3,0.8,  0.3,1.2] ],
        ';' => [ 0.6, [0.3,0.6,  0.4,0.6,  0.4,0.5,  0.3,0.5,  0.3,0.6], [0.4,0.8,  0.4,1.2] ],
        ':' => [ 0.6, [0.3,0.6,  0.4,0.6,  0.4,0.5,  0.3,0.5,  0.3,0.6], [0.3,1,  0.4,1,  0.4,0.9,  0.4,0.9,  0.3,1] ],
        '?' => [ 1, [0.1,0,  0.9,0,  0.9,0.3,  0.5,0.5,  0.5,0.7], [0.4,1,  0.5,1,  0.5,0.9,  0.4,0.9,  0.4,1] ],
        '!' => [ 0.6, [0.4,0,  0.4,0.7], [0.3,1,  0.4,1,  0.4,0.9,  0.3,0.9,  0.3,1] ],
        '-' => [ 1, [0.2,0.6,  0.8,0.6] ],
        '+' => [ 1, [0.2,0.6,  0.8,0.6], [0.5,0.3,  0.5,0.9] ],
        '*' => [ 0.6, [0.3,0,  0.3,0.4],  [0.1,0.1,  0.5,0.3], [0.5,0.1,  0.1,0.3] ],
        '/' => [ 0.8, [0.8,0,  0.2,1] ],
        '%' => [ 1, [0.7,0,  0.1,0.9], [0.2,0,  0.4,0.1,  0.4,0.2,  0.2,0.3,  0,0.2,  0,0.1,  0.2,0],
            [0.7,0.5,  0.9,0.6,  0.9,0.7,  0.7,0.8,  0.5,0.7,  0.5,0.6,  0.7,0.5]
        ],
        '(' => [ 0.8, [0.7,-0.1,  0.5,0,  0.4,0.2,  0.4,0.8,  0.5,1,  0.7,1.1] ],
        ')' => [ 0.8, [0.1,-0.1,  0.3,0,  0.4,0.2,  0.4,0.8,  0.3,1,  0.1,1.1] ],
        '[' => [ 0.8, [0.7,-0.1,  0.3,-0.1,  0.3,1.1,  0.7,1.1] ],
        ']' => [ 0.8, [0.1,-0.1,  0.5,-0.1,  0.5,1.1,  0.1,1.1] ],
        '{' => [ 0.8, [0.7,-0.1, 0.6,-0.1,  0.5,0,  0.5,0.4,  0.4,0.5,  0.5,0.6,  0.5,1,  0.6,1.1,  0.7,1.1] ],
        '}' => [ 0.8, [0.1,-0.1, 0.2,-0.1,  0.3,0,  0.3,0.4,  0.4,0.5,  0.3,0.6,  0.3,1,  0.2,1.1,  0.1,1.1] ],
        '|' => [ 0.6, [0.3,-0.1,  0.3,1.1] ],
        '<' => [ 1, [0.9,0.4,  0.2,0.7,  0.9,1] ],
        '>' => [ 1, [0.1,0.4,  0.8,0.7,  0.1,1] ],
        '\\'=> [ 0.8, [0,0,  0.6,1] ],
        '_' => [ 1, [0,1,  1,1] ],
        '$' => [ 1, [0.8,0.2,  0.7,0.1,  0.3,0.1,  0.2,0.3,  0.3,0.5,  0.7,0.5,  0.8,0.7,  0.7,0.9,  0.3,0.9,  0.2,0.8], [0.5,0,  0.5,1] ],
        '€' => [ 1, [0.8,0.2,  0.7,0.1,  0.5,0.1,  0.4,0.2,  0.3,0.4,  0.3,0.7,  0.4,0.9,  0.5,1,  0.7,1,  0.8,0.9],
            [0.2,0.5,  0.7,0.5], [0.2,0.6,  0.6,0.6]
        ],
        '@' => [ 1, [0.7,0.6,  0.7,0.4,  0.6,0.3,  0.4,0.3,  0.3,0.4,  0.3,0.6,  0.4,0.7,  0.6,0.7,  0.7,0.6,  0.8,0.7,  0.9,0.6,
            0.9,0.3,  0.8,0.1,  0.6,0,  0.4,0,  0.2,0.1,  0.1,0.3,  0.1,0.7,  0.2,0.9,  0.4,1,  0.6,1,  0.8,0.9
        ] ],
        '#' => [ 1, [0.5,0.1,  0.2,1], [0.8,0.1,  0.5,1], [0.2,0.4,  0.9,0.4], [0.1,0.7,  0.8,0.7] ],
        '&' => [ 1, [0.9,1,  0.3,0.3,  0.3,0.1,  0.4,0,  0.6,0,  0.7,0.1,  0.7,0.3,  0.4,0.5,  0.2,0.7,  0.2,0.9,  0.3,1,  0.6,1,  0.7,0.9,  0.9,0.6] ],
        '\''=> [ 0.6, [0.3,0,  0.3,0.4] ],
        '"' => [ 0.6, [0.2,0,  0.2,0.4], [0.4,0,  0.4,0.4] ],
        
    ];
    
    /**
     * Provides the character map
     */
    static public function getCharmap() {
        return self::$charmap;
    }
    
}
