<?php

    require_once "src/CoinCombinator.php";

    class CoinCombinatorTest extends PHPUnit_Framework_TestCase
    {

        function test_countCoins_penny()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 1;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 1,
                "nickels" => 0,
                "dimes"   => 0,
                "quarters"=> 0
            );
            $this->assertEquals($desired_array, $result);
        }

        function test_countCoins_twoPennies()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 2;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 2,
                "nickels" => 0,
                "dimes"   => 0,
                "quarters"=> 0
            );
            $this->assertEquals($desired_array, $result);

        }
    }
?>
