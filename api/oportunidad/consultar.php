<?php
header('Content-Type: application/json');
require_once '../../modelo/datosOperacion.php';
require_once '../../modelo/oportunidad.php';
require_once '../../modelo/persona.php';
require_once 'respuesta/consultarRespuesta.php';

$resp = new ConsultarRespuesta();

$datop = new DatosOperacion();
$datop->MontoSolicitado = 500000;
$datop->Linea = "504";
$datop->CantidadCuotas = 12;
$datop->TasaEfectivaMensual = 2.9589;
$datop->CuotaPromedio = 53503.08;
$datop->TasaNominalAnual = 36;
$datop->CostoFinancieroTotal = 56.55;

$per = new Persona();
$per->Nombres = "pedro rodriguez";
$per->Sexo = "F";
$per->Documento = "123123";
$per->Email = "aaaa@aaaa.com.ar";
$per->Celular = "123456";
$per->TelefonoAlternativo = "123456";

$opor = new Oportunidad();
$opor->Persona = $per;
$opor->DatosOperacion = $datop;
$opor->SmsConsultaId = "17654293-27258197726";
$opor->IdValidatorId = 893;
$opor->MotorSolaFirmaId = 8870;

$resp->Oportunidad = $datop;
$resp->IsOk = true;

echo json_encode($resp);