<?php

//set all @required values

/***
Product link example:

https://www.flipkart.com/poco-m2-pro-green-greener-64-gb/p/itm5de3b6eb57ab4?pid=MOBFT7MKFHTAPDYD&lid=LSTMOBFT7MKFHTAPDYDLRJC1B&param=7767&nnc=VF54TJL6YWGI_AD&pageUID=1598891274737

***/

$set_product_link = "https://www.flipkart.com/boat-aavante-bar-2000-160-w-bluetooth-soundbar/p/itmf7c8a39956d59?pid=ACCFE5HS2YP2ZZBE&lid=LSTACCFE5HS2YP2ZZBEDNDJY2&marketplace=FLIPKART&srno=b_1_16&otracker=sp_browse_announcement_search.flipkart.com&fm=organic&iid=442e0d91-08a1-4751-94c0-be078ce23d41.ACCFE5HS2YP2ZZBE.SEARCH&ppt=browse&ppn=browse&ssid=n0q8kb8hfk0000001599209314730";

$set_cookie = "-227196251%7CMCIDTS%7C18509%7CMCMID%7C89750904773738866082246403349491868971%7CMCAAMLH-1599568459%7C12%7CMCAAMB-1599742015%7CRKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y%7CMCOPTOUT-1599144415s%7CNONE%7CMCAID%7CNONE";

//change quantity as per you choice.

$quantity = "1";


/***

Do not change or
modify below values

***/

$parse = parse_url($set_product_link);

parse_str($parse['query'], $query);

$set_product_id = $query['pid'];

$cart_context = $query['lid'];


/***

Do not change
or modify these headers

***/

$headers = array('Content-type: application/json','X-User-Agent: Mozilla/5.0 (Linux; Android 10; MI567 Build/KQ1.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/830.90.3.96 Mobile Safari/537.36 FKUA/msite/0.0.1/msite/Mobile','Cookie: '.$set_cookie.'');

$headers2 = array('Content-type: application/x-www-form-urlencoded','X-User-Agent: Mozilla/5.0 (Linux; Android 10; MI567 Build/KQ1.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/830.90.3.96 Mobile Safari/537.36 FKUA/msite/0.0.1/msite/Mobile','Cookie: '.$set_cookie.'');


?>
