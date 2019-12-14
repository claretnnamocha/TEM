<?php
namespace AlphaAPI\Domains;
use RedBeanPHP\R as DB;

class Domain
{
	
	function signin(string $email, string $password)
	{
		$organisers = DB::find('organisers','email = :email', [ 'email' => $email ]);
		if (count($organisers) != 1) {
			return [
				'status' => false,
				'message' => 'Account not found!'
			];
		}
		$organiser = array_values($organisers)[0];

		if (!password_verify($password, $organiser->password)) {
			return [
				'status' => false,
				'message' => 'Account not found!'
			];
		}

		return [
			'status' => true,
			'message' => 'User found!',
			'data' => [
				'id' => $organiser->id
			]
		];
	}

	function signup($name, $email, $password)
	{
		$organiser = DB::dispense('organisers');
		$organiser->name = $name;
		$organiser->email = $email;
		$organiser->password = $password;
		DB::store($organiser);
		$saved = $organiser->id != null;
		$msg =  $saved ? 'Registration successful' : 'Registration failed!';
		return [
			'status' => $saved,
			'message' => $msg
		]; 
	}

	function get_all_events()
	{
		$events = DB::getAll('events');
		$e = [];
		foreach ($events as $event) {
			$organisers = DB::find('event_organisers', 'eventId = :eid', [ 'eid' => $event->id ])
			foreach ($organisers as $organisers) {
				$o = [ 
					'id' => $organiser->id,
					'name' => $organiser->id,
					'email' => $organiser->email,
					'phone' => $organiser->phone,
					'twitter' => $organiser->twitter,
					'facebook' => $organiser->facebook,
					'linkednin' => $organiser->linkednin,
				];
			}
			$e[] = [
				'id' => $event->id,
				'title' => $event->title,
				'state' => $event->state,
				'city' => $event->city,
				'address' => $event->address,
				'organisers' => $o
			]
		}
	}
}