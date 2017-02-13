<?php
    require_once 'src/Queen.php';

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_xaxis() {
            //arrange
            $test_queen = new Queen(4, 4);
            $input_x_axis = 4;
            $input_y_axis = 0;

            //act
            $result = $test_queen->canAttack($input_x_axis, $input_y_axis);

            //assert
            $this->assertEquals(true, $result);

        }

        function test_yaxis() {
            //arrange
            $test_queen = new Queen(2, 4);
            $input_x_axis = 1;
            $input_y_axis = 4;

            //act
            $result = $test_queen->canAttack($input_x_axis, $input_y_axis);

            //assert
            $this->assertEquals(true, $result);

        }

        function test_bothAxis() {
            //arrange
            $test_queen = new Queen(2, 4);
            $input_x_axis = 2;
            $input_y_axis = 4;

            //act
            $result = $test_queen->canAttack($input_x_axis, $input_y_axis);

            //assert
            $this->assertEquals(true, $result);

        }

        function test_diagonal() {
            //arrange
            $test_queen = new Queen(6, 7);
            $input_x_axis = 2;
            $input_y_axis = 3;

            //act
            $result = $test_queen->canAttack($input_x_axis, $input_y_axis);

            //assert
            $this->assertEquals(true, $result);

        }

    }

?>
