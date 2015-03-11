<h1>Encuesta de opinión</h1>
<form action="includes/submit.php" id="form" method="post">

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
            <input type="radio" id="direccion4" name="direccion" value="Mala">
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
    <div class="content-question margin-bottom">
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
    <div class="video">Click <a href="https://www.youtube.com/watch?v=NZynsMybFAs" target="_blank">AQUÍ</a> para ver el video plan de desarrollo
    </div>
    <!-- question 5 -->
    <div class="content-question last">
        <label class="question">
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
    <h2>Su opinión cuenta, ingrese acá sus observaciónes</h2>
    <textarea name="observaciones"></textarea>

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
        <label for="celular">celular</label>
        <input id="celular" type="text" name="celular" placeholder="000 000 0000"/>
    </div>
    <div class="content-input column-3">
        <label for="email">e-mail Personal</label>
        <input id="email" type="text" name="email" placeholder="e-mail personal"/>
    </div>
    <div class="content-input column-2">
        <label for="unidad">Unidad-Jefatura-Dependencia</label>
        <select name="unidad" id="unidad">
            <option value="" style="background:#2D3A4A;">-- Seleccione --</option>
            <option value="DIRECCIÓN DE SANIDAD" style="background:#2D3A4A;">DISAN - DIRECCIÓN DE SANIDAD</option>
            <option value="APOYO LOGÍSTICO" style="background:#2D3A4A;">JAL - JEFATURA DE APOYO LOGÍSTICO</option>
            <option value="INSTRUCCIÓN Y ENTRENAMIENTO" style="background:#2D3A4A;">JEA - JEFATURA DE INSTRUCCIÓN Y
                ENTRENAMIENTO
            </option>
            <option value="DESARROLLO HUMANO" style="background:#2D3A4A;">JED - JEFATURA DE DESARROLLO HUMANO</option>
            <option value="SEGURIDAD Y DEFENSA DE BASES AÉR" style="background:#2D3A4A;">JES - JEFATURA DE SEGURIDAD Y
                DEFENSA DE BASES AÉR
            </option>
            <option value="INTELIGENCIA AÉREA" style="background:#2D3A4A;">JIN - JEFATURA DE INTELIGENCIA AÉREA</option>
            <option value="OPERACIONES AÉREAS" style="background:#2D3A4A;">JOA - JEFATURA DE OPERACIONES AÉREAS</option>
            <option value="OPERACIONES LOGÍSTICAS AERONAUTIC" style="background:#2D3A4A;">JOL- JEFATURA DE OPERACIONES
                LOGÍSTICAS AERONAUTIC
            </option>
            <option value="JURÍDICA Y DD.HH - DI" style="background:#2D3A4A;">JURDH - JEFATURA JURÍDICA Y DD.HH - DIH
            </option>
            <option value="CEOFA" style="background:#2D3A4A;">CEOFA</option>
            <option value="COFAC- COMANDO FUERZA AEREA" style="background:#2D3A4A;">COFAC- COMANDO FUERZA AEREA</option>
            <option value="DMEFA" style="background:#2D3A4A;">DMEFA</option>
            <option value="DEPARTAMENTO ACCION INTEGRAL" style="background:#2D3A4A;">EMAAI - DEPARTAMENTO ACCION
                INTEGRAL
            </option>
            <option value="DEPARTAMENTO FINANCIERO" style="background:#2D3A4A;">EMAFI - DEPARTAMENTO FINANCIERO</option>
            <option value="SEGUNDO COMANDO Y JEFATURA DE ESTADO MAYOR" style="background:#2D3A4A;">GEMFA - SEGUNDO
                COMANDO Y JEFATURA DE ESTADO MAYOR
            </option>
            <option value="INSPECCION GENERAL DE LA FUERZA AEREA" style="background:#2D3A4A;">IGEFA - INSPECCION GENERAL
                DE LA FUERZA AEREA
            </option>
            <option value="CACOM 1" style="background:#2D3A4A;">CACOM 1</option>
            <option value="CACOM 2" style="background:#2D3A4A;">CACOM 2</option>
            <option value="CACOM 3" style="background:#2D3A4A;">CACOM 3</option>
            <option value="CACOM 4" style="background:#2D3A4A;">CACOM 4</option>
            <option value="CACOM 5" style="background:#2D3A4A;">CACOM 5</option>
            <option value="CACOM 6" style="background:#2D3A4A;">CACOM 6</option>
            <option value="CACOM 7" style="background:#2D3A4A;">CACOM 7</option>
            <option value="CAMAN" style="background:#2D3A4A;">CAMAN</option>
            <option value="CATAM" style="background:#2D3A4A;">CATAM</option>
            <option value="DEPARTAMENTO DE CONTRATACION" style="background:#2D3A4A;">EMACO - DEPARTAMENTO DE
                CONTRATACION
            </option>
            <option value="EMAVI" style="background:#2D3A4A;">EMAVI</option>
            <option value="EPFAC" style="background:#2D3A4A;">EPFAC</option>
            <option value="ESUFA" style="background:#2D3A4A;">ESUFA</option>
            <option value="GAAMA" style="background:#2D3A4A;">GAAMA</option>
            <option value="GACAR" style="background:#2D3A4A;">GACAR</option>
            <option value="GACAS" style="background:#2D3A4A;">GACAS</option>
            <option value="GAORI" style="background:#2D3A4A;">GAORI</option>
            <option value="otro" style="background:#2D3A4A;">-- Otro --</option>
        </select>
    </div>
    <div class="content-submit">
        <input class="submit" type="submit" value="Enviar"/>
    </div>
</form>

