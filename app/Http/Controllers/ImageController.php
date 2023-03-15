<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Str;

class ImageController extends Controller
{
    function generateImage() {
        set_time_limit(0);

        $data = [
            'Ash' => [
                'element' => 'Earth',
                'rubies' => 1,
                'synergy' => 'Cyborg Demon',
            ],
            'Asmodeus' => [
                'element' => 'Fire',
                'rubies' => 4,
                'synergy' => 'Demon',
            ],
            'Astolfo' => [
                'element' => 'Fire',
                'rubies' => 2,
                'synergy' => 'Cyborg',
            ],
            'Atom' => [
                'element' => 'Earth',
                'rubies' => 4,
                'synergy' => 'Elf Cyborg',
            ],
            'Baba Yaga' => [
                'element' => 'Water',
                'rubies' => 2,
                'synergy' => 'Human Undead',
            ],
            'Baby Dragon' => [
                'element' => 'Water',
                'rubies' => 1,
                'synergy' => 'Beast',
            ],
            'Bandit' => [
                'element' => 'Wind',
                'rubies' => 1,
                'synergy' => 'Human',
            ],
            'Banshee' => [
                'element' => 'Dark',
                'rubies' => 2,
                'synergy' => 'Elf Undead',
            ],
            'Bazoo' => [
                'element' => 'Earth',
                'rubies' => 1,
                'synergy' => 'Orc',
            ],
            'Beelzebub' => [
                'element' => 'Fire',
                'rubies' => 2,
                'synergy' => 'Angel Demon',
            ],
            'Biyawak' => [
                'element' => 'Water',
                'rubies' => 2,
                'synergy' => 'Beast Demon',
            ],
            'Bugna' => [
                'element' => 'Dark',
                'rubies' => 2,
                'synergy' => 'Human Undead',
            ],
            'Bumi' => [
                'element' => 'Earth',
                'rubies' => 5,
                'synergy' => 'Elf',
            ],
            'ChiCak' => [
                'element' => 'Water',
                'rubies' => 1,
                'synergy' => 'Cyborg Beast',
            ],
            'Cupid' => [
                'element' => 'Light',
                'rubies' => 2,
                'synergy' => 'Angel',
            ],
            'Cypher' => [
                'element' => 'Wind',
                'rubies' => 4,
                'synergy' => 'Human Cyborg',
            ],
            'Draco' => [
                'element' => 'Fire',
                'rubies' => 2,
                'synergy' => 'Cyborg Undead',
            ],
            'Dracula' => [
                'element' => 'Dark',
                'rubies' => 5,
                'synergy' => 'Demon Undead',
            ],
            'Dread' => [
                'element' => 'Dark',
                'rubies' => 4,
                'synergy' => 'Human Undead',
            ],
            'Dullahan' => [
                'element' => 'Dark',
                'rubies' => 2,
                'synergy' => 'Undead',
            ],
            'Echo' => [
                'element' => 'Earth',
                'rubies' => 3,
                'synergy' => 'Elf Angel',
            ],
            'Eikthyr' => [
                'element' => 'Wind',
                'rubies' => 3,
                'synergy' => 'Elf',
            ],
            'Geisha' => [
                'element' => 'Water',
                'rubies' => 1,
                'synergy' => 'Human',
            ],
            'Gozen' => [
                'element' => 'Dark',
                'rubies' => 2,
                'synergy' => 'Demon',
            ],
            'Hyena' => [
                'element' => 'Earth',
                'rubies' => 3,
                'synergy' => 'Beast',
            ],
            'Jing Jing' => [
                'element' => 'Light',
                'rubies' => 4,
                'synergy' => 'Angel Undead',
            ],
            'Katniss' => [
                'element' => 'Wind',
                'rubies' => 1,
                'synergy' => 'Elf',
            ],
            'Kobold' => [
                'element' => 'Earth',
                'rubies' => 1,
                'synergy' => 'Beast',
            ],
            'Komodo' => [
                'element' => 'Earth',
                'rubies' => 3,
                'synergy' => 'Human Beast',
            ],
            'Kuli' => [
                'element' => 'Fire',
                'rubies' => 1,
                'synergy' => 'Human',
            ],
            'Kunoichi' => [
                'element' => 'Fire',
                'rubies' => 3,
                'synergy' => 'Orc',
            ],
            'La Muerte' => [
                'element' => 'Light',
                'rubies' => 5,
                'synergy' => 'Angel Undead',
            ],
            'Lancer' => [
                'element' => 'Human',
                'rubies' => 3,
                'synergy' => 'Human',
            ],
            'Leviathan' => [
                'element' => 'Water',
                'rubies' => 4,
                'synergy' => 'Beast Demon',
            ],
            'Lucifer' => [
                'element' => 'Light',
                'rubies' => 3,
                'synergy' => 'Angel Demon',
            ],
            'Merlin' => [
                'element' => 'Water',
                'rubies' => 5,
                'synergy' => 'Human',
            ],
            'Obunga' => [
                'element' => 'Dark',
                'rubies' => 2,
                'synergy' => 'Orc Undead',
            ],
            'Ogre' => [
                'element' => 'Wind',
                'rubies' => 1,
                'synergy' => 'Orc Human',
            ],
            'Paladin' => [
                'element' => 'Light',
                'rubies' => 3,
                'synergy' => 'Human Angel',
            ],
            'Pegasus' => [
                'element' => 'Light',
                'rubies' => 3,
                'synergy' => 'Angel',
            ],
            'Rasputin' => [
                'element' => 'Dark',
                'rubies' => 2,
                'synergy' => 'Elf Undead',
            ],
            'Raven' => [
                'element' => 'Wind',
                'rubies' => 1,
                'synergy' => 'Elf',
            ],
            'Rodan' => [
                'element' => 'Fire',
                'rubies' => 4,
                'synergy' => 'Beast Demon',
            ],
            'Satan' => [
                'element' => 'Fire',
                'rubies' => 4,
                'synergy' => 'Demon',
            ],
            'Seppuku' => [
                'element' => 'Earth',
                'rubies' => 2,
                'synergy' => 'Beast',
            ],
            'Shaman' => [
                'element' => 'Light',
                'rubies' => 1,
                'synergy' => 'Orc',
            ],
            'Shen Long' => [
                'element' => 'Fire',
                'rubies' => 5,
                'synergy' => 'Cyborg',
            ],
            'Shi Wudu' => [
                'element' => 'Water',
                'rubies' => 4,
                'synergy' => 'Orc',
            ],
            'Uzuhna' => [
                'element' => 'Fire',
                'rubies' => 5,
                'synergy' => 'Orc',
            ],
            'Valcor' => [
                'element' => 'Wind',
                'rubies' => 3,
                'synergy' => 'Orc',
            ],
            'Vasily' => [
                'element' => 'Light',
                'rubies' => 3,
                'synergy' => 'Cyborg Orc',
            ],
            'Venom' => [
                'element' => 'Dark',
                'rubies' => 2,
                'synergy' => 'Beast Undead',
            ],
            'Verchiel' => [
                'element' => 'Light',
                'rubies' => 5,
                'synergy' => 'Angel',
            ],
            'Warlock' => [
                'element' => 'Dark',
                'rubies' => 1,
                'synergy' => 'Beast',
            ],
            'Werewolf' => [
                'element' => 'Wind',
                'rubies' => 5,
                'synergy' => 'Beast Demon',
            ],
        ];

        $source_image_path = 'source-nft';
        $s3_path = 'komochess-nft';

        $source_files = Storage::disk('local')->files($source_image_path);
        $counter = 0;
        $metadata_array = [];
        foreach ($source_files as $row) {
            $heroes_name = str_replace('.jpg', '', basename($row));
            switch ($data[$heroes_name]['rubies']) {
                case 1:
                    $multiply = 5;
                    break;
                case 2:
                    $multiply = 4;
                    break;
                case 3:
                    $multiply = 3;
                    break;
                case 4:
                    $multiply = 2;
                    break;
                case 5:
                    $multiply = 1;
                    break;
                default:
                    # code...
                    break;
            }
            $x = 1;
            $file = Storage::disk('local')->get($row);
            while ($x <= $multiply) {
                $wm = Image::make(public_path('../public/devnet.png'));
                $img = Image::make($file)
                            ->encode('jpeg', 90)
                            ->resize(null, 1000, function($constraint){
                                $constraint->aspectRatio();
                            })
                            ->insert($wm, 'center')
                            ->text('#'.$x, 357, 970, function($font){
                                $font->file(public_path('../public/fonts/montserrat.ttf'));
                                $font->size(48);
                                $font->color('#ffffff');
                                $font->align('center');
                            })
                            ->stream();
                $filename = $counter.'.jpg';

                $path = Storage::disk('local')->put($s3_path.'/'.$filename, $img);
                $image_url = Storage::disk('local')->url($s3_path.'/'.$filename);
                
                $metadata = [
                    'name' => $heroes_name.' #'.$x,
                    'symbol' => 'KC',
                    'description' => 'KomoChess Heroes NFT',
                    'image' => $filename,
                    'animation_url' => null,
                    'external_url' => 'https://komoverse.io',
                    'attributes' => [
                        [
                            'trait_type' => 'Hero',
                            'value' => $heroes_name,
                        ], 
                        [
                            'trait_type' => 'Mana Rubies',
                            'value' => $data[$heroes_name]['rubies'],
                        ],
                        [
                            'trait_type' => 'Element',
                            'value' => $data[$heroes_name]['element'],
                        ], 
                        [
                            'trait_type' => 'Synergy',
                            'value' => $data[$heroes_name]['synergy'],
                        ],
                    ],
                    'properties' => [
                        'files' => [
                            [
                                'uri' => $filename,
                                'type' => 'image/jpg',
                            ]
                        ],
                        'category' => 'image',
                    ],
                ];

                $json_filename = $counter.'.json';
                
                
                $json_path = Storage::disk('local')->put($s3_path.'/'.$json_filename, json_encode($metadata, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT));
                $json_url = Storage::disk('local')->url($s3_path.'/'.$json_filename);

                $metadata_array[] = [
                    'image' => $image_url,
                    'json' => $json_url,
                ];
                $x++;
                $counter++;
            }
        }
        echo "finished";
    }
}
