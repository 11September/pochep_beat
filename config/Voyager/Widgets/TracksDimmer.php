<?php

namespace TCG\Voyager\Widgets;

use App\Track;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class TracksDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Track::all()->count();
        $string = $count == 1 ? 'Треки' : 'Треки';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "У Вас {$count} {$string}.",
            'button' => [
                'text' => 'Посмотреть все Треки',
                'link' => route('voyager.tracks.index'),
            ],
            'image' => asset('img/voyager/music-quotes-sayings.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
//        return Auth::user()->can('browse', Voyager::model('User'));
    }
}