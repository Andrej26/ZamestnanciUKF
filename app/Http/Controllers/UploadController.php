<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{

    public function upload($idcko)
    {

        if(Input::hasFile('file'))
        {
            $file = Input::file('file');
            $rozdelenie = explode(".", $file->getClientOriginalName());
            $pripona = end($rozdelenie);

            /*
            if($pripona != "jpg" || $pripona != "png")
            {
                echo  "zla pripona suboru !";
                return;
            }*/

            // ak existuje jpg subor s danym menom
            if (file_exists('picture/'.$idcko.".jpg"))
            {
                // vymaze staru foto a uploadne novu
                chmod('picture/'.$idcko.".jpg", 0644);
                unlink('picture/'.$idcko.".jpg");

                $file->move('picture', $idcko.".".$pripona);
            }
            else if(file_exists('picture/'.$idcko.".png"))
            {
                chmod('picture/'.$idcko.".png", 0644);
                unlink('picture/'.$idcko.".png");

                $file->move('picture', $idcko.".".$pripona);
            }
            else
            {
                $file->move('picture', $idcko.".".$pripona);
            }

            echo 'sucesfull updated';
        }

    }

    public static function VratObrazokZamestnanca($idcko)
    {
        if (file_exists('picture/'.$idcko.".jpg"))
        {
            return "picture/".$idcko.".jpg";
        }
        else if (file_exists('picture/'.$idcko.".png"))
        {
            return "picture/".$idcko.".png";
        }
        else
        {
            return "dummy/person-1@2x.jpg";
        }
    }




}