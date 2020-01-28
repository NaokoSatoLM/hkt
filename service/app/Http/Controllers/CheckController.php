<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use Spatie\PdfToImage\Pdf;

class CheckController extends Controller
{
    public $ShipmentNameTable = [
        'ks' => '日通',
        'ds' => '備後',
        'ys' => '名鉄',
        'sx' => '王子',
    ];

    public function ksCheck(Request $request)
    {
        if($request['confirm_id'] == "1") {
            //注文詳細のdata
            $datas = [
                ['id'=>'1',
                '商品名'=>'伯方の塩',
                '商品コード'=>'1234-5',
                '数量'=>'500G',
                '入数'=>'20×2',
                '発注数'=>'4',
                '単価'=>'10000',
                '合計金額'=>'40000',
                '在庫数'=>'100',
                ],
                ['id'=>'2',
                '商品名'=>'伯方の塩 あら塩SP',
                '商品コード'=>'1234-5',
                '数量'=>'200G',
                '入数'=>'12×4',
                '発注数'=>'3',
                '単価'=>'10000',
                '合計金額'=>'30000',
                '在庫数'=>'100',
                ],
                ['商品名'=>'伯方の塩 焼塩',
                '商品コード'=>'1234-5',
                '数量'=>'2G×25',
                '入数'=>'20',
                '発注数'=>'5',
                '単価'=>'10000',
                '合計金額'=>'50000',
                '在庫数'=>'100',
                ],
            ];

            $alert = "初回注文::商品名:食卓用,容量:20g";
            $confirm_id = $request['confirm_id'];

            //FAXを表示できるように処理する
            $pdf_path = public_path('/img/sample1.pdf');
            $image_path = public_path('/png/sample1.png');
            try{
                $pdf = new \Spatie\PdfToImage\Pdf($pdf_path);
                $pdf->setOutputFormat('png');
                $pdf->saveImage($image_path);
            } catch (Exception $e) {
                echo '捕捉した例外: ', $e->getMessage(), "\n";
            }

            return view('orders/ks_check', compact('datas', 'request', 'alert', 'confirm_id'));

        } elseif($request['confirm_id'] == "2") {
            $datas = [
                ['id'=>'1',
                '商品名'=>'伯方の塩',
                '商品コード'=>'1234-5',
                '数量'=>'500G',
                '入数'=>'20×2',
                '発注数'=>'4',
                '単価'=>'10000',
                '合計金額'=>'40000',
                '在庫数'=>'100',
                ],
                ['id'=>'2',
                '商品名'=>'伯方の塩 あら塩SP',
                '商品コード'=>'1234-5',
                '数量'=>'200G',
                '入数'=>'12×4',
                '発注数'=>'3',
                '単価'=>'10000',
                '合計金額'=>'40000',
                '在庫数'=>'100',
                ],
                ['商品名'=>'伯方の塩 焼塩',
                '商品コード'=>'1234-5',
                '数量'=>'2G×25',
                '入数'=>'20',
                '発注数'=>'5',
                '単価'=>'10000',
                '合計金額'=>'50000',
                '在庫数'=>'100',
                ],
            ];

            $alert = "";
            $confirm_id = $request['confirm_id'];
            return view('orders/ks_check', compact('datas', 'request', 'alert', 'confirm_id'));

        } elseif($request['confirm_id'] == "3") {
            $datas = [
                ['id'=>'1',
                '商品名'=>'伯方の塩',
                '商品コード'=>'1234-5',
                '数量'=>'500G',
                '入数'=>'20×2',
                '発注数'=>'4',
                '単価'=>'10000',
                '合計金額'=>'40000',
                '在庫数'=>'100',
                ],
                ['id'=>'2',
                '商品名'=>'伯方の塩 あら塩SP',
                '商品コード'=>'1234-5',
                '数量'=>'200G',
                '入数'=>'12×4',
                '発注数'=>'3',
                '単価'=>'10000',
                '合計金額'=>'30000',
                '在庫数'=>'100',
                ],
                ['商品名'=>'伯方の塩 焼塩',
                '商品コード'=>'1234-5',
                '数量'=>'2G×25',
                '入数'=>'20',
                '発注数'=>'5',
                '単価'=>'10000',
                '合計金額'=>'50000',
                '在庫数'=>'100',
                ],
            ];

            $alert = "";
            $confirm_id = $request['confirm_id'];
            return view('orders/ks_firstcheck', compact('datas', 'request', 'alert', 'confirm_id'));
        }
    }

    public function showDetail(Request $request)
    {
        $company = $request['company'];
        $place = $request['place'];
        if ($request['confirm_id'] == "1") {
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
                ['id'=>'5',
                '納品先'=>'和歌山工場',
                '商品名'=>'サンプル',
                '容量'=>'100g',
                '個数'=>'1',
                '単価'=>'0',
                '合計金額'=>'0',
                '送り状'=>'開発の佐藤様宛',
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
                ['id'=>'6',
                '納品先'=>'滋賀工場',
                '商品名'=>'食卓用',
                '容量'=>'20g',
                '個数'=>'100',
                '単価'=>'150',
                '合計金額'=>'15000',
                '送り状'=>'午前中着希望',
                ],
            ];

            return view('orders/past_order_detail', compact('old_datas', 'company', 'place'));

        } elseif($request['confirm_id'] == "2") {

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
                ['id'=>'5',
                '納品先'=>'和歌山工場',
                '商品名'=>'サンプル',
                '容量'=>'100g',
                '個数'=>'1',
                '単価'=>'0',
                '合計金額'=>'0',
                '送り状'=>'開発の佐藤様宛',
                ],
                ['id'=>'6',
                '納品先'=>'滋賀工場',
                '商品名'=>'食卓用',
                '容量'=>'20g',
                '個数'=>'100',
                '単価'=>'150',
                '合計金額'=>'15000',
                '送り状'=>'午前中着希望',
                ],
            ];
            return view('orders/past_order_detail', compact('old_datas', 'company', 'place'));
        } else {
            $msg = '読み込めませんでした';
            return view('orders/past_order_detail', compact('msg'));
        }
    }
}