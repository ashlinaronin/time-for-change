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

            // # pennies is remainder on division by 5
            $coins["pennies"] = $cents % 5;

            // # nickels is whole number quotient of 5
            // we must cast it as an int to avoid messy decimals
            // which are dealt with by pennies
            $coins["nickels"] = (int)($cents / 5);

            return $coins;
        }
    }
?>
