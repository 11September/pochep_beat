<?php

namespace TCG\Voyager\Widgets;

use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class PhotosDimmer extends BaseDimmer
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
        $count = Photo::all()->count();
        $string = $count == 1 ? 'Фото' : 'Фото';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "У Вас {$count} {$string}.",
            'button' => [
                'text' => 'Посмотреть все Фото',
                'link' => route('voyager.photos.index'),
            ],
            'image' => asset('img/voyager/photos.jpg'),
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