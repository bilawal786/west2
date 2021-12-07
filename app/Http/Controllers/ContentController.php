<?php

namespace App\Http\Controllers;

use App\Content;
use App\Gallery;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function settings(){
        $gs = Content::find(1);
        return view('admin.settings.index', compact('gs'));
    }
    public function settingStore(Request $request){
        $gs = Content::find(1);
        $gs->sitename = $request->sitename;
        $gs->email = $request->email;
        $gs->phone = $request->phone;
        $gs->address = $request->address;
        $gs->time = $request->time;
        $gs->facebook = $request->facebook;
        $gs->instagram = $request->instagram;
        $gs->footer_text = $request->footer_text;
        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'allimages/' . $name;
        }
        if ($request->hasfile('footer_logo')) {
            $image1 = $request->file('footer_logo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->footer_logo = 'allimages/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function sliderStore(Request $request){
        $gs = Content::find(1);
        if ($request->hasfile('simage1')) {
            $image1 = $request->file('simage1');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->simage1 = 'allimages/' . $name;
        }
        if ($request->hasfile('simage2')) {
            $image2 = $request->file('simage2');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $gs->simage2 = 'allimages/' . $name2;
        }
        if ($request->hasfile('simage3')) {
            $image3 = $request->file('simage3');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $gs->simage3 = 'allimages/' . $name3;
        }
        $gs->stext1 = $request->stext1;
        $gs->stext2 = $request->stext2;
        $gs->stext3 = $request->stext3;
        $gs->video = $request->video;
        $gs->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function slider(){
        $gs = Content::find(1);
        return view('admin.settings.slider', compact('gs'));
    }
    public function gallery(){
        $gallery = Gallery::find(1);
        return view('admin.settings.gallery', compact('gallery'));
    }
    public function galleryStore(Request $request){
        $gallery = Gallery::find(1);
        if ($request->hasfile('image1')) {
            $image1 = $request->file('image1');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gallery->image1 = 'allimages/' . $name;
        }
        if ($request->hasfile('image2')) {
            $image2 = $request->file('image2');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $gallery->image2 = 'allimages/' . $name2;
        }
        if ($request->hasfile('image3')) {
            $image3 = $request->file('image3');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $gallery->image3 = 'allimages/' . $name3;
        }
        if ($request->hasfile('image4')) {
            $image4 = $request->file('image4');
            $name4 = time() . 'allimages' . '.' . $image4->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image4->move($destinationPath, $name4);
            $gallery->image4 = 'allimages/' . $name4;
        }
        if ($request->hasfile('image5')) {
            $image5 = $request->file('image5');
            $name5 = time() . 'allimages' . '.' . $image5->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image5->move($destinationPath, $name5);
            $gallery->image5 = 'allimages/' . $name5;
        }
        if ($request->hasfile('image6')) {
            $image6 = $request->file('image6');
            $name6 = time() . 'allimages' . '.' . $image6->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image6->move($destinationPath, $name6);
            $gallery->image6 = 'allimages/' . $name6;
        }
        if ($request->hasfile('image7')) {
            $image7 = $request->file('image7');
            $name7 = time() . 'allimages' . '.' . $image7->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image7->move($destinationPath, $name7);
            $gallery->image7 = 'allimages/' . $name7;
        }
        if ($request->hasfile('image8')) {
            $image8 = $request->file('image8');
            $name8 = time() . 'allimages' . '.' . $image8->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image8->move($destinationPath, $name8);
            $gallery->image8 = 'allimages/' . $name8;
        }
        $gallery->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
