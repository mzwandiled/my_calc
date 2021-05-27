<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    use HasFactory;

    public function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
    public function diff($x, $y)
    {
        $z = $x - $y;
        return $z;
    }

    public function multiplication($x, $y)
    {
        $z = $x * $y;

        return $z;
    }
     public function div($x, $y)
    {
        $z = $x/$y;
        return $z;
    }


}
