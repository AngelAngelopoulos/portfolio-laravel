<?php

namespace App\Providers\App\Listeners;

use App\Providers\App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class OptimizeProjectImage implements ShouldQueue
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
     * @param  ProjectSaved  $event
     * @return void
     */
    public function handle(ProjectSaved $event)
    {
        $image = Image::make(Storage::get($event->project->image))
            ->widen('800')->encode();

        Storage::put($event->project->image, (string) $image);
    }
}
