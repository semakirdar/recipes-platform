<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;


class MediaWaterMark
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {

        $path = $event->media->getPath();

        $img = Image::make($path);
        $watermark = Image::make(public_path('images/watermark.png'));
        $img->insert($watermark, 'bottom-right', 50, 50);

        $img->save();

    }
}
