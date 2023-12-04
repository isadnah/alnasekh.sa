<?php

use App\Enums\Status;
use App\Models\Setting;
use Carbon\Carbon;

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new Setting();
        }

        if (is_array($key)) {
            return Setting::set($key[0], $key[1]);
        }

        $value = Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

if(!function_exists('ar_slug')) {

    function ar_slug(string $string, string $separator = '-') {
        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }

}

if(!function_exists('status_handler')) {

    function status_handler($date) : Status {

        if(empty($date) || is_null($date)) {
            return Status::DEFAULT;
        }

        $currentDate = now();
        $endDate = Carbon::parse($date);

        $daysDiff = $endDate->diffInDays($currentDate);

        if($endDate->isPast()) {
            return Status::FINISHED;
        }

        if($endDate->isFuture() && $daysDiff > 30) {
            return Status::VALID;
        }

        return Status::ALMOST_FINISHED;
    }

}
