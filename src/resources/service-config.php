<?php
return [
	/*
    |--------------------------------------------------------------------------
    | Service Name
    |--------------------------------------------------------------------------
    |
    | Name of the API service these description configs are for.
    |
    */
	"name" => "AppBoy",
	/*
    |--------------------------------------------------------------------------
    | Service Description
    |--------------------------------------------------------------------------
    |
    | Description of the API service.
    |
    */
	"description" => "An AppBoy API Wrapper built using Guzzle",
	/*
    |--------------------------------------------------------------------------
    | Service Configurations
    |--------------------------------------------------------------------------
    |
    | Configuration files of specfic service descriptions to load.
    |
    */
	"services" => [
		"track",
	],
	/*
    |--------------------------------------------------------------------------
    | Default models
    |--------------------------------------------------------------------------
    |
    | Default response models for typical usage of responses
    |
    */
	"models" => [
		"defaultJsonResponse" => [
			"type" => "object",
			"additionalProperties" => [
				"location" => "json",
			]
		]
	]
];
