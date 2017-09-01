<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class PagesController extends AdminBaseController
{
    public function login(){
        return view('admin.login');
    }

    public function home(Request $request){
        $admins = DB::table('admins')->get();
        return view('/admin.home')->with('admins', json_encode($admins));
    }

    public function mediaLibrary(Request $request){
        if ($request->input("folder") == null){
            $father = "0";
        } else {
            $father = $request->input("folder");
            if (empty(DB::table('media_library')->where("father", $father)->get())) {
                $father = "0";
            }
        }
        
        if ($father !== "0") {
            $uplevel = DB::table('media_library')->where("id", $father)->get();
            $upFatherId = $uplevel[0]->father;
        } else {
            $upFatherId = "";
        }
        
        $folder = DB::table('media_library')->where("father", $father)->where("category", "folder")->get();
        $media = DB::table('media_library')->where("father", $father)->where("category", "!=", "folder")->get();
        return view('/admin.mediaLibrary')
                ->with('folder', $folder)
                ->with('media', json_encode($media))
                ->with('father', $father)
                ->with('upper', $upFatherId);
    }
    
    public function mediaLibraryNewFolder(Request $request){
        $father = $request->input("father");
        $name = $request->input("name");
        DB::insert('insert into media_library (id, src, src_thumb, category, father, name) values (?, ?, ?, ?, ?, ?)', [null, "", "", "folder", $father, $name]);
        return response()->json(array('status' => 1,'msg' => 'ok'));
    }
    
    public function mediaLibraryDelFolder(Request $request){
        $id = $request->input("id");
        $fatherArr = DB::table("media_library")->where("id", $id)->get();
        $fatherId = $fatherArr[0]->father;
        DB::update("UPDATE media_library SET father = ? WHERE father = ?", array($fatherId, $id));
        DB::table("media_library")->where("id", $id)->delete();
        return response()->json(array('status' => 1,'msg' => 'ok'));
    }
    
    public function mediaLibraryMove(Request $request){
        $imgid = $request->input("imgid");
        $folderid = $request->input("folderid");
        foreach ($imgid as $id){
            DB::update("UPDATE media_library SET father = ? WHERE id = ?", array($folderid, $id));
        }
        return response()->json(array('status' => 1,'msg' => 'ok'));
    }
    
    public function portfolio(Request $request){
        $portfolios = DB::table('portfolios')->get();
        return view('/admin.portfolio')->with('portfolios', json_encode($portfolios));
    }

    public function portfolioSort(Request $request){
        $portfolios = DB::table('portfolios')->where('client','=', 1)->orderBy('sort')->get();
        return view('/admin.portfolioSort')->with('portfolios', json_encode($portfolios));
    }

    public function document(Request $request){
        $documents = DB::table('documents')->get();
        return view('/admin.document')->with('documents', json_encode($documents));
    }

    public function portfolioNew(Request $request){
        $media = DB::table('media_library')->where("category", "!=", "folder")->get();
        foreach ($media as $value) {
            $value->featured = 0;
            $value->narrow = 0;
            if ($value->father != 0) {
                $data = DB::table('media_library')->where("id", $value->father)->get();
                $folderName = $data[0]->name;
            } else {
                $folderName = "";
            }
            $value->foldername = $folderName;
        }
        return view("/admin.portfolioNew")->with('media', json_encode($media));
    }

    public function portfolioEdit(Request $request, $id){
        $portfolio = DB::table('portfolios')
                    ->where('id', '=', $id)
                    ->get();

        $medias = DB::table('media_library')->where("category", "!=", "folder")->get();
        $mediaList = DB::table('media_portfolio')
                ->where('portfolio_id', '=' ,$id)
                ->get();

        foreach ($medias as $media) {
            $media->featured = 0;
            $media->narrow = 0;
            $media->tickClass = "";
            if ($media->father != 0) {
                $data = DB::table('media_library')->where("id", $media->father)->get(["name"]);
                $folderName = $data[0]->name;
            } else {
                $folderName = "";
            }
            $media->foldername = $folderName;
            foreach ($mediaList as $mediaPhoto) {
                if($id == $mediaPhoto->portfolio_id && $media->id == $mediaPhoto->media_id){
                    $media->featured = $mediaPhoto->featured;
                    $media->narrow = $mediaPhoto->narrow;
                    $media->tickClass = "mediaTick";
                    $media->sortID = $mediaPhoto->id;
                }
            }
        }

        $date = date_create($portfolio[0]->date);
        $portfolio[0]->date = date_format($date,"d-m-Y");
        
        return view("/admin.portfolioEdit")
            ->with("media", json_encode($medias))
            ->with("portfolio", json_encode($portfolio));
    }

}
