<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NotifyController extends Controller {

	protected $_username;
	protected $_apiKey;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		public function __construct()
		{
			$this->_username    = "lenykoskey";
			$this->_apiKey      = "abbfa09e621a6ece272a254e3fcd910657ff46e88f82db205499603d06dda908";

		}



	public  function index()
	{
		//tests
		print(self::sendSms("0728355429","This is a test"));
		exit;

	}

	public function sendEmail($to,$message){
		$user = "";


		Mail::send('emails.welcome', "", function ($message) {
			$message->from('ussd@devs.mobi', 'Watu Credit');

			$message->to('lenykoskey@yahoo.com')->cc('lenykoskey@yahoo.com');
		});

	}

	public function sendSms($to,$message){
		//require_once('AfricasTalkingGateway.php');
		$gateway = new AfricasTalkingGateway($this->_username,$this->_apiKey);

// Any gateway errors will be captured by our custom Exception class below,
// so wrap the call in a try-catch block
		try
		{
			// Thats it, hit send and we'll take care of the rest.
			$results = $gateway->sendMessage($to, $message);
//			foreach($results as $result) {
//				// Note that only the Status "Success" means the message was sent
////				echo " Number: " .$result->number;
////				echo " Status: " .$result->status;
////				echo " MessageId: " .$result->messageId;
////				echo " Cost: "   .$result->cost."\n";
//			}
		}
		catch ( AfricasTalkingGatewayException $e )
		{
//			echo "Encountered an error while sending: ".$e->getMessage();
		}

return;


	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	function sendAirtime($recipients){


		$recipientStringFormat = json_encode($recipients);

		//Create an instance of our awesome gateway class and pass your credentials
		$gateway = new AfricasTalkingGateway($this->_username, $this->_apiKey);

		try {
			$results = $gateway->sendAirtime($recipientStringFormat);

			foreach($results as $result) {
//				echo $result->status;
//				echo $result->amount;
//				echo $result->phoneNumber;
//				echo $result->discount;
//				echo $result->requestId;
//
//				//Error message is important when the status is not Success
//				echo $result->errorMessage;
			}
		}
		catch(AfricasTalkingGatewayException $e){
//			echo $e->getMessage();
		}
	}

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
