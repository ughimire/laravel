<?php namespace App\Pagination;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\HtmlString;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;


class Paginate extends Paginator
{

    /* public function __construct($items, $perPage, $currentPage, array $options)
     {
         parent::__construct($items, $perPage, $currentPage, $options);
     }

     public function render($view = null, $data = [])
     {


         if ($this->hasPages()) {

             return sprintf(
                 '<div class="pagi-custom"><div class="pull-left">%s %s</div> <div class="pull-right">%s %s</div></div>',
                 $this->getFirst(),
                 $this->getButtonPre(),
                 $this->getButtonNext(),
                 $this->getLast()
             );
         }

         return "";
     }

     public function getLast()
     {
         $url = $this->url($this->lastItem());

         $btnStatus = '';

         echo $this->lastItem() . '----' . $this->currentPage();
         if ($this->lastItem() == $this->currentPage()) {
             $btnStatus = 'disabled';
         }
         return $btn = "<a href='" . $this->fullUrl($url) . "'><button class='btn btn-success " . $btnStatus . "'>Last <i class='glyphicon glyphicon-chevron-right'></i></button></a>";
     }

     public function getFirst()
     {


         $url = $this->url(1);

         $btnStatus = '';

         if (1 == $this->currentPage()) {
             $btnStatus = 'disabled';
         }
         return $btn = "<a href='" . $this->fullUrl($url) . "'><button class='btn btn-success " . $btnStatus . "'><i class='glyphicon glyphicon-chevron-left'></i> First</button></a>";
     }

     public function getButtonPre()
     {
         $url = $this->previousPageUrl();
         $btnStatus = '';

         if (empty($url)) {
             $btnStatus = 'disabled';
         }
         return $btn = "<a href='" . $this->fullUrl($url) . "'><button class='btn btn-success " . $btnStatus . "'><i class='glyphicon glyphicon-chevron-left pagi-margin'></i><i class='glyphicon glyphicon-chevron-left'></i> Previous </button></a>";
     }

     public function getButtonNext()
     {
         $url = $this->nextPageUrl();
         $btnStatus = '';

         if (empty($url)) {
             $btnStatus = 'disabled';
         }
         return $btn = "<a href='" . $this->fullUrl($url) . "'><button class='btn btn-success " . $btnStatus . "'>Next <i class='glyphicon glyphicon-chevron-right pagi-margin'></i><i class='glyphicon glyphicon-chevron-right'></i></button></a>";
     }*/

    public static function fullUrl($url)
    {


        return Request::url() . str_replace('/', '', $url);

    }

}

?>