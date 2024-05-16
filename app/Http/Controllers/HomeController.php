<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;

class HomeController extends Controller
{
    public function createUser()
    {
        $email="js@gmail.com";

        $user=User::where('email', $email)->first();

        if($user)
        {
            $user -> name = "Jose";
        }
        else
        {
            $user = new User();
            $user -> name = "Jose";
            $user -> email = "js@gmail.com";
            $user -> password = "123";
            $user -> save();
        }

        echo "ok";

        $client = new Client();
        $client -> save();

/*         $user1 = new User();
        $user1 -> name = "Jose";
        $user1 -> email = "js@gmail.com";
        $user1 -> password = "123";
        $user1 -> save();

        $user2 = new User();
        $user2 -> name = "Maria";
        $user2 -> email = "maria@gmail.com";
        $user2 -> password = "456";
        $user2 -> save() */;
    }

}
