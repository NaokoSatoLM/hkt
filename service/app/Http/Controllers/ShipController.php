<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ksIndex()
    {
        $datas = [
            ['id'=>'1',
            '発注者'=>'LM',
            '納品先'=>'大阪',
            '金額'=>'15000',
            '受付日時'=>'2019/12/12',
            'ステータス'=>'承認待ち',
        ],
            ['id'=>'2',
            '発注者'=>'NW',
            '納品先'=>'大阪',
            '金額'=>'50000',
            '受付日時'=>'2019/12/12',
            'ステータス'=>'未処理'
    ],
    
    ];
        return view('shipping/ks_index', compact('datas'));
    }

    public function ksSearch(Request $request)
    {
        if($request['status'] == "untreated") {
            $datas = [
            
                ['id'=>'2',
                '発注者'=>'NW',
                '納品先'=>'大阪',
                '金額'=>'50000',
                '受付日時'=>'2019/12/12',
                'ステータス'=>'未処理'
                ],
            ];
            return view('shipping/ks_index', compact('datas'));

        } elseif($request['status'] == "pending") {
            $datas = [
                ['id'=>'1',
                '発注者'=>'LM',
                '納品先'=>'大阪',
                '金額'=>'15000',
                '受付日時'=>'2019/12/12',
                'ステータス'=>'承認待ち',
            ],
            ];
            return view('shipping/ks_index', compact('datas'));

        } elseif($request['status'] == "registered") {
            $msg = "データがありありません";
            return view('shipping/ks_index', compact('msg'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ksCheck(Request $request)
    {
        
        if($request['confirm_id'] == "1") {
            //注文詳細のdata
            $datas = [
                ['id'=>'1',
                '商品名'=>'サンプル',
                '容量'=>'100g',
                '個数'=>'1',
                '単価'=>'0',
                '合計金額'=>'0',
                ],
                ['id'=>'2',
                '商品名'=>'食卓用',
                '容量'=>'20g',
                '個数'=>'100',
                '単価'=>'150',
                '合計金額'=>'15000',
                ],
            ];
            
            //過去の発注履歴のdata
            $old_datas = [
                ['id'=>'1',
                '納品先'=>'岡山工場',
                '商品名'=>'サンプル',
                '容量'=>'100g',
                '個数'=>'1',
                '単価'=>'0',
                '合計金額'=>'0',
                '送り状'=>'試供品',
                ],
                ['id'=>'2',
                '納品先'=>'広島工場',
                '商品名'=>'食卓用',
                '容量'=>'20g',
                '個数'=>'100',
                '単価'=>'150',
                '合計金額'=>'15000',
                '送り状'=>'納品先でのパイロット試作用',
                ],
            ];

            return view('shipping/ks_check', compact('datas', 'request', 'old_datas'));

        }elseif($request['confirm_id'] == "2"){
            $datas = [
                ['id'=>'3',
                '商品名'=>'工業用',
                '容量'=>'10kg',
                '個数'=>'5',
                '単価'=>'10000',
                '合計金額'=>'50000',
                ],
            ];

            $old_datas = [
                ['id'=>'3',
                '納品先'=>'和歌山工場',
                '商品名'=>'サンプル',
                '容量'=>'100g',
                '個数'=>'1',
                '単価'=>'0',
                '合計金額'=>'0',
                '送り状'=>'開発の佐藤様宛',
                ],
                ['id'=>'4',
                '納品先'=>'滋賀工場',
                '商品名'=>'食卓用',
                '容量'=>'20g',
                '個数'=>'100',
                '単価'=>'150',
                '合計金額'=>'15000',
                '送り状'=>'午前中着希望',
                ],
            ];

            return view('shipping/ks_check', compact('datas', 'request', 'old_datas'));
        }
    }


    public function ksApprove()
    {
        return view('shipping/ks_approve');


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
