<?php

namespace App\Http\Controllers;

use App\airtime;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use leyo\rapidussd\Http\models\ussd_logs;

class AirtimeController extends Controller
{
    //

    public function index(){

        error_reporting(0);
        header('Content-type: text/plain');
        set_time_limit(100);

        //get inputs
        $sessionId = $_REQUEST["sessionId"];
        $serviceCode = $_REQUEST["serviceCode"];
        $phoneNumber = $_REQUEST["phoneNumber"];
        $text = $_REQUEST["text"];   //

        $data = ['phone' => $phoneNumber, 'text' => $text, 'service_code' => $serviceCode, 'session_id' => $sessionId];

        //log USSD request
        ussd_logs::create($data);

        $no = substr($phoneNumber, -4);
        $no2 = substr($phoneNumber, -9);
        $no2 = "+254".$no2;
        
        $jokes = array(

            "Q: Why did the 30-60-90 triangle marry the 45-45-90 triangle?
            A: They were right for each other","Q: Why didn't the Romans find algebra very challenging?
A: Because X was always 10","Q: What do you get if you divide the circumference of a jack-o-lantern by its diameter?
A: Pumpkin Pi

","Q: Why couldn't the angle get a loan?
            A: His parents wouldn't Cosine

","Q: Why is beer never served at a math party?
A: Because you can't drink and derive.

        ","Q: Why didn't the number 4 get into the nightclub?
A: Because he is 2 square","

Q. Why was the math book sad?
A. Because it had so many problems.
","Q: What is a bird's favorite type of math?
            A: Owl-gebra

","Q: What is a French mathematician's favorite pick up line?
A: 'Voulez vous Cauchy avec moi?'
","Q: Why did the obtuse angle go to the beach?
A: Because it was over 90 degrees

","Q: Why do plants hate math?
A: Because it gives them square roots.

","Q: What is the first derivative of a cow?
A: Prime Rib!
","Q: What's the integral of (1/cabin)d(cabin)?
                A: A natural log cabin!

            ","Q: What do you call a man who spent all summer at the beach?
                A: A Tangent

","Q: What do you call a snake after it drinks five cups of coffee?
                A: A hyper boa
","Q: What did Al Gore play on his guitar?
                A: An Algorithm
","Q: What do you call an angle that is adorable?
                A: acute angle
","Q: What do you call a destroyed angle?
                A: A Rect-angle
","Q: Why did the student get upset when his teacher called him average?
                A: It was a 'mean' thing to say!

            ","Q: Why was the Calculus teacher bad at baseball?
                A: He was better at fitting curves than hitting them
","Q: Why did the polynomial plant die?
                A: Its roots were imaginary.
            ","Q: Why does nobody talk to circles?
                A: Because there is no point!
            ","Q: What is a math teacher's favorite type of tree?
A: A 'Geome-tree'","
Q. What do you get if you cross a math teacher and a clock?
A. Arithma-ticks!
","Q: What happened to the indeterminate form that got sick?
A: It had to go to L'Hospital
","Q: What's the contour integral around Western Europe? 
A: Zero, because all the Poles are in Eastern Europe!
","Q: What do you call a teapot of boiling water on top of mount everest?
A: A high-pot-in-use
","Q: Why did the two 4's skip lunch?
                A: They already 8!

            ","Q: Why didn't Bob drink a glass of water with 8 pieces of ice in it?
A: It was too cubed
","Q: What did one Calculus book say to the other?
A: Don't bother me I've got my own problems!
","Q: Which triangles are the coldest?
A: Ice-sosceles triangles
","Q: Who invented the Round Table?
A: Sir Cumference
","Q: Why is Ms. Radian such a good reporter?
A: She covers the story from every angle
","Q: Why do you rarely find mathematicians spending time at the beach?
A: Because they have sine and cosine to get a tan and don't need the sun!
            ","Q: Why didn't the chicken cross to the other side of the inequality?
A: It couldn't get past the boundary line
","Q: How can a fisherman determine how many fish he needs to catch to make a profit?
                A: By using a cod-ratic inequality
","Q: What does the little mermaid wear?
                A: An algae-bra
","Q: What is the definition of a polar bear?
                A: A rectangular bear after a coordinate transformation
","Q: Why is the Rational Root Theorem so polite?
                A: It minds its p's and q's
","Q: What did the student say when the witch doctor removed his curse?
                A: Hexagon

","Q: Why did the boy eat his math homework?
                A: Because the teacher told him it was a piece of cake.

            ","Q: Have you heard the latest statistics joke?
                A: Probably
","Q: How do you know that your dentist studied algebra?
                A: She said all that candy gave me exponential decay
","Q: What do you call more than one L?
                A: A Parallel
","Q: Why didn't sin and tan go to the party?
A: Just cos
","Q: What did the complementary angle say to the isosceles triangle?
A: Nice Legs
","Q: What is polite and works for the phone company?
A: A deferential operator
","Q: What do you get when you cross a mosquito with a mountain climber?
A: Nothing. You can't cross a vector and a scalar.
            ","Q: What's nonorientable and lives in the sea? 
A: Moebius Dick. ","
Q. Why was 6 afraid of 7?
A. Because 7 8 9!
","Q: What do you call a dead parrot?
A: Polygon","
Q. What's the king of the pencil case?
A. The ruler.
            ","Q: What did the zero say to the the eight?
                A: Nice belt!","
            Q. What's the difference between a diameter and a radius?
A. A Radius","
Q. What tool do you use in mathematics?
A. Multi-plyers.
","Q: How does a mathematician call his dog?
A: Cauchy, because it leaves a residue at every pole.","
Q: What's purple and commutes?
                A. An Abelian grape.
            ","Q: What's yellow and imaginary?
A: The square-root of negative banana
","Q: How do deaf mathematicians communicate?
A: They use sine language
","Q: What do organic mathematicians throw into their fireplaces?
A: Natural Logs
","Q: Why was a student's rubber band pistol confiscated during algebra class?
A: It was considered a weapon of math disruption.
            ","Q: How do you make one vanish?
                A: Add a 'g' to the beginning and it's gone!
","Q: Why shouldn't you argue with a decimal?
                A: Decimals always have a point.
            ","Q: What did the baby tree say when it looked in a mirror?
                A: Gee-Im-A-Tree
","Q: How can you tell that a mathematician is extroverted?
                A: When he talks to you, he looks at YOUR shoes instead of his shoes.
            ","Q: How is an artificial christmas tree like the fourth root of -68?
                A: Neither has real roots.
            ","Q: What do you call a number that can't keep still?
A: A roamin' numeral.
            ","Q: Why don't you do arithmetic in the jungle?
A: Because if you add 4+4 you get ate!
","Q: What does a mathematician do about constipation?
A: He works it out with a pencil
","Q: What is the world's longest song?
                A: 'Aleph-naught Bottles of Beer on the Wall.'
","Q: How does a mathematician induce good behavior in her children?
                A: 'I've told you n times, I've told you n+1 times…'
","Q: What is the difference between a Ph.D. in mathematics and a large pizza?
                A: A large pizza can feed a family of four
","Q: What polygon is also a card trick?
                A: Decagon
","Q: Why did the statistician drown while crossing a river?
                A: It was 3 feet deep... on average
","Q: What do you call it when a mathematician's parrot hasn't been fed?
                A: Poly'no meal'
","Q: How do you solve any equation?
                A: Multiply both sides by zero.
            ","Q: How does one insult a mathematician?
                A: Tell them that their brain is smaller than any ε > 0
","Q: What did 2 say to 4 after 2 beat him in a race?
                A: I'm 2 Fast 4 U!"
            
            
        );

        if(($no=='9038') || ($no=='5429')){
            //check if they have received airtime in the past and how much
            $airtime = airtime::wherePhone($phoneNumber)->orderBy('id', 'DESC')->first();

            $time_from_creation = Carbon::now()->diffInMinutes(Carbon::createFromTimestamp($airtime->created_at->timestamp));

            if($time_from_creation){
                if($time_from_creation >airtime_time){
                    $recipients = array();
                    $data = array();
                    $data['phoneNumber']=$no2;
                    $data['amount'] = "KES 20";

                    array_push($recipients,$data);
//sending the airtime
                    $notify = new NotifyController();
                    $data = ['phone' => $phoneNumber, 'amount' => 20];

                    //log USSD request
                    airtime::create($data);

                    $notify->sendAirtime($recipients);
                    shuffle($jokes);
                    $response = "Sawa mummy, airtime is on it's way".PHP_EOL.trim($jokes[0]);

                }else{
                    $diff = airtime_time-$time_from_creation;
                   shuffle($jokes);
                    $response = "Eish Mummy, retry after ".$diff." minutes".PHP_EOL.trim($jokes[0]);

                }
            }else{
                $recipients = array();
                $data = array();
                $data['phoneNumber']=$phoneNumber;
                $data['amount'] = "KES 20";

                array_push($recipients,$data);
//sending the airtime
                $notify = new NotifyController();
                $data = ['phone' => $phoneNumber, 'amount' => 20];

                //log USSD request
                airtime::create($data);

                $notify->sendAirtime($recipients);
                $response = "Sawa mummy, airtime is on it's way";
            }

        }else{
            $response = "Eish yawa, it is only for Mummy Sly. Talk to Le-yo nicely.".PHP_EOL.trim($jokes[0]);
        }

        self::sendresponse($response,3);
    }

    public function sendResponse($response,$type=1,$user=null)
    {
        if ($type == 1) {
            $output = "CON ";


        } elseif($type == 2) {
            $output = "CON ";
            $response = $response.PHP_EOL."1. Back to main menu".PHP_EOL."2. Log out";
            $user->session = 4;
            $user->progress = 0;
            $user->save();
        }else{
            $output = "END ";
        }

        $output .= $response;
        header('Content-type: text/plain');
        echo $output;
        exit;
    }
}
