<?php>
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $query = array(
    "api-key" => "7b054794b0624c46a488772aaeb687e0",
    "q" => "baseball",
    "sort" => "newest"
  );
  curl_setopt($curl, CURLOPT_URL,
    "https://api.nytimes.com/svc/search/v2/articlesearch.json" . "?" . http_build_query($query)
  );
  $result = json_decode(curl_exec($curl));
  echo json_encode($result);
<?>
