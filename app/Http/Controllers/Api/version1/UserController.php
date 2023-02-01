<?php

namespace App\Http\Controllers\Api\Version1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Announcement;
use App\Services\Version1\UserQuery;
use App\Http\Resources\Version1\UserResource;
use App\http\Resources\Version1\UserCollection;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        // $filter = new UserQuery();
        // $queryItems = $filter->transform($request); //[['column','operator','value']]

        // if(count($queryItems) == 0){
        //     return new UserCollection(User::paginate());
        // } else {
        //     $users = User::where($queryItems)->paginate();
        //     return new UserCollection($users->appends($request->query()));
        // }
        $data = DB::table('users')
                ->select('id','name','email')
                ->get();
        
        return view('dashboard.dashboard-user', ['users' => $data] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create(StoreUserRequest $request)
    //{
        //
        
    //}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operation-for-database.add-users');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
            $request->validate([
                $name = 'required',
                $email = 'required',
                $password = 'required',
                $role = 'required'
            ]);

            $user = new User();

            $user->name = $request->$name;
            $user->email = $request->$email;
            $user->password = $request->$password;
            $user->role = $request->$role;

            $user->save();

            return redirect()->route('users.index')
            ->with('success','new user added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    
    // public function update(UpdateUserRequest $request, User $user)
    //{
        //
        
    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->email == 'admin@example.com'){
            return redirect()->route('users.index')
            ->with('danger', 'Deleting the admin is not allowed!');
        }else{
            $deleted = DB::table('announcements')->where('user_id', '=', $user->id)->delete();
            $user->delete();
            return redirect()->route('users.index')
            ->with('success', 'user deleted successfully!');
        }
        
    }
}
