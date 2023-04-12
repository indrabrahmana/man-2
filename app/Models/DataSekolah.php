<?php

namespace App\Models;

use App\Models\Izin;
use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSekolah extends ModelAuthenticate
{
    use HasFactory;
    protected $table = 'datasekolah';
	protected $primaryKey = 'id';

	function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    
    function handleUploadFoto()
	{
        $this->handleDelete();
		if (request()->hasFile('foto')) {
			$foto = request()->file('foto');
			$destination = "images/datasekolah";
			$randomStr = Str::random(5);
			$filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/" . $url;
			$this->save();
		}
    }

	function handleDelete()
	{
		$foto = $this->foto;
		if($foto){
			$path = public_path($foto);
			if (file_exists($path)) {
				unlink($path);
			}
			return true;
		}
	}
}
