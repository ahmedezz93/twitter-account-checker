<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Atymic\Twitter\ApiV2\TwitterApiClient;

class AuthController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        // if (!empty($user->username)) {
        //      $client = new TwitterApiClient('ySTHWjCHDo1Y9ndnLSlcN5nGy', 'LrlMY3WmwD6zNZa40wshvhCpU0MJJtynRL5FUW0XMYRD4eMfWn');

        //     // Get Twitter profile information
        //     $twitterUser = $client->getUserByUsername($user->username);

        //     // Get user's latest tweet
        //     $latestTweet = $client->getTweetsByUser($user->username, 1);

        //     // Use $twitterUser and $latestTweet as needed
        //     return view('home', [
        //         'latestTweet' => isset($latestTweet) ? $latestTweet[0]->text : null,
        //         'twitterUsername' => $twitterUser,
        //         'user' => $user
        //     ]);
        // }


       return view('home',compact('user'));

    }
    public function login()
    {

        return view('login');
    }

    public function register()
    {

        return view('register');
    }

    public function registerUser(RegisterUserRequest $request)
    {
        try {

            $request->validated();

            $data = $request->except(['file']);
            $data['password'] = Hash::make($request->password);

            if ($request->hasFile('file')) {

                $file = $request->file('file');
                $file_name = $file->getClientOriginalName();
                $path = $file->storeAs($request->username, $file_name, 'upload_files');
                $data['profile_image'] = $path;
            }
            User::create($data);

            return redirect()->route('login')->with('success', 'Successfully registeration');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function loginUser(Request $request)
    {
        if (auth()->guard('web')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('home');
        } else {
            return back()->with('errors', 'Username or password incorrect');
        }
    }
}
