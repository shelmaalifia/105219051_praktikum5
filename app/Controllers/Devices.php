<?php

namespace App\Controllers;

use App\Models\ModelDevices;

class Devices extends BaseController
{
    protected $devicesModel;
    public function __construct()
    {
        $this->modelDevices = new ModelDevices();
    }
    public function index()
    {
        $devices = $this->modelDevices->findAll();
        $data = [
            'devices' => $devices
        ];

        // $modelDevices = new modelDevices();
        // $db = \config\Database::connect();
        // $devices = $db->query("SELECT * FROM devices");
        // dd($devices);
        // $devices = $this->modelDevices->findAll();

        return view('devices_view', $data);
    }
}
