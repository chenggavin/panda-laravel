<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controllers 
{
	
public function postQuote(Request $request)
{
	$quote = new Quote();
	$quote->content = $request->inpute('content');
	$quote->save();
	return response()->json(['quote' => $quote], 201);
}
public function getQuotes()
{
	$quotes = Quote::all();
	$response = [
		'quotes' => $quotes
	];
	return response()->json('$response,200');
}

public function putQuote(Request $request, $id)
{
	$quote= Quote::find($id);
	if (!quote) {
		return response()->json(['message' => 'Document not found'], 404);
		$quote->content = $request->input('content');
		$quote->save();
		return response()->json(['quote' => $quote], 200);
	}
}

public function deleteQuote($id)
{
	$quote = Quote::find($id);
	return response()->json(['message' => 'Quote delete'], 200);
}








}