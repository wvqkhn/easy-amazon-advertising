<?php


class HelloTest extends \PHPUnit\Framework\TestCase
{
    public function testGetAccessToken()
    {
        $config = [
            "clientId"     => "amzn1.application-oa2-client.73f214ad337a443ba7352d20bca891b1",
            "clientSecret" => "3b758af8d13ee02355764e4e864f8d28ddbf4c76b7b36f233ce50bc0e94dcf35",
            "refreshToken" => "Atzr|IwEBIL5GyUh_H2fdRJnFOk7mmpluKnm7WWUW0kf0tBxAXFMG5VHyiZuIhrspq6hZRHzPM03RMX7v64KrhXaO9xCtylMUQPcN0LolQhH8PNff76Ve5pS6PO9jtNG9kW1K9YtV1WcJDN3KnGpHjk0dUBtbbrn5uh8EGDDVUR_gpqaHXqqdvZ7vuUXTNzstH-tybiAzspzIPxPf7Ans-uyqPNyNTIIM61vA66fvPkH3-c33iLCzrgRtg_jhzWrZuH4K6INBfR8CjKHcK5oNun4DRTiOnCinvUdbHQPwAeI9m581FzUk2Hp4g5KaXO60A6-4me5EMuGSagWfUvTs1MkB1DgPAs_Do3v0TKKN1L6Vab4YgDu6k-bb5pgor_H_LQ24kbfc2Jdyq9BJkSVAAIP5Hh4y3i1qAh18g94Qq_yLWQOxu8ySawTUSDWOkM3_AH5qFS_Yaegfpc96nZE6_eDnycnnheFnXj14-ghaNsROG4LO2RE4n4xnpj9vx9o5aOFVGhf148Cz_VZjiZCg2t_V0Mru7uYRkwz1OUOtBbExEwCZQO6es4ikwBEhtEmhbbe8w6zwUOlnJfYM067X5MvRGvsSKpEV",
//            "accessToken"  => "Atza|IwEBILAh19IzDZ96zZLHH65tRGED68cicc9Br4p52meMGyrxUCGcRllYeBMQ16J4JKR3_ef2NUJyXbWyBdcn9O2yn2qPamIIffDfuMHrJFjOgcN5aO5vmIFpmioSMOXSokzoGaPtMtnLNXttdWYjSf_5dPS39K3Q9NaixNbD-pk3874exfuvHDHFTTSekx4GWDVOLD-kTH-A7hltG3Fe4fvReBeWzSXNnfSb8XltmNy4k0oOyzUwhTRgaef4Krkq8cqDbZYLB63gox2FZb_YrwAeyJ_hwCrBZyb7ZfS5OaqsiJjGa-PJV9ZhQsXiwbHIaFL5CO1ddQwBwJURSPM_dHk_dsC-gwADiP43O6FKXqb0vT7QzGrXVvc5s45ePOoWI88VJTMfO9eLwSpzeOL7EAnQAu3IfBDue2FxkSp-JCgnY7RnnhVxQ1O_bpEAj5WTxG5KGB-jbueZcQtAUg9O0YtKXgq0KvgBkvG16ezkgtgaamlTldK28TElJYhRjqdZdwyhxP9_AbtYokTd0H4Txbhq7T0h3FYj4D5TgdVDOpDcK8-tAM4OrqLAFAk7r-xmyARO7nm9GNgWSmLDRenIsKGi2MF-hmkMz4ObNSGyfJnXE6m0gQ",
            "region"       => "NA",
        ];
//        $app    = \easyAmazonAdv\Factory::BaseService($config);
//        $result = $app->accessToken->RefreshToken();
//        var_dump($result);
        $this->assertArrayHasKey(1, [1, 2]);
    }
}