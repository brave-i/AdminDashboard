<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Application;
use App\User;


class ApplicationController extends Controller
{
    public $status = "created";

    public function __construct(Request $request){
        $this->status = $request->input("status");
    }

    public function index(Request $request)
    {
        // abort_unless(\Gate::allows('permission_access'), 403);
        //dump($request->input("status"));
        //return
        //$applications = Application::where("status", $request->input("status"))->get();
        $applications = Application::where("status", $request->input("status"))->with('users')->get();

        return view('admin.applications.index', [
            'applications' => $applications, 
            'status' => $this->status
        ]);
    }

    public function create(Request $request)
    {
        // abort_unless(\Gate::allows('permission_create'), 403);
        return view('admin.applications.create', [
            'status' => $this->status
        ]);
    }

    public function store(Request $request)
    {
        // abort_unless(\Gate::allows('permission_create'), 403);
        $application = Application::create($request->all());
        $application->users()->attach($request->user());

        return redirect()->route('admin.applications.index', ['status' => $this->status]);
    }

    public function edit(Request $request, Application $application)
    {
        // abort_unless(\Gate::allows('permission_edit'), 403);
        return view('admin.applications.edit', [
            'application' => $application,
            'status' => $this->status
        ]);
    }

    public function userviewedit($id, $name, Request $request)
    {
        $user = User::where("id", $id)->get()->first();
    
        return view('admin.applications.userviewedit', [
            'user' => $user,
            'status' => $this->status
        ]);
    }



    public function appviewedit($id, Request $request)
    {

        $application = Application::where("id", $id)->get()->first();
        //dump($application);
    
        return view('admin.applications.appviewedit', [
            'application' => $application,
            'status' => $this->status
        ]);
    }

    public function update(Request $request, Application $application)
    {
        // abort_unless(\Gate::allows('permission_edit'), 403);
        $application->update($request->all());
        $application->users()->attach($request->user());
        return redirect()->route('admin.applications.index', ['status' => $this->status]);
    }

    public function userviewupdate(Request $request){

        $user = User::find($request->input("user_id"));
        $user->update($request->all());
        return redirect()->route('admin.applications.index', ['status' => $this->status]);

    }

    public function appviewupdate(Request $request){

        //dump($request->input("app_id"));
        //return;

        $applican = Application::find($request->input("app_id"));
        $applican->update($request->all());
        return redirect()->route('admin.applications.index', ['status' => $this->status]);

    }

    public function show(Request $request, Application $application)
    {
        // abort_unless(\Gate::allows('permission_show'), 403);
        return view('admin.applications.show', [
            'application' => $application,
            'status' => $this->status
        ]);
    }

    public function destroy(Request $request, Application $application)
    {
        // abort_unless(\Gate::allows('permission_delete'), 403);
        $application->delete();
        return back();
    }

    public function massDestroy(Request $request)
    {
        Application::whereIn('id', request('ids'))->delete();
        return response(null, 204);
    }
}
