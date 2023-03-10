<?php
namespace Delgont\Anume\Repository\Event;

use Delgont\Cms\Repository\Eloquent\BaseRepository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

//Models
use Delgont\Anume\Event;


//Repository Concerns
use Delgont\Cms\Repository\Eloquent\Concerns\Categorable;

class EventRepository extends BaseRepository
{
    use Categorable;

    public function __construct(Event $model){
        parent::__construct($model);
    }

}