<?php

namespace App\Models\Sibankum;

use Illuminate\Database\Eloquent\Model;

class CourtType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'court_type';
    /**
	* Get the instansi that owns the server.
	*/
	public function case_type()
	{
		return $this->belongsTo('App\Models\Sibankum\CaseType');
	}
}
