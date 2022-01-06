
<h1>Listado de personas</h1>
<table>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Edad</td>
    </tr>
    <?php foreach($personas as $persona) { ?>
    <tr>
        <td><?php echo $persona->getId();?></td>
        <td><?php echo $persona->getNombre();?></td>
        <td><?php echo $persona->getEdad();?></td>
    </tr>
    <?php
    }
    ?>
</table>
