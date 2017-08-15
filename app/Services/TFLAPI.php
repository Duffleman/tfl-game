<?php

namespace App\Services;

use Duffleman\JSONClient\JSONClient;

class TFLAPI {

	public function __construct($appId, $appKey)
	{
		$this->appId = $appId;
        $this->appKey = $appKey;
        $this->client = new JSONClient('https://api.tfl.gov.uk/');
	}

	public function listLines()
    {
        $lines = [];

        $resultSet = $this->client->mode(1)->get('line/mode/tube,overground,dlr,tflrail/status', [
            'app_id' => $this->appId,
            'app_key' => $this->appKey,
        ]);

        foreach ($resultSet as $line) {
            $lines[] = new Generic([
                'id' => $line->id,
                'name' => $line->name,
                'mode' => $line->modeName,
            ]);
        }

        return collect($lines);
    }
}
