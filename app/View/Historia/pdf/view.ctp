<style>
h3 {
	text-align: center;
	font-size: 30px;
	font-family:Lucida Sans Unicode;
}
p {
	font-size: 20px;
	font-weight: bold;
	text-decoration: underline;

}
director{
	font-size: 20px;
	font-weight: bold;
	text-align: left;
}
administrador{
	font-size: 20px;
	font-weight: bold;
	text-align: right;
}
table, th, td {
    
    font-size: 18px;
}
th {
    padding: 5px;
    text-align: left;
    background-color: #940616;

}
td {
    padding: 5px;
    text-align: center;

    
}

table#forma {
    width: 100%;    
    
    
}
membrete{
	font-size: 25px;
	font-weight: bold;
	text-decoration: none;
}
</style>
	<membrete>
		Republica Bolivarina de Venezuela<br>
		San Juan de los Morros<br>
		Sistema de Control y Gestion de Historias Medicas
	</membrete>
	
	<br><br><br><br><br>
	<h3>Historia Medica</h3>
	<br><br><br><br>
	<p> Datos del Paciente: </p>
	<br><br>
		
		<br>
		<table id="forma" border="1">
			<tr >

				
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Cedula</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Nacionalidad</th>

				
				


				
			</tr>
			<tr>
					<td> <?php echo $this->Html->link($historium['Paciente']['nombre'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>

				     <td> <?php echo $this->Html->link($historium['Paciente']['apellido'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
				     <td> <?php echo $this->Html->link($historium['Paciente']['dni'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
				     <td> <?php echo $this->Html->link($historium['Paciente']['edad'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
				     <td> <?php echo $this->Html->link($historium['Paciente']['sexo'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
				     <td> <?php echo $this->Html->link($historium['Paciente']['nacionalidad'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
				     

			</tr>
			<tr >

				
				<th>Ciudad</th>
				<th>Grupo</th>
				<th>Nacimiento</th>
				<th>Enfermedad</th>
				<th>Observaciones</th>
				<th>Fecha Ingreso</th>
				
				
				
				


				
			</tr>
			<tr>
					<td> <?php echo $this->Html->link($historium['Paciente']['ciudad'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
					<td> <?php echo $this->Html->link($historium['Paciente']['g_sanguineo'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
					<td> <?php echo $this->Html->link($historium['Paciente']['fecha_nacimiento'], array('controller' => 'pacientes', 'action' => 'view', $historium['Paciente']['id'])); ?>
				     </td>
				     <td> <?php echo ($historium['Historium']['enfermedad']); ?>
				     </td>
				     <td> <?php echo ($historium['Historium']['observaciones']); ?>
				     </td>
				     <td> <?php echo ($historium['Historium']['created']); ?>
				     </td>
				     
				     
				     

			</tr>
			<tr >

				
				
				<th>Fecha Cita</th>
				
				
				


				
			</tr>
			<tr>
					
			<td> <?php echo ($historium['Historium']['modified']); ?>  </td>
				     
				     

			</tr>
		</table>
<br><br><br><br><br>

<table border="0" cellspacing="29" style="width:100%" align="center" >
		<tr> 
				<td>
				<director>	
				       _______________ <br><br>
					   Juan Morales <br>
					  C.I 10.623.339<br>
					    Director
				</director>
				</td>
				<td>
					
				</td>
				<td>
				<administrador>	
					  _______________ <br><br>
					    Luis Morales <br>
						C.I 14.345.648<br>
					    Administrador
				</administradora>
				</td>
		</tr>
</table>

