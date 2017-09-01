<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
     //    $featuredWorks = DB::table('portfolios')
     //        ->where('featured','=','1')
     //        ->take(8)
     //        ->get();

     //    foreach($featuredWorks as $work){
     //        $media = DB::table('media_portfolio')
     //                    ->where([
     //                        ['portfolio_id',$work->id],
     //                        ['featured','1']
     //                    ])
     //                    ->get();
     //        if(sizeof($media) > 0){
     //            $media = $media[0]->media_id;
     //            $mediaSrc = DB::table('media_library')
     //                        ->where('id','=',$media)
     //                        ->get()[0]->src;
     //            $work->image = $mediaSrc;            
     //        }
     //    }
    	// return view('pages.home')->with('featuredWorks',json_encode($featuredWorks));
        return view('pages.home');
    }

    public function login(Request $request){
        $username = $request->input("username");
        $password = $request->input("password");
        if ($username !== NULL || $password !== NULL) {
            if (!empty($username) && !empty($password)){
                $res = array("success" => "failed", "msg" => "The Username, Password you entered doesn't match our records.");
            } else {
                $res = array("success" => "failed", "msg" => "Please input Username and Password.");
            }
            return json_encode($res);
        } else {
            return view('pages.login');   
        }
    }

    public function portfolio(){
        $portfolios = DB::table('portfolios')->where('client', '=', '1')->orderBy('sort')->get();
    	return view('pages.portfolio')->with('portfolios', json_encode($portfolios));
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.service');
    }

    public function portfolioTemplates($index){
    	switch ($index) {
    		case 'home':
    			return view('partial.portfolioHome');
    			break;
    		case 'brand':
    			return view('partial.portfolioBrand');
    			break;
			case 'design':
				return view('partial.portfolioOther');
				break;
			case 'digital':
				return view('partial.portfolioOther');
				break;
			case 'media':
				return view('partial.portfolioOther');
				break;
			case 'interior':
				return view('partial.portfolioOther');
				break;
			case 'work':
				return view('partial.portfolioWork');
				break;
    		default:
    			return view('partial.portfolioHome');
    			break;
    	}
    }
}
