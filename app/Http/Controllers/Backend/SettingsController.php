<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        return view('backend.main_settings');
    }

    public function store(Request $request)
    {

        $banner_section = self::enabled_state($request->banner_section);
        $homepage_partner_logo_section = self::enabled_state($request->homepage_partner_logo_section);
        $homepage_block_1 = self::enabled_state($request->homepage_block_1);

        Settings::set_settings('banner_section', $banner_section);
        Settings::set_settings('homepage_block_1', $homepage_block_1);
        Settings::set_settings('homepage_partner_logo_section', $homepage_partner_logo_section);




        Settings::set_settings('homepage_banner_head',$request->homepage_banner_head);
        Settings::set_settings('homepage_banner_text',$request->homepage_banner_text);


        Settings::set_settings('homepage_partner_logo_section_title', $request->homepage_partner_logo_section_title);

      return back();
    }


    public static function enabled_state ($string)
    {
        if ($string == null)
        {
            $output = 0;
        }else if ($string == 'on' ){
            $output = 1;
        }else
        {
            $output = 0;
        }

        return $output;
    }
}
