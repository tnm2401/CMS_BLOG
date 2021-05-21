<?php

namespace App\Http\Controllers\BE_Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\GroupPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class GroupPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gp = GroupPost::all();
        return view('BE.page.group_post.show', compact('gp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BE.page.group_post.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gp = new GroupPost([
            'group_name' => $request->get('group_name'),
            'group_serial' => $request->get('group_serial'),
            'group_slug' => \Str::slug($request->group_name),
            'group_special' => $request->get('group_special'),
            'group_display' => $request->get('group_display')
        ]);
        toast('Your Post as been submited!','success','top-right');
        $gp->save();
        return redirect ()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = GroupPost::find($id);
        return view('BE.page.group_post.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gp = GroupPost::find($id);
        $gp->group_slug =\Str::slug($request->group_name);
        $gp->group_name = $request->get('group_name');
        $gp->group_special = $request->get('group_special');
        $gp->group_display = $request->get('group_display');

        $gp->save();
        return redirect()->route('group.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gp = GroupPost::find($id);
        if($gp->check_type()->get()->toArray()==null){
            $gp->delete();
            return redirect()->route('group.show');
        }
        else{
            return redirect()->back();
        }
        
    }
}
