<?php
$NombrePer = isset($_POST['Nombre']) ? $_POST['Nombre']: null;
$ApellidoPer = $_POST['Apellido'];
$ApellidoPerM = $_POST['Apellido2'];
$Tel_Persona = $_POST['Tel_Persona'];
$fecha = $_POST['Fecha_Nac'];
$fecha_formateada = date("d-m-Y", strtotime($fecha));
$ID_Empresa = $_POST['ID_Empresa'];
$Nombre_Contacto = $_POST['Nombre_Cont_Emergencia'];
$Tel_Contacto = $_POST['Tel_Contacto'];
$TipoSanguineo = $_POST['Tipo_Sangre'];
$Hist_1 = isset($_POST['Estres']) ? $_POST['Estres'] : null;
$Hist_2 = isset($_POST['Asma']) ? $_POST['Asma'] : null;
$Hist_3 = isset($_POST['Depresion/Ansiedad']) ? $_POST['Depresion/Ansiedad'] : null;
$Hist_4 = isset($_POST['Marcapasos/Problemas']) ? $_POST['Marcapasos/Problemas'] : null;
$Hist_5 = isset($_POST['Presion_Arterial']) ? $_POST['Presion_Arterial'] : null;
$Hist_6 = isset($_POST['histerectomia']) ? $_POST['histerectomia'] : null;
$Hist_7 = isset($_POST['Seborrea']) ? $_POST['Seborrea'] : null;
$Hist_8 = isset($_POST['Psoriasis']) ? $_POST['Psoriasis'] : null;
$Hist_9 = isset($_POST['Eccema']) ? $_POST['Eccema'] : null;
$Hist_10 = isset($_POST['Objetos_Metalicos']) ? $_POST['Objetos_Metalicos'] : null;
$Hist_11 = isset($_POST['Tras_Inmunologicos']) ? $_POST['Tras_Inmunologicos'] : null;
$Hist_12 = isset($_POST['sinusitis']) ? $_POST['sinusitis'] : null;
$Hist_13 = isset($_POST['Herpes']) ? $_POST['Herpes'] : null;
$Hist_14 = isset($_POST['Herpes_lab/boq']) ? $_POST['Herpes_lab/boq'] : null;
$Hist_15 = isset($_POST['Epilepsia']) ? $_POST['Epilepsia'] : null;
$Hist_16 = isset($_POST['Urin/Ren']) ? $_POST['Urin/Ren'] : null;
$Hist_17 = isset($_POST['lupus']) ? $_POST['lupus'] : null;
$Hist_18 = isset($_POST['Hepatitis']) ? $_POST['Hepatitis'] : null;
$Hist_19 = isset($_POST['Enf_Piel']) ? $_POST['Enf_Piel'] : null;
$Hist_20 = isset($_POST['Dolor_Cabeza']) ? $_POST['Dolor_Cabeza'] : null;
$Hist_21 = isset($_POST['Otro']) ? $_POST['Otro'] : null;

// crea un array con los valores que no son null
$historial_medico = array_filter([$Hist_1, $Hist_2, $Hist_3, $Hist_4, $Hist_5, $Hist_6, $Hist_7, $Hist_8, $Hist_9, $Hist_10, $Hist_11, $Hist_12, $Hist_13, $Hist_14, $Hist_15, $Hist_16, $Hist_17, $Hist_18, $Hist_19, $Hist_20, $Hist_21]);

// une los valores con coma
$Hist_Medico = implode(",", $historial_medico);

// crea un array con los valores que no son null
$historial_medico = array_filter([$Hist_1, $Hist_2, $Hist_3, $Hist_4, $Hist_5, $Hist_6, $Hist_7, $Hist_8, $Hist_9, $Hist_10, $Hist_11, $Hist_12, $Hist_13, $Hist_14, $Hist_15, $Hist_16, $Hist_17, $Hist_18, $Hist_19, $Hist_20, $Hist_21]);


$Imun_0 = isset($_POST['Pentavalente(1)']) ? $_POST['Pentavalente(1)']:null;
$Imun_1 = isset($_POST['BCG']) ? $_POST['BCG']:null;
$Imun_2 = isset($_POST['Pentavalente(2)']) ? $_POST['Pentavalente(2)']:null;
$Imun_3 = isset($_POST['HepatitisB']) ? $_POST['HepatitisB']:null;
$Imun_4 = isset($_POST['Pentavalente(3)']) ? $_POST['Pentavalente(3)']:null;
$Imun_5 = isset($_POST['IPV']) ? $_POST['IPV']:null;
$Imun_6 = isset($_POST['OPV(1)']) ? $_POST['OPV(1)']:null;
$Imun_7 = isset($_POST['SRP']) ? $_POST['SRP']:null;
$Imun_8 = isset($_POST['OPV(2)']) ? $_POST['OPV(2)']:null;
$Imun_9 = isset($_POST['Varicela']) ? $_POST['Varicela']:null;
$Imun_10 = isset($_POST['OPV(3)']) ? $_POST['OPV(3)']:null;
$Imun_11 = isset($_POST['Fiebre_Amarilla']) ? $_POST['Fiebre_Amarilla']:null;
$Imun_12 = isset($_POST['VPH(1)']) ? $_POST['VPH(1)']:null;
$Imun_13 = isset($_POST['DPT']) ? $_POST['DPT']:null;
$Imun_14 = isset($_POST['VPH(2)']) ? $_POST['VPH(2)']:null;
$Imun_15 = isset($_POST['dT']) ? $_POST['dT']:null;
$Imun_16 = isset($_POST['Hepatitis_A(1)']) ? $_POST['Hepatitis_A(1)']:null;
$Imun_17 = isset($_POST['Influenza']) ? $_POST['Influenza']:null;
$Imun_18 = isset($_POST['Hepatitis_A(2)']) ? $_POST['Hepatitis_A(2)']:null;
$Imun_19 = isset($_POST['Imn_Otro']) ? $_POST['Imn_Otro']:null;

$imun_vars = array($Imun_0, $Imun_1, $Imun_2, $Imun_3, $Imun_4, $Imun_5, $Imun_6, $Imun_7, $Imun_8, $Imun_9, $Imun_10, $Imun_11, $Imun_12, $Imun_13, $Imun_14, $Imun_15, $Imun_16, $Imun_17, $Imun_18, $Imun_19);
$Imun_Medico = implode(", ", array_filter($imun_vars));

$Ant_PreN = isset($_POST['q11_antecedentesPrenatales']) ? $_POST['q11_antecedentesPrenatales'] : null;
$Ant_Nat = isset($_POST['q12_antecedentesNatales']) ? $_POST['q12_antecedentesNatales'] : null;

?>