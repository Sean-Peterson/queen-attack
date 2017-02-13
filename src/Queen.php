<?php
    class Queen
    {
        private $x_axis;
        private $y_axis;

        function __construct($x_axis, $y_axis) {
            $this->x_axis = $x_axis;
            $this->y_axis = $y_axis;
        }

        function canAttack($x_axis, $y_axis) {
            $can_attack = false;
            if ($x_axis == $this->x_axis)
            {
                $can_attack = true;
            } elseif ($y_axis == $this->y_axis) {
                $can_attack = true;
            } elseif (abs(($this->y_axis - $y_axis) / ($this->x_axis - $x_axis)) == 1)
            {
                $can_attack = true;
            }

            return $can_attack;
        }
    }

?>
