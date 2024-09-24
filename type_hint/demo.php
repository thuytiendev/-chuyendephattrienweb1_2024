<?php

declare(strict_types=1);

require_once "a.php";
require_once "b.php";
require_once "c.php";
require_once "i.php";

class Demo{
    //lop a
    public function typeXReturnA(): A
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }

    public function typeXReturnA1(): A
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }

    public function typeXReturnA2(): A
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }

    public function typeXReturnA3(): A
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeXReturnA4(): A
    {
    echo __FUNCTION__ . "<br>";
    return null;
    }

    //lop b
    public function typeXReturnB(): B
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }

    public function typeXReturnB1(): B
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }

    public function typeXReturnB2(): B
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }

    public function typeXReturnB3(): B
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeXReturnB4(): B
    {
    echo __FUNCTION__ . "<br>";
    return null;
    }

    //LOP C
    public function typeXReturnC(): C
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }

    public function typeXReturnC1(): C
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }

    public function typeXReturnC2(): C
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }

    public function typeXReturnC3(): C
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeXReturnC4(): C
    {
    echo __FUNCTION__ . "<br>";
    return null;
    }
    //LOP I
    public function typeXReturnI(): I
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }

    public function typeXReturnI1(): I
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }

    public function typeXReturnI2(): I
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }

    public function typeXReturnI3(): I
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeXReturnI4(): I
    {
    echo __FUNCTION__ . "<br>";
    return null;
    }
    // NULL

    public function typeXReturnAA():null
    {
    echo __FUNCTION__ . "<br>";
    return new A();
    }
    public function typeXReturnBB():null
    {
    echo __FUNCTION__ . "<br>";
    return new B();
    }
    public function typeXReturnCC():null
    {
    echo __FUNCTION__ . "<br>";
    return new C();
    }
    public function typeXReturnII():null
    {
    echo __FUNCTION__ . "<br>";
    return new I();
    }
    public function typeXReturn():null
    {
    echo __FUNCTION__ . "<br>";
    return null;
    }
}
$demo = new Demo();
$demo ->typeXReturnA();

 
