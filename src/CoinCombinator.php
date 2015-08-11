<?php

    class CoinCombinator
    {
        function countCoins($cents)
        {
            $coins = array(
                "pennies" => 0,
                "nickels" => 0,
                "dimes" => 0,
                "quarters" => 0
            );
            $coins["pennies"] = $cents % 5;
            return $coins;
        }
    }
?>
