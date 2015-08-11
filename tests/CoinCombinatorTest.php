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

        function test_countCoins_oneNickel()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 5;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 0,
                "nickels" => 1,
                "dimes"   => 0,
                "quarters"=> 0
            );
            $this->assertEquals($desired_array, $result);
        }

        function test_countCoins_oneNickelOnePenny()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 6;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 1,
                "nickels" => 1,
                "dimes"   => 0,
                "quarters"=> 0
            );
            $this->assertEquals($desired_array, $result);
        }

        function test_countCoins_oneDime()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 10;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 0,
                "nickels" => 0,
                "dimes"   => 1,
                "quarters"=> 0
            );
            $this->assertEquals($desired_array, $result);
        }

        function test_countCoins_oneDimeOneNickel()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 15;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 0,
                "nickels" => 1,
                "dimes"   => 1,
                "quarters"=> 0
            );
            $this->assertEquals($desired_array, $result);
        }

        function test_countCoins_oneDimeOneNickelOnePenny()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 16;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 1,
                "nickels" => 1,
                "dimes"   => 1,
                "quarters"=> 0
            );
            $this->assertEquals($desired_array, $result);
        }

        function test_countCoins_oneQuarter()
        {
            //Arrange
            $test_CoinCombinator = new CoinCombinator;
            $cents = 25;

            //Act
            $result = $test_CoinCombinator->countCoins($cents);

            //Assert
            $desired_array = array(
                "pennies" => 0,
                "nickels" => 0,
                "dimes"   => 0,
                "quarters"=> 1
            );
            $this->assertEquals($desired_array, $result);
        }
    }
?>
