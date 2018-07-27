<?php

namespace TCG\Voyager\Widgets;

use App\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class VideosDimmer extends BaseDimmer
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
        $count = Video::all()->count();
        $string = $count == 1 ? 'Видео' : 'Видео';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "У Вас {$count} {$string}.",
            'button' => [
                'text' => 'Посмотреть все Видео',
                'link' => route('voyager.videos.index'),
            ],
            'image' => asset('img/voyager/10-youtube-blogger-videos.jpg'),
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