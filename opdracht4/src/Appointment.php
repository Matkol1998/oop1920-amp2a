<?php
// Appointment.php

namespace Opdracht4;

class Appointment
{
    private $patient;
    public $doctor;
    private $nurses = [];
    private $beginTime;
    private $endTime;
    public static $count = 0;
    public static $appointments = [];

    public function setAppointment($patient, $doctor,
      $nurses, $beginTime, $endTime)
    {
        $this->patient = $patient;
        $this->doctor = $doctor;
        foreach($nurses as $nurse)
        {
            $this->addNurse($nurse);
        }
        $this->beginTime = $beginTime;
        $this->endTime = $endTime;
        self::$count++;
        self::$appointments[] = $this;
    }

    public function addNurse($nurse)
    {
        $this->nurses[] = $nurse;
    }
}
