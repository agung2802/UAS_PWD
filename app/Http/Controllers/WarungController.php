<?php

public function detai ($id){
	$warung = Warung::find($id);

	if (empty($warung)) {
		return [
			'status' =>'error',
			'message' => 'Data tidak ditemukan',
			'result' => null
		];
	}

	return [
		'status' => 'success',
		'result' => $warung
	];
	
}

