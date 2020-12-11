<?php

namespace App\Widgets;

use App\Calon;
use Arrilot\Widgets\AbstractWidget;

class RecentNews extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'count' => 5
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $calon = Calon::where('status', 'Kandidat')->get();
        return view('home', [
            'config' => $this->config,
            'calon' => $calon
        ]);
    }
}
