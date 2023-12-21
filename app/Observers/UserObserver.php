<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
/*use App\Models\SubKriteria6;*/
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $dataKriteria = [
            [
                'kodeKriteria' => 'C1',
                'namaKriteria' => 'Harga',
                'bobot' => '4',
                'jenis' => 'cost'
            ],
            [
                'kodeKriteria' => 'C2',
                'namaKriteria' => 'Ukuran Layar',
                'bobot' => '3',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C3',
                'namaKriteria' => 'Resolusi Layar',
                'bobot' => '5',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C4',
                'namaKriteria' => 'Teknologi Panel',
                'bobot' => '5',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C5',
                'namaKriteria' => 'Refresh Rate',
                'bobot' => '3',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C6',
                'namaKriteria' => 'Response Time',
                'bobot' => '3',
                'jenis' => 'benefit'
            ]
            /*[
                'kodeKriteria' => 'C7',
                'namaKriteria' => 'Color Gamut',
                'bobot' => '4',
                'jenis' => 'benefit'
            ]*/
        ];

        Kriteria::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataKriteria));

        $dataSubKriteria = [
            [
                'harga' => 'Rp 1.5 juta - Rp 3 juta',
                'nHarga' => '1'
            ],
            [
                'harga' => 'Rp 3 juta - Rp 6 juta',
                'nHarga' => '2'
            ],
            [
                'harga' => 'Rp 6 juta - Rp 9 juta',
                'nHarga' => '3'
            ],
            [
                'harga' => 'Rp 9 juta - Rp 12 juta',
                'nHarga' => '4'
            ],
            [
                'harga' => 'Rp 12 juta - Rp 15 juta',
                'nHarga' => '5'
            ]
        ];

        SubKriteria::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria));

        $dataSubKriteria1 = [
            [
                'RAM' => '18.5 inch - 24.6 inch',
                'nRAM' => '1'
            ],
            [
                'RAM' => '25 inch - 30.7 inch',
                'nRAM' => '2'
            ],
            [
                'RAM' => '31 inch - 36.8 inch',
                'nRAM' => '3'
            ],
            [
                'RAM' => '37 inch - 42.9 inch',
                'nRAM' => '4'
            ],
            [
                'RAM' => '43 inch - 49 inch',
                'nRAM' => '5'
            ]
        ];

        SubKriteria1::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria1));

        $dataSubKriteria2 = [
            [
                'SSD' => '720p/768p (HD)',
                'nSSD' => '1'
            ],
            [
                'SSD' => '900p (HD+)',
                'nSSD' => '2'
            ],
            [
                'SSD' => '1080p (FHD)',
                'nSSD' => '3'
            ],
            [
                'SSD' => '1440p (QHD/WQHD/2K)',
                'nSSD' => '4'
            ],
            [
                'SSD' => '2160p (Ultra HD/4K)',
                'nSSD' => '5'
            ]
        ];

        SubKriteria2::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria2));

        $dataSubKriteria3 = [
            [
                'Processor' => 'TN (Twisted Nematic)',
                'nProcessor' => '1'
            ],
            [
                'Processor' => 'PLS (Plane to Line Switching)',
                'nProcessor' => '2'
            ],
            [
                'Processor' => 'VA (Vertical Alignment)',
                'nProcessor' => '3'
            ],
            [
                'Processor' => 'SVA (Super Vertical Alignment)',
                'nProcessor' => '4'
            ],
            [
                'Processor' => 'IPS (In Plane Switching)',
                'nProcessor' => '5'
            ]
        ];

        SubKriteria3::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria3));

        $dataSubKriteria4 = [
            [
                'VGA' => '60 Hz - 75 Hz',
                'nVGA' => '1'
            ],
            [
                'VGA' => '144 Hz - 165 Hz',
                'nVGA' => '2'
            ],
            [
                'VGA' => '166 Hz - 240 Hz',
                'nVGA' => '3'
            ],
            [
                'VGA' => '241 Hz - 300 Hz',
                'nVGA' => '4'
            ],
            [
                'VGA' => '301 Hz - 360 Hz',
                'nVGA' => '5'
            ]
        ];

        SubKriteria4::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria4));

        $dataSubKriteria5 = [
            [
                'DisplayPanel' => '6 ms - 5 ms',
                'nDisplayPanel' => '1'
            ],
            [
                'DisplayPanel' => '4 ms - 3 ms',
                'nDisplayPanel' => '2'
            ],
            [
                'DisplayPanel' => '2 ms',
                'nDisplayPanel' => '3'
            ],
            [
                'DisplayPanel' => '1 ms',
                'nDisplayPanel' => '4'
            ],
            [
                'DisplayPanel' => '0.5 ms',
                'nDisplayPanel' => '5'
            ]
        ];

        SubKriteria5::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria5));

        /*$dataSubKriteria6 = [
            [
                'colorGamut' => 'NTSC 72%',
                'nColorGamut' => '1'
            ],
            [
                'colorGamut' => 'sRGB 90% - 100%',
                'nColorGamut' => '2'
            ],
            [
                'colorGamut' => 'AdobeRGB 90% - 100%',
                'nColorGamut' => '3'
            ],
            [
                'colorGamut' => 'DCI-P3 90% - 100%',
                'nColorGamut' => '4'
            ],
            [
                'colorGamut' => 'Rec. 2020',
                'nColorGamut' => '5'
            ]
        ];

        SubKriteria6::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria6));*/
    }
}
