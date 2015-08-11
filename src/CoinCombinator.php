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

            $coins["dimes"] = (int)($cents / 10);
            $dimes_remainder = $cents % 10;

            // # nickels is whole number quotient of 5
            // we must cast it as an int to avoid messy decimals
            // which are dealt with by pennies
            $coins["nickels"] = (int)($dimes_remainder / 5);

            // # pennies is remainder on division by 5
            $coins["pennies"] = $dimes_remainder % 5;

            return $coins;
        }
    }
?>
