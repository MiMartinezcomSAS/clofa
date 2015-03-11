<h1>Reporte</h1>
<?php
if (isset($_SESSION['login']) && $_SESSION['login']) { ?>
    <p class="p-excel">Descargar reporte </p> <a href="includes/excelDown.php"><img class="img-excel" src="img/Excel.png" alt=""/></a>
<?php } else { ?>
    <form action="includes/Auth.php" method="post" id="formExcel">
        <input type="password" placeholder="código" name="password"/>
        <input type="submit"/>
    </form>
<?php } ?>