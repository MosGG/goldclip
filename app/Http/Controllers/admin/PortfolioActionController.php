<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PortfolioActionController extends Controller
{
    public function portfolioNew(Request $request)
    {

        $title = $request->input('title');
        // $category = $request->input('category');
        $content = $request->input('content');
        // $medias = json_decode($request->input('medias'));
        $searchIndex = $request->input('index');
        // $date = date_create($request->input('date'));
        $title_cn = $request->input('title_cn');
        $content_cn = $request->input('content_cn');
        $searchIndex_cn = $request->input('id_cn');

        // $hasFeatured = 0;
        // if (count($medias) > 0) {
        //     foreach($medias as $media) {
        //         if($hasFeatured == 0){
        //             $hasFeatured = $media->featured;
        //         }
        //     }

        //     if($hasFeatured == 0){
        //         $medias[0]->featured = 1;
        //     }
        // }
        
        $portfolioId = DB::table('portfolios')->insertGetId(
            ['title' => $title, 'title_cn' => $title_cn, 'content' => $content,  'content_cn' => $content_cn,'searchIndex' => $searchIndex, 'id_cn' => $searchIndex_cn, 'publisher' => $request->session()->get('admin')]
        );

        // foreach ($medias as $media) {
        //     DB::table('media_portfolio')->insert([
        //     ['media_id' => $media->id, 'portfolio_id' => $portfolioId, 'featured' => $media->featured, 'narrow' => $media->narrow]
        //     ]);
        // }
     
        return '{"success":true}';
    }

    public function portfolioEdit(Request $request){

    	$id = $request->input('id');
        $title = $request->input('title');
        // $category = $request->input('category');
        $content = $request->input('content');
        // $medias = $request->input('medias');
        $searchIndex = $request->input('searchIndex');
        $title_cn = $request->input('title_cn');
        $content_cn = $request->input('content_cn');
        $searchIndex_cn = $request->input('id_cn');
        // $date = date_create($request->input('date'));
        // $searchIndex = str_replace(" ", "-", $title);
        // $searchIndex = preg_replace('/[#\/@?&]/', '', $searchIndex);

        // DB::table('media_portfolio')->where('portfolio_id', '=', $id)->delete();

        // $hasFeatured = 0;
        // if(count($medias) != 0){
        //     foreach($medias as $media) {
        //         if($hasFeatured == 0){
        //             $hasFeatured = $media['featured'];
        //         }
        //     }

        //     if($hasFeatured == 0){
        //         $medias[0]['featured']= 1;
        //     }
        
        //     foreach ($medias as $media) {
        //         DB::table('media_portfolio')->insert([
        //         ['media_id' => $media['id'], 'portfolio_id' => $id, 'featured' => $media['featured'], 'narrow' => $media['narrow']]
        //         ]);
        //     }
        // }

        DB::table('portfolios')
            ->where('id', $id)
            ->update(['title' => $title, 'title_cn' => $title_cn, 'content' => $content,  'content_cn' => $content_cn,'searchIndex' => $searchIndex, 'id_cn' => $searchIndex_cn]);

        return '{"success":true}';
    }

    public function portfolioFeature(Request $request){
    	$id = $request->input('id');
        $featured = $request->input('featured');
         DB::table('portfolios')
            ->where('id', '=', $id)
            ->update(['featured' => $featured]); 

        return '{"success":true}';
    }

    public function  portfolioClient(Request $request){

        $id = $request->input('id');
        $client = $request->input('client');

        if($client == 0){
            $clientSort = DB::table('portfolios')->where('id', '=', $id)->get()[0]->sort;
            DB::table('portfolios')->where('sort', '>', $clientSort)->decrement('sort');
            DB::table('portfolios')
            ->where('id', '=', $id)
            ->update(['client' => $client, 'sort' => 0]); 
            return '{"success":true}';
        }else{
            $clientSort = DB::table('portfolios')->orderBy('sort', 'DESC')->get()[0];
            if(!isset($clientSort)){
                $clientSort = 1;
            }else{
                $clientSort = $clientSort->sort + 1;
            }
            DB::table('portfolios')
            ->where('id', '=', $id)
            ->update(['client' => $client, 'sort' => $clientSort]); 
            return '{"success":true}';
        }
    }

   

    public function portfolioDelete(Request $request){
        $id = $request->input('id');
        $clientSort = DB::table('portfolios')->where('id', '=', $id)->get()[0]->sort;
        if(!$clientSort == 0){
            DB::table('portfolios')->where('sort', '>', $clientSort)->decrement('sort');    
        }
        DB::table('media_portfolio')->where('portfolio_id', '=', $id)->delete();
        DB::table('portfolios')->where('id', $id)->delete();
        return '{"success":true}';
    }

    public function portfolioBan(Request $request){
        $id = $request->input('id');
        $clientSort = DB::table('portfolios')->where('id', '=', $id)->get()[0]->sort;
        if(!$clientSort == 0){
            DB::table('portfolios')->where('sort', '>', $clientSort)->decrement('sort');    
        }
        DB::table('portfolios')
            ->where('id', '=', $id)
            ->update(['client' => 0, 'featured' => 0, 'status' => 0, 'sort' => 0]); 
        return '{"success":true}';
    }


    public function portfolioActive(Request $request){
        $id = $request->input('id');
        DB::table('portfolios')
            ->where('id', '=', $id)
            ->update(['status' => 1]); 
        return '{"success":true}';
    }

    public function clientSort(Request $request){
        $portfolios = $request->input('portfolios');
        foreach($portfolios as $key => $portfolio){
            $sort = $key + 1;
            DB::table('portfolios')
            ->where('id', '=', $portfolio['id'])
            ->update(['sort' => $sort]);
        }

        return '{"success":true}';
    }
}
