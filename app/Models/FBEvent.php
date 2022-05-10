<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;

class FBEvent extends AbstractHydratableModel
{
    use HasFactory;

    public $name;

    public $description;

    public $cover;

    public $place;

    public $createdAt;

    public $date;

    public function __construct(\StdClass $data)
    {
        $this->description = $data->description;
        $this->name        = $data->name;
        $this->createdAt   = date('d/m/Y H:i:s', strtotime($data->created_time));
        $this->date        = date('d/m/Y H:i',   strtotime($data->start_time));
        $this->place       = $data->place->name;
        $this->cover       = $data->cover->source;
    }
}
