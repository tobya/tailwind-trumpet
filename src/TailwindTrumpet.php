<?php

namespace Tobya\TailwindTrumpet;

use Illuminate\Support\Facades\Storage;

class TailwindTrumpet
{
    const cssRetrievalMethod = 'trumpetTailwindClasses';

    protected $withClasses = [

    ];

    public function __construct()
    {
        $this->boot();
    }

    public function boot()
    {
        $this->withClasses = config('trumpet.register');
    }

    public function register($TailwindClass)
    {
        $this->withClasses[] = $TailwindClass;
    }

    public function generate()
    {
        $tailwindClasses = [];

        foreach ($this->withClasses as $class) {
            $obj = new $class;

            if (method_exists($obj, static::cssRetrievalMethod)) {

                $GeneratedClasses = $obj->{static::cssRetrievalMethod}();
                if (is_array($GeneratedClasses)) {
                    $tailwindClasses = collect($tailwindClasses)->merge(collect($GeneratedClasses)->values());
                } elseif (is_null($GeneratedClasses)) {
                    // do nothing.
                } else {
                    $tailwindClasses[] = $GeneratedClasses;
                }
                ray($tailwindClasses);
            } else {
                throw new \BadFunctionCallException('method '.static::cssRetrievalMethod.'() not found on '.$class);
            }
        }
        $filestore = Storage::build([
            'driver' => 'local',
            'root' => base_path('/resources/views/tailwind-trumpet'),
            'throw' => false,

        ]);

        $filestore->put('/tailwindclasses.blade.php', collect($tailwindClasses)->map(fn ($tw) => "<span class='$tw'>$tw</span>")->join("\n"));
    }

    /**
     * A test function
     * @return string
     */
    public function trumpetTailwindClasses()
    {
        return 'bg-sky-200';
    }
}
