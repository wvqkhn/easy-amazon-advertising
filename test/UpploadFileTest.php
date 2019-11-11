<?php

require_once '../vendor/autoload.php';

$config = [
    "clientId"     => "amzn1.application-oa2-client.73f214ad337a443ba7352d20bca891b1",
    "clientSecret" => "3b758af8d13ee02355764e4e864f8d28ddbf4c76b7b36f233ce50bc0e94dcf35",
    'accessToken'=>'Atza|IwEBIDOIe-PpaOl007RmsbwIilY2p1Zmpve7qR4VO5TQdqIJK63AIp5RS5Mw3FOsmnsFYuWGfgV62gaBrPjH4todA6xKedu-E3BWVY71udNXv2HOGxlVGkYmGqJZYmL7vSSjgKtw5rtkx3BIwRV3nxAk4vbsE454RpxOz9iiebyD9QYcgwapcH-LSa-Dd87HpUED7HWwNB_KQCB6_8UpsGjQPsALAHTWlYUKzVY_1RlXlA3L7rNeDAuac8avmisaBBTMEfqAtLeg5Ze6fbvOK8611MI0dVNdilA4s7KoOIxLAVpfX_UKCRdK8A5G3eCvUqJsI2nIDbfsj6MjdGqEHPFBbs2hj4NEdLhzlD-t55xFp0rS5R5h-wUPfgWWqdg10r_q3OfFBVAca7MlrlB_mPQ24cbhVlSRUFfIVszCOJ9e4JYsWgO5wllVvtyqiVl-7honMk_D2Tjl7bwlX-ESh61xHJGDi_JgPp9E9UXj6V4Q29lxO9zZgavD55fEDKzXRHdynCwbNTFO8BD38y2qrHHacF8aNkRDnYVY6hg2Z5i-JSmsKGj1V8h5AFgv0BvNiIsdzuZP5hCbWsoNjUoPA7XzJkDPdZRms0eF2O0TXSyGR9fNkg',
//    "refreshToken" => "Atzr|IwEBIL5GyUh_H2fdRJnFOk7mmpluKnm7WWUW0kf0tBxAXFMG5VHyiZuIhrspq6hZRHzPM03RMX7v64KrhXaO9xCtylMUQPcN0LolQhH8PNff76Ve5pS6PO9jtNG9kW1K9YtV1WcJDN3KnGpHjk0dUBtbbrn5uh8EGDDVUR_gpqaHXqqdvZ7vuUXTNzstH-tybiAzspzIPxPf7Ans-uyqPNyNTIIM61vA66fvPkH3-c33iLCzrgRtg_jhzWrZuH4K6INBfR8CjKHcK5oNun4DRTiOnCinvUdbHQPwAeI9m581FzUk2Hp4g5KaXO60A6-4me5EMuGSagWfUvTs1MkB1DgPAs_Do3v0TKKN1L6Vab4YgDu6k-bb5pgor_H_LQ24kbfc2Jdyq9BJkSVAAIP5Hh4y3i1qAh18g94Qq_yLWQOxu8ySawTUSDWOkM3_AH5qFS_Yaegfpc96nZE6_eDnycnnheFnXj14-ghaNsROG4LO2RE4n4xnpj9vx9o5aOFVGhf148Cz_VZjiZCg2t_V0Mru7uYRkwz1OUOtBbExEwCZQO6es4ikwBEhtEmhbbe8w6zwUOlnJfYM067X5MvRGvsSKpEV",
    "region"       => "NA",
];

$app    = \easyAmazonAdv\Factory::SponsoredProducts($config);

//$result = $app->common->RefreshToken();
//var_dump($result);
//die();

//var_dump($app->common->listProfiles());


$app->common->profileId = '3753569985456409';
//var_dump($app->common->profileId);


//var_dump($app->common->listPortfolios());


//var_dump($app->common->getPortfolios('149317040707859'));

var_dump($app->common->getPortfoliosExtended('149317040707859'));