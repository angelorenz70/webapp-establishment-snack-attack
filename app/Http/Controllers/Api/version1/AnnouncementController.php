<?php

namespace App\Http\Controllers\Api\Version1;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Http\Resources\Version1\AnnouncementCollection;
use App\Http\Resources\Version1\AnnouncementResource;
use App\Services\Version1\AnnouncementQuery;
use App\Http\Resources\Version1\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $filter = new AnnouncementQuery();
        // $queryItems = $filter->transform($request); //[['column','operator','value']]

        // if(count($queryItems) == 0){
        //     return new AnnouncementCollection(Announcement::paginate());
        // } else {
        //     $announcements = Announcement::where($queryItems)->paginate();
        //     return new AnnouncementCollection($announcements->appends($request->query()));
        // }

        $data = DB::table('announcements')
                ->select('id','header', 'sub_header', 'image', 'description', 'user_id')
                ->get();

        return view('dashboard.dashboard-announcement', ['announcements' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operation-for-database.add-announcements');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnouncementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'header' => 'required',
            'sub_header' => 'required',
            'image' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);
    
        $announcement = new Announcement;

        $announcement->header = $request->header;
        $announcement->sub_header = $request->sub_header;
        $announcement->image = $request->image;
        $announcement->description = $request->description;
        $announcement->user_id = $request->user_id;
        $announcement->save();

        return redirect()->route('announcements.index')
        ->with('success', 'announcement added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return new AnnouncementResource($announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('operation-for-database.edit-announcements');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnouncementRequest  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect()->route('announcements.index')
        ->with('success', 'announcement deleted successfully!');
    }
}
