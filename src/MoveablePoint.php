<?php

class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;

    public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed(): array
    {
        return $data = [
            'xSpeed' => $this->xSpeed,
            'ySpeed' => $this->ySpeed
        ];
    }

    public function move(): MoveablePoint
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }
}