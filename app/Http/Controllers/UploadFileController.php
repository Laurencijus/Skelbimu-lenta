<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index()
    {
        return view('uploadfile');
    }
    public function showUploadFile(Request $request)
    {
        $file = $request->file('image');

        // отображаем имя файла
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        //отображаем расширение файла
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';

        //отображаем фактический путь к файлу
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';

        //отображаем размер файла
        echo 'File Size: ' . $file->getSize();
        echo '<br>';

        //отображаем Mime-тип файла
        echo 'File Mime Type: ' . $file->getMimeType();

        //перемещаем загруженный файл
        $destinationPath = 'uploads';
        $result = $file->move($destinationPath, $file->getClientOriginalName());
        var_dump($result);
    }
}
