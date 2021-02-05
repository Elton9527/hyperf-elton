<?php
/**
 * Created by PhpStorm.
 * User: Elton
 * Date: 2021/2/5
 * Time: 11:11
 */

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;

/**
 * @AutoController()
 * Class RoosterController
 * @package App\Controller
 */
class RoosterController
{

    public function index(RequestInterface $request)
    {
        $id = $request->input('id', 1);
        return (string)$id;
    }


}
