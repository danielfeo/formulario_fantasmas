@extends('master')                              

@section('content') 


    <link rel="stylesheet" type="text/css" href="public/Css/form.css">
    
	<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">

	
    <section id="page1">
    	<div class="panel panel-default">
  	<div class="panel-heading">Información presonal</div>
  	<div class="panel-body">
    
		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de identidad <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span></label>
			<input title="Se necesita una cedula" required type="number" class="form-control" id="cedula" name="cedula" >
		</fieldset>

		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de documento <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span></label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Seleccione de acuerdo a su documento
			</label>
			<select name="tipo_documento" id="tipo_documento" class="form-control" >
				<option value="1">Cédula de Ciudadania</option>
				<option value="2">Cédula de Extranjeria</option>
			</select>
		</fieldset>

		<fieldset class="form-group" >
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Primer Nombre <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span></label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad
			</label>
			<input required type="text" class="form-control" id="primer_nombre" name="primer_nombre" >
		</fieldset>

		<fieldset class="form-group" >
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Segundo Nombre <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span></label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad
			</label>
			<input required type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" >
		</fieldset>

		<fieldset class="form-group" >
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Primer Apellido <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span></label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad
			</label>
			<input required type="text" class="form-control" id="primer_apellido" name="primer_apellido" >
		</fieldset>

		<fieldset class="form-group" >
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Segundo Apellido <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span></label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad
			</label>
			<input required type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" >
		</fieldset>

		
		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">
			GÉNERO <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span>
			</label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Seleccione su género
			</label>
			<select  required name="genero" id="genero" class="form-control" >
				<option value="">Seleccione</option>
				<option value="1">Masculino</option>
				<option value="2">Femenino</option>
			</select>
		</fieldset>

		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">
			FECHA DE NACIMIENTO  <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span>
			</label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Seleccione de acuerdo a la fecha de su nacimiento
			</label>
			<input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" ">
		</fieldset>

		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">
			EMAIL  <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span>
			</label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Digite Su correo electronico
			</label>
			<input required type="mail" class="form-control" id="mail" name="mail" ">
		</fieldset>

		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">
			CELULAR  <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span>
			</label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Digite Su numero celular
			</label>
			<input required type="number" class="form-control" id="celular" name="celular" ">
		</fieldset>

		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">
			EPS  <span style="color: red;font-size: 13px;text-transform: capitalize;color:red">(CAMPO OBLIGATORIO)</span>
			</label>
			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:15px">
			Digite Su nombre eps
			</label>
			<input required type="text" class="form-control" id="eps" name="eps" >
		</fieldset>

		
		</fieldset>
		 <div class="freebirdFormviewerViewFormContent "><div class="freebirdFormviewerViewHeaderHeader"><div class="freebirdFormviewerViewHeaderTitleRow"><div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div></div><div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div></div><div class="freebirdFormviewerViewItemList" role="list"><div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading"><div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner"><div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div></div></div><div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div><div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881"><div class="freebirdFormviewerViewItemsItemItemheader"><div class="freebirdFormviewerViewItemsItemItemTitleContainer"><div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span></div><div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos en la presente Resolución</div></div></div><div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class=""><div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto"><div class="freebirdFormviewerViewItemsCheckboxChoice"><label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer"><div class="exportLabelWrapper"><input type="checkbox" required style="float: left;
margin: 0px;" name="acepto" id="acepto"><div class="docssharedWizToggleLabeledContent"><div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div></div></div></label></div><input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden"></div></div><div id="i.req.131124881" class="screenreaderOnly"></div><div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div></div></div><div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681"><div class="freebirdFormviewerViewNavigationButtonsAndProgress"><div class="freebirdFormviewerViewNavigationButtons"><input class="enviar" type="submit" value="Enviar"> </div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div>

	
 

	</form>
	<script type="text/javascript" src="public/Js/form.js" ></script>
@stop

