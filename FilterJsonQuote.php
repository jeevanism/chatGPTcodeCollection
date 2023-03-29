<?php

// Read in the JSON file
$quotes_json = file_get_contents('quotes.json');
$quotes = json_decode($quotes_json, true);

// Filter the quotes with "Buddha" as the author
$buddha_quotes = array_filter($quotes, function($quote) {
  return $quote['author'] === 'Buddha';
});

// Write the filtered quotes to a new JSON file
$buddha_quotes_json = json_encode($buddha_quotes);
file_put_contents('buddha_quotes.json', $buddha_quotes_json);

?>
