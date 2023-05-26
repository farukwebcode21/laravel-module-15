<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // Recorded Video -2 Example 
    function DemoAction():string{
        return 'Hellow Middleware';

    }

    // Recorded Video- 3 Example
    function DemoAction2():string{
        return 'Hwllo Middleware 2';
    }
    
    function DemoAction3():string{
        return 'Hwllo Middleware 3';
    }
    
    function DemoAction4():string{
        return 'Hwllo Middleware 4';
    }
}
