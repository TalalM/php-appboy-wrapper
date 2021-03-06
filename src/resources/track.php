<?php
return [
	/*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */
	"operations" => [
		/**
         *    send() method
         *
         *    reference: https://www.appboy.com/documentation/REST_API/#user-data
         */
		"track" => [
			"httpMethod" => "POST",
			"uri" => "/users/track",
			"summary" => "Track data for a user",
			"responseModel" => "defaultJsonResponse",
			"parameters" => [
				"attributes" => [
					"type" => "array",
					"location" => "json",
					"description" => "Array of user attributes",
					"required" => false,
				],
				"events" => [
					"type" => "array",
					"location" => "json",
					"description" => "Array of user events",
					"required" => false,
				],
				"purchases" => [
					"type" => "array",
					"location" => "json",
					"description" => "Array of user purchases",
					"required" => false,
				],
			]
		],
	],
	/*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */
	"models" => [
	],
];
