<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Facade\Ignition\Tabs\Tab;
use Illuminate\Support\Facades\DB;

class onlinePollController extends Controller
{
    //login
    public function loginAdmin ()
    {
        return view ("/admin/login");
    }
    // public function dispdata(Request $req)
    // {
    //     return "hello";
    //     return $req->All();
    // }
    // validation 
    function chkLogin(Request $req)
    {
        //return $req->All();
        // $path = $req->path();
        // $url = $req->url();
        // print($path);
        // echo "<br>";
        // print($url);
        // $email = $req->input("txtemail");
        // $pass = $req->txtpass;
        // echo "<br> Email :: ".$email."<br>";
        // echo "Password :: ".$pass;

        // $validateData = $req->validate([
        //     "txtemail "=>'required',
        //     "txtpass" => 'required', 
        // ]);
        //return $req->All();
         print( $req -> input("txtemail"));
         print( $req -> input("txtpass"));
        $flag = DB::table("admin")->where("uname","$req->txtemail" )->where("password",$req->txtpass)->count();
       // echo $flag;
        if ($flag){
            return redirect ("/adminHome");
        }
        else
        {
            return view ("/admin/login")->with("msg","invalid username and password");
        }
        /*
        $uname =   $req -> input("txtemail");
        $pwd =   $req -> input("txtpass");
        

        if ($uname == "admin@gmail.com" && $pwd == "admin"){
            return redirect ("/adminHome");
        }
        else
        {
            return view ("/admin/login")->with("msg","invalid username and password");
        }
        */
    }
    // home 
    function adminHome(){
        return view("/admin/home");
    }
    // add poll
    function addPoll()
    {
        return view("/admin/addPoll");
    }
    // insert poll
    function insertPoll(Request $req)
    {
        $req->validate([
            "txtque"=>"required",
            "txtans1" => "required" ,
            "txtans2" => "required" ,
            "txtans3" => "required" ,
            "txtans4" => "required" 
        ]);
        $flag = DB::table("polladmin")-> insert([

            'question'=> $req ->txtque,
            "option1"=>$req ->txtans1,
            "option2"=>$req ->txtans2,
            "option3"=>$req ->txtans3,
            "option4"=>$req ->txtans4,
            "status"=> 0
        ]);
        if ($flag == 1){
            return redirect ("/addPoll")->with("flag",1);
        }
        else
        {
            return view ("/addPoll")->with("flag",0);
        }
    }
     // display Active poll
     function displayPoll()
     {
         $data = DB::table("polladmin")->get();
         return view("/admin/active")->with("data",$data);
     }
     // update Inactive poll
     function updatePoll($que)
     {
        //echo "hello";
         $data = DB::table("polladmin")->update(["status"=>0]);
         print($data);
         $update = DB::table("polladmin")-> where ("question",$que )-> update(["status"=>1]);
         print($que);
         return redirect("/displayPoll");
     }
     // display poll result
    function resultPoll()
    {
        //$qry = DB::table("pollvote")->select('question')->distinct()->orderBy('question')->get();
        $all = DB::table("polladmin")->distinct()->orderBy("question")->get();
        $i = 0;
        //print($qry);
        //echo "<br>".$all;
       
        foreach($all as $row){

           // $total = DB::table("pollvote")->where("question",$row->question)->get()->count();
            $total = DB::table("pollvote")->get()->count();
            // take options
            $opt1 = DB::table("pollvote")-> where ('question',$row->question )-> where ('optionName',$row->option1 )-> value("vote");
            $opt2 = DB::table("pollvote")-> where ('question',$row->question )-> where ('optionName',$row->option2 )-> value("vote");
            $opt3 = DB::table("pollvote")-> where ('question',$row->question )-> where ('optionName',$row->option3 )-> value("vote");
            $opt4 = DB::table("pollvote")-> where ('question',$row->question )-> where ('optionName',$row->option4 )-> value("vote");
            //  echo $opt1;
            // echo $opt2;
            // echo $opt3;
            // echo $opt4;
            // //take votes
            // $vote1 = DB::table("pollvote")->where("optionName",$opt1)->get("vote"); 
            // $vote2 = DB::table("pollvote")->where("optionName",$opt2)->get("vote"); 
            // $vote3 = DB::table("pollvote")->where("optionName",$opt3)->get("vote"); 
            // $vote4 = DB::table("pollvote")->where("optionName",$opt4)->get("vote"); 
            //  echo $vote1;
            // echo $vote2;
            // echo $vote3;
            // echo $vote4;
           
            $data["total"] = $total;
           // echo $data["total"];
            $data["opt1"] = $opt1;
           // echo $data["opt1"];
            $data["opt2"] = $opt2;
            //echo $data["opt2"];
            $data["opt3"] = $opt3;
           // echo $data["opt3"];
            $data["opt4"] = $opt4;
           // echo $data["opt4"];
           // $data["question1"] = $all[$i]->question;
            //echo $data["question1"];
            $data["option1"] = $all[$i]->option1;
           // echo $data["option1"];
            $data["option2"] = $all[$i]->option2;
           // echo $data["option2"];
            $data["option3"] = $all[$i]->option3;
           // echo $data["option3"];
            $data["option4"] = $all[$i]->option4;
           // echo $data["option4"];
            $data["question"]=$row->question;
           // echo $data["question"];
            $new_data[$i++] = $data;
            //echo $new_data[$i++];

        }
        //echo $new_data;
        //echo "data:::". $data;
         return view("/admin/display",["pollData"=>$new_data]);
    }
     // display user poll
     function userPoll()
     {
         $data = DB::table("polladmin")->where ('status',1)->first();
         if ($data == null)
         {
            return "Opps ! There was no Active Poll !!";
         }
         else
         {
            return view("/user/dispPoll")->with("data",$data);
         }
         
     }
     //add user Vote poll
    function votePoll(Request $req)
    {
        echo $req->rdbVote;
        $req->validate([
           
            "rdbVote" => "required" 
        ]);
        echo $req->rdbVote;
        $flag = DB::table("pollvote")->where("optionName",$req->rdbVote)->value("vote");
        echo "before::".$flag;
         
         $qry = DB::table("pollvote")->select('optionName')->where("optionName",$req->rdbVote)->value("optionName");
        echo "name::".$qry;
        ($flag == null)?$flag=1:$flag++;
        echo "after::".$flag;
        if ($qry == null)
        {
           $insertNew =  DB::table("pollvote")->insert([

                    "question"=>$req->txtque,
                    "optionName"=>$req->rdbVote,
                    "vote"=>$flag
                ]);
                echo "insert::". $insertNew;
        }
        else
        {
            $update = DB::table("pollvote")-> where ("optionName",$req->rdbVote )-> update(["vote"=>$flag]);
         echo  "update" .$update;
        }
        // DB::table("pollvote")->insert([

        //     "question"=>$req->txtque,
        //     "optionName"=>$req->rdbVote,
        //     "vote"=>$flag
        // ]);
        return redirect("/");        
    }
    // view poll at user side 
    function viewPoll($que,$opt1,$opt2,$opt3,$opt4)
    {
       // echo $que;
        // $all = DB::table("polladmin")->where("question",$que)->get();
        // echo $all;
        // echo $opt1;
        // echo $opt2;
        // echo $opt3;
        // echo $opt4;
    //    $ans1 = $all->option1;
    //    $ans2 = $all->option2;
    //    $ans3 = $all->option3;
    //    $ans4 = $all->option4;
        $total = DB::table("pollvote")->get()->count();
        // echo "total".$total."<br>";
        // $ans1 = DB::table("pollvote")->select('optionName')->where('optionName',$opt1 )->get();
        // echo "1:".$ans1."<br>";
        // $ans2 = DB::table("pollvote")->select('optionName')->where('optionName',$opt2 )->get();
        // echo "2:".$ans2."<br>";
        // $ans3 = DB::table("pollvote")->select('optionName')->where('optionName',$opt3 )->get();
        // echo "3:".$ans3."<br>";
        // $ans4 = DB::table("pollvote")->select('optionName')->where('optionName',$opt4 )->get();
        // echo "4:".$ans4."<br>";

        $vote1 = DB::table("pollvote")-> where ('optionName',$opt1 )-> value("vote");
        $vote2 = DB::table("pollvote")-> where ('optionName',$opt2 )-> value("vote");
        $vote3 = DB::table("pollvote")-> where ('optionName',$opt3 )-> value("vote");
        $vote4 = DB::table("pollvote")-> where ('optionName',$opt4 )-> value("vote");
        
            $data["vote1"] = $vote1;
           // echo $data["opt1"];
            $data["vote2"] = $vote2;
            //echo $data["opt2"];
            $data["vote3"] = $vote3;
           // echo $data["opt3"];
            $data["vote4"] = $vote4;
           // echo $data["opt4"];
        $data["que"] = $que;
        echo "<br>".$data["que"];
        $data["total"] = $total;
        $data["ans1"] = $opt1;
        $data["ans2"] = $opt2;        
        $data["ans3"] = $opt3;
        $data["ans4"] = $opt4;

        //return view("/user/result",["pollData"=>$data,"all"=>$all]);
        return view("/user/result",["pollData"=>$data]);
    }
    
}
