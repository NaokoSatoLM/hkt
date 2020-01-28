<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use Spatie\PdfToImage\Pdf;

class OrderSearchController extends Controller
{
    public $ShipmentNameTable = [
        'ks' => '日通',
        'ds' => '備後',
        'ys' => '名鉄',
        'sx' => '王子',
    ];

    public function index(Request $request, $code)
    {
        return $this->ksIndex($code);
    }

    public function ksIndex($code = null)
    {
        $datas = [
            ['id'=>'1',
            '発注者'=>'藤徳物産株式会社',
            '納品先'=>'岡山県岡山市南区古新田 1283-3',
            '金額'=>'130000',
            '受付日時'=>'2020/1/30',
            'ステータス'=>'承認待ち',
            ],
            ['id'=>'2',
            '発注者'=>'藤徳物産株式会社',
            '納品先'=>'岡山県岡山市南区古新田 1283-3',
            '金額'=>'130000',
            '受付日時'=>'2020/1/30',
            'ステータス'=>'承認待ち'
            ],
            ['id'=>'3',
            '発注者'=>'藤徳物産株式会社',
            '納品先'=>'岡山県岡山市南区古新田 1283-3',
            '金額'=>'130000',
            '受付日時'=>'2020/1
            /30',
            'ステータス'=>'未処理'
            ],
        ];
        // タイトルに運送会社を入れるためにtテーブルから呼び出す
        $name = $this->ShipmentNameTable[$code];
        //今日の日付呼び出す
        $now1 = Carbon::now()->format('Y-m-d');
        $now2 = Carbon::now()->format('Y-m-d');

        return view('orders/ks_index', compact('datas','now1', 'now2', 'name'));
    }

    public function ksSearch(Request $request)
    {
        $name = $request['driver'];
        $now1 = $request['now1'];
        $now2 = $request['now2'];
        if($request['status'] == "untreated") {
            $datas = [
                ['id'=>'3',
                '発注者'=>'藤徳物産株式会社',
                '納品先'=>'岡山県岡山市南区古新田 1283-3',
                '金額'=>'15000',
                '受付日時'=>'2020/12/30',
                'ステータス'=>'未処理'
                ],
            ];

            return view('orders/ks_index', compact('datas','now1', 'now2','name'));

        } elseif($request['status'] == "pending") {
            $datas = [
                ['id'=>'1',
                '発注者'=>'藤徳物産株式会社',
                '納品先'=>'岡山県岡山市南区古新田 1283-3',
                '金額'=>'15000',
                '受付日時'=>'2020/12/30',
                'ステータス'=>'承認待ち',
                ],
                ['id'=>'2',
                '発注者'=>'藤徳物産株式会社',
                '納品先'=>'岡山県岡山市南区古新田 1283-3',
                '金額'=>'15000',
                '受付日時'=>'2020/12/30',
                'ステータス'=>'承認待ち'
                ],
            ];
            return view('orders/ks_index', compact('datas','now1', 'now2','name'));

        } elseif($request['status'] == "registered") {
            $msg = "登録済みのデータはありません";
            return view('orders/ks_index', compact('msg','now1', 'now2','name','name'));
        }
    }
}
