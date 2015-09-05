<html>
	<head>
		<title>Pagina Controles html</title>
	</head>
	<body>
		<form method="post" action="Destino.php">
			Nombre: <input type = "Text" name="txtNombre"/> <br><br>
			Apellido: <input type="Text" name="txtApellido"/>	<br><br>
			Edad: <input type= "Text" name="txtEdad"/><br><br>
			<fieldset>
				<legend>Sexo:</legend>
				<input type= "radio" value="Femenino" name="sexo"/> Femenino
				<input type= "radio" value="Masculino" name="sexo"/> Masculino<br>
			</fieldset>
			<br><br>
			Tipo documento: 
				<select name="color">
					<option value ="Dni" >DNI</option>
					<option value ="Libreta civica" >Libreta Civica</option>
				</select>
				<br><br>
			<br><br>
			Nro Doc: <input type="Text" name="txtNroDoc"/>
			
			<input type="submit" value="Guardar" name="btnGuardar">
			<input type="reset" value ="Cancelar" name="btnCancelar">
		</form>

	</body>

</html>