<?php

namespace App\Blade\Directives;

use App\Models\Setting;

class SettingDirective
{
    public function handle($key)
    {
        $setting = Setting::where('key', $key)->first();

        if ($setting) {
            if ($key === 'logo') {
                return '<img src="' . asset('storage/' . $setting->value) . '" alt="Website Logo">';
            }
            return $setting->value;
        }


        return "Setting dengan kunci '$key' tidak ditemukan";
    }
}
