<?php
// index.php

require_once "vendor/autoload.php";

use Opdracht4\Person;
use Opdracht4\Patient;
use Opdracht4\Doctor;
use Opdracht4\Appointment;

$patient1 = new Patient('Jantje', 'blauw', 'wit',
    1.56, 147, 'patient', 100);

$doctor1 = new Doctor('Mohammed', 'rood', 'paars',
2.11, 67, 'doctor');

$appointment1 = new Appointment();
$appointment1->setAppointment($patient1, $doctor1, [], '12:00', '13:00');

$appointment2= new Appointment();
$appointment2->setAppointment($patient1, $doctor1, [], '14:00', '15:00');
print "<pre>";
//var_dump($appointment1);

//print Appointment::$count;
//var_dump(Appointment::$appointments);

foreach(Appointment::$appointments as $appointment)
{
    // steeds 1 appointment
    print $appointment->doctor->getName();
}
