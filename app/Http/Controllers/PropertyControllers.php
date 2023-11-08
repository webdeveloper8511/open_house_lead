<?php

namespace App\Http\Controllers;

use App\Models\Perporty;
use App\Models\PropertyImage;
use App\Models\PropertyOptions;
use App\Models\PropertySmartphone;
use Illuminate\Http\Request;

class PropertyControllers extends Controller
{
    public function property()
    {
        return view('dashboard.property.property');
    }

    public function propertyAdd(Request $request)
    {
        // $request->validate([
        //     'flyer_riders_first_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        
        $property = New Perporty();
        $property->street = $request->street;
        $property->city = $request->city;
        $property->state = $request->state;
        $property->zip_code = $request->zip_code;
        $property->open_house = $request->open_house;
        $property->datatime_anything = $request->datatime_anything;
        $property->before_price = $request->before_price;
        $property->price = $request->price;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->sq_footage = $request->sq_footage;
        $property->property_sites_desc = $request->property_sites_desc;
        $property->mini_property_site = $request->mini_property_site;
        $property->save();

        $propertyOptions = new PropertyOptions();
        $propertyOptions->property_id = $property->id;
        $propertyOptions->switch_one1 = $request->switch_one1;
        $propertyOptions->switch_three = $request->switch_three;
        $propertyOptions->welcome_email_sub = $request->welcome_email_sub;
        $propertyOptions->headline_email = $request->headline_email;
        $propertyOptions->custom_text_color = $request->custom_text_color;
        $propertyOptions->headline_color = $request->headline_color;
        $propertyOptions->headline_custom_color = $request->headline_custom_color;
        $propertyOptions->short_thank_you_message = $request->short_thank_you_message;
        $property->save();

        if($request->hasFile('file_file_1')){
            $file_file_1 = time().'.'.$request->file_file_1->extension();  
            $request->file_file_1->move(public_path('images'), $file_file_1);
        }else{
            $file_file_1 = '';
        }

        if($request->hasFile('file_file_2')){
            $file_file_2 = time().'.'.$request->file_file_2->extension();  
            $request->file_file_2->move(public_path('images'), $file_file_2);
        }else{
            $file_file_2 = '';
        }

        if($request->hasFile('file_file_3')){
            $file_file_3 = time().'.'.$request->file_file_3->extension();  
            $request->file_file_3->move(public_path('images'), $file_file_3);
        }else{
            $file_file_3 = '';
        }

        $PropertySmartphone = new PropertySmartphone();
        $PropertySmartphone->property_id = $property->id;
        $PropertySmartphone->smartphone_switch_one = $request->smartphone_switch_one;
        $PropertySmartphone->smartphone_thank_you_message = $request->smartphone_thank_you_message;
        $PropertySmartphone->file_desc_1 = $request->file_desc_1;
        $PropertySmartphone->file_link_1 = $request->file_link_1;
        $PropertySmartphone->file_file_1 = $file_file_1;
        $PropertySmartphone->file_desc_2 = $request->file_desc_2;
        $PropertySmartphone->file_link_2 = $request->file_link_2;
        $PropertySmartphone->file_file_2 = $file_file_2;
        $PropertySmartphone->file_desc_3 = $request->file_desc_3;
        $PropertySmartphone->file_link_3 = $request->file_link_3;
        $PropertySmartphone->file_file_3 = $file_file_3;
        $PropertySmartphone->save();

        if($request->hasFile('flyer_riders_first_image')){
            $imageName1 = time().'.'.$request->flyer_riders_first_image->extension();  
            $request->flyer_riders_first_image->move(public_path('images'), $imageName1);
        }

        if($request->hasFile('flyer_riders_second_image')){
            $imageName2 = time().'.'.$request->flyer_riders_second_image->extension();  
            $request->flyer_riders_second_image->move(public_path('images'), $imageName2);
        }

        if($request->hasFile('flyer_riders_three_image')){
            $imageName3 = time().'.'.$request->flyer_riders_three_image->extension();  
            $request->flyer_riders_three_image->move(public_path('images'), $imageName3);
        }

        if($request->hasFile('extra_image_mini_property_sites')){
            $imageName4 = time().'.'.$request->extra_image_mini_property_sites->extension();  
            $request->extra_image_mini_property_sites->move(public_path('images'), $imageName4);
        }

        if($request->hasFile('attachment_image')){
            $imageName5 = time().'.'.$request->attachment_image->extension();  
            $request->attachment_image->move(public_path('images'), $imageName5);
        }

        if($request->hasFile('add_change_email_image')){
            $imageName6 = time().'.'.$request->add_change_email_image->extension();  
            $request->add_change_email_image->move(public_path('images'), $imageName6);
        }

        $PropertyImage = new PropertyImage();
        $PropertyImage->property_id = $property->id;
        $PropertyImage->flyer_riders_first_image = $imageName1;
        $PropertyImage->flyer_riders_second_image = $imageName2;
        $PropertyImage->flyer_riders_three_image = $imageName3;
        $PropertyImage->extra_image_mini_property_sites = $imageName4;
        $PropertyImage->add_change_email_image = $imageName5;
        $PropertyImage->attachment_image = $imageName6;
        $PropertyImage->save();

        return redirect("property")->with('success','Property Add Successfully');

    }
}

