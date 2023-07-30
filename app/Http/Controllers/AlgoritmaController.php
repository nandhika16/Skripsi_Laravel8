<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
// use Wimski\Nominatim\Client;
// use Wimski\Nominatim\Config\NominatimConfig;
// use Wimski\Nominatim\GeocoderServices\NominatimGeocoderService;
// use Wimski\Nominatim\RequestParameters\ForwardGeocodingQueryRequestParameters;
// use Wimski\Nominatim\Transformers\GeocodingResponseTransformer;

// use Wimski\Nominatim\Nominatim;



class AlgoritmaController extends Controller
{
    public function storetempat(Request $request)
    {

        // Simpan request('lokasi') ke variabel $lokasi
        $lokasi = request('lokasi'); 
            
        if ($lokasi) {
            // Gunakan $lokasi sebagai input dalam kondisi where
            $hotels = Hotels::where('alamat', 'like', '%' . $lokasi . '%')->get();
        }


        // $result = [];
        $perhitungan =  array();
        $hasil = array();
        $hasil_only = array();
        foreach ($hotels as $key => $hotel) {
            // dd($hotel);
            $nama = $hotel->nama;
            $alamat = $hotel->alamat;
            // // dd(intval($hotel->latitude));
            $lat = (int)str_replace('.','',$hotel->latitude);
            $long = (int)str_replace('.','',$hotel->longitude);
            // $data = array($nama,$alamat,$lat,$long);
            // // dd($person1); 
            // array_push($perhitungan,$data);
            foreach($hotels as $key2 => $item) {
                $lat2 = (int)str_replace('.','',$item->latitude);
                $long2 = (int)str_replace('.','',$item->longitude);

                $latSum = $lat - $lat2;
                $longSum = $long - $long2;
                $sum = $latSum + $longSum;
                $data = array($nama , $alamat ,$latSum , $longSum , $sum);
                array_push($hasil,$data);
                array_push($hasil_only,$sum);
            }
        }

        // dd($hasil_only);

        // $alamat = $hotels->alamat();

        return view('user/hasil', [
            "title" => 'home',
            // "alamat" => $alamat,
            "request" => $lokasi,
            "hotel" => $hotels,
        ]);
    }

    public function getLokasi() {
        $hotels = Hotels::select('id','alamat')->get();

        return [
            'status' => 200,
            'data' => $hotels
        ];
    }




        // $response = \GoogleMaps::load('geocoding')
        // ->setParamByKey('address', 'santa cruz')
        // ->setParamByKey('components.administrative_area', 'TX')
        // ->get();

        // var_dump( json_decode( $response ) );  // output

    public function store(Request $request)
    {
        $response = \GoogleMaps::load('geocoding')
                ->setParamByKey('address', 'santa cruz')
                ->setParamByKey('components.administrative_area', 'TX')
                ->get();

        var_dump( json_decode( $response ) );  // output

/*
{\n
   "results" : [\n
      {\n
         "address_components" : [\n
            {\n
               "long_name" : "277",\n
               "short_name" : "277",\n
               "types" : [ "street_number" ]\n
            },\n
            ...
*/


        // Melanjutkan Membuat Algoritma
        
        // return view('user.home', [
        //     "title" => "Home",
        // ]);

        // Ambil data perhitungan dari tabel database
        $datas = Hotels::all();
        
        // foreach ($datas as $data) {
        //     dd($data);
        // }

         // Ubah koleksi data objek menjadi array asosiatif
        $data = $data->map(function ($item) {
            return [
                'id' => $item->id,
                'x' => $item->x,
                'y' => $item->y,
            ];
        })->toArray();

        // Proses hierarchical clustering dengan jarak Manhattan
        $clusters = $this->performHierarchicalClustering($data);

        // Tampilkan hasil clustering dengan detail
        return view('clustering.result', compact('clusters'));
    }

    private function performHierarchicalClustering($data)
    {
        $clusters = [];

        // Inisialisasi setiap objek sebagai kelompok terpisah awal
        foreach ($data as $item) {
            $clusters[] = [
                'id' => $item['id'],
                'x' => $item['x'],
                'y' => $item['y'],
                'children' => [$item],
            ];
        }

        // Implementasi hierarchical clustering dengan jarak Manhattan
        while (count($clusters) > 1) {
            $closestPair = $this->findClosestPair($clusters);

            // Gabungkan dua kelompok terdekat menjadi satu kelompok baru
            $newCluster = [
                'id' => 0, // Berikan ID baru jika diperlukan
                'x' => ($closestPair[0]['x'] + $closestPair[1]['x']) / 2,
                'y' => ($closestPair[0]['y'] + $closestPair[1]['y']) / 2,
                'children' => array_merge($closestPair[0]['children'], $closestPair[1]['children']),
            ];

            // Hapus kelompok-kelompok terdekat dari data
            $clusters = array_filter($clusters, function ($cluster) use ($closestPair) {
                return $cluster['id'] != $closestPair[0]['id'] && $cluster['id'] != $closestPair[1]['id'];
            });

            // Tambahkan kelompok baru ke data
            $clusters[] = $newCluster;
        }

        return $clusters;
    }

    private function findClosestPair($clusters)
    {
        $closestPair = null;
        $closestDistance = PHP_INT_MAX;

        for ($i = 0; $i < count($clusters); $i++) {
            for ($j = $i + 1; $j < count($clusters); $j++) {
                $distance = $this->manhattanDistance($clusters[$i], $clusters[$j]);

                if ($distance < $closestDistance) {
                    $closestDistance = $distance;
                    $closestPair = [$clusters[$i], $clusters[$j]];
                }
            }
        }
        return $closestPair;
    }

    private function manhattanDistance($point1, $point2)
    {
        return abs($point1['x'] - $point2['x']) + abs($point1['y'] - $point2['y']);
    }
}