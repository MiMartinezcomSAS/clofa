<form action="includes/submit.php" id="form" method="post">
    <h1>Encuenta de opinión</h1>
    <!-- question 1 -->
    <div class="content-question">
        <label class="question">
            1. ¿ Su percepción de la gestión de la Dirección del CLOFA es ?
        </label>

        <p>Seleccione su respuesta</p>

        <div class="content-radio">
            <input type="radio" id="direccion1" name="direccion" value="Excelente">
            <label for="direccion1">Excelente</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="direccion2" name="direccion" value="Buena">
            <label for="direccion2">Buena</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="direccion3" name="direccion" value="Regular">
            <label for="direccion3">Regular</label>
        </div>
        <div class="content-radio">
            <input type="radio"  id="direccion4"  name="direccion"value="Mala">
            <label for="direccion4">Mala</label>
        </div>
    </div>
    <!-- question 2 -->
    <div class="content-question">
        <label class="question">
            2. ¿ Su apreciación del equipo de trabajadores del CLOFA es ?
        </label>

        <p>Seleccione su respuesta</p>

        <div class="content-radio">
            <input type="radio" id="trabajadores1" name="trabajadores" value="Excelente">
            <label for="trabajadores1">Excelente</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="trabajadores2" name="trabajadores" value="Buena">
            <label for="trabajadores2">Buena</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="trabajadores3" name="trabajadores" value="Regular">
            <label for="trabajadores3">Regular</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="trabajadores4" name="trabajadores" value="Mala">
            <label for="trabajadores4">Mala</label>
        </div>
    </div>
    <!-- question 3 -->
    <div class="content-question">
        <label class="question">
            3. ¿ Cómo califica los servicios que ofrece CLOFA ?
        </label>

        <p>Seleccione su respuesta</p>

        <div class="content-radio">
            <input type="radio" id="servicios1" name="servicios" value="Excelente">
            <label for="servicios1">Excelente</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="servicios2" name="servicios" value="Buena">
            <label for="servicios2">Buena</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="servicios3" name="servicios" value="Regular">
            <label for="servicios3">Regular</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="servicios4" name="servicios" value="Mala">
            <label for="servicios4">Mala</label>
        </div>
    </div>
    <!-- question 4 -->
    <div class="content-question">
        <label class="question">
            4. ¿ Cómo evalúa los eventos que se realizan en el CLOFA ?
            <span> Tales  como: (día de la madre, día del padre, día del niño, diciembre, etc) </span>
        </label>

        <p>Seleccione su respuesta</p>

        <div class="content-radio">
            <input type="radio" id="eventos1" name="eventos" value="Excelente">
            <label for="eventos1">Excelente</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="eventos2" name="eventos" value="Buena">
            <label for="eventos2">Buena</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="eventos3" name="eventos" value="Regular">
            <label for="eventos3">Regular</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="eventos4" name="eventos" value="Mala">
            <label for="eventos4">Mala</label>
        </div>
    </div>
    <!-- question 5 -->
    <div class="content-question">
        <label for="">
            5. Su punto de vista, frente al plan de desarrollo 2015 es?
        </label>

        <p>Seleccione su respuesta</p>

        <div class="content-radio">
            <input type="radio" id="desarrollo1" name="desarrollo" value="Excelente">
            <label for="desarrollo1">Excelente</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="desarrollo2" name="desarrollo" value="Buena">
            <label for="desarrollo2">Buena</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="desarrollo3" name="desarrollo" value="Regular">
            <label for="desarrollo3">Regular</label>
        </div>
        <div class="content-radio">
            <input type="radio" id="desarrollo4" name="desarrollo" value="Mala">
            <label for="desarrollo4">Mala</label>
        </div>
    </div>

    <p>Su opinión cuenta, ingrese acá sus observaciónes</p>
    <textarea name="observaciones" id="" cols="30" rows="10"></textarea>

    <h3>Datos Socio</h3>

    <div class="content-input column-1">
        <label for="nombre">Nombres y Apellidos</label>
        <input id="nombre" type="text" name="nombre" placeholder="Nombres y Apellidos"/>
    </div>
    <div class="content-input column-3">
        <label for="grado">Grado</label>
        <input id="grado" type="text" name="grado" placeholder="Grado"/>
    </div>
    <div class="content-input column-3">
        <label for="celular">Grado</label>
        <input id="celular" type="text" name="celular" placeholder="No. Celular"/>
    </div>
    <div class="content-input column-3">
        <label for="e-mail">e-mail Personal</label>
        <input id="e-mail" type="text" name="e-mail" placeholder="e-mail Personal"/>
    </div>
    <div class="content-input column-2">
        <label for="unidad">Unidad-Jefatura-Dependencia</label>
        <select name="unidad" id="unidad">
            <option value="0">Seleccione una opción</option>
            <option value="0">Seleccione una opción</option>
            <option value="0">Seleccione una opción</option>
        </select>
    </div>
    <input type="submit" value="Enviar"/>
</form>