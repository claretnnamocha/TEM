<?php
namespace AlphaAPI\Controllers;

use Zend\Diactoros\Response\JsonResponse;
use Siler\GraphQL;
use AlphaAPI\Domains\GraphQLDomain;
use AlphaAPI\Domains\Domain;

class Controller
{
	function signin()
	{
		$validate = check_params([ 'email', 'password' ]);
		if (!$validate['status']) {
			return $validate;
		}
		extract($validate['params'])
		return new JsonResponse(Domain::signin($email, $password));
	}

	function signup()
	{
		return new JsonResponse([ 'status' => true, 'message' => 'Hello World!' ]);
	}

	function signin()
	{
		return new JsonResponse([ 'status' => true, 'message' => 'Hello World!' ]);
	}

	function signin()
	{
		return new JsonResponse([ 'status' => true, 'message' => 'Hello World!' ]);
	}

	function graphql()
	{
		$schema = GraphQL\schema(GraphQLDomain::Types(), GraphQLDomain::Resolvers());
		// print_r(trim(GraphQLDomain::Types()));
		GraphQL\init($schema);
	}
}