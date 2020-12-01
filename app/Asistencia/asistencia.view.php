<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/bt4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <title>Asistencia</title>
</head>
<body>
 

    <div class="contenedor-asistencia" style="width: 100%; display:flex; justify-content: center; padding: 10rem;">
        <div class="contenido-asistencia" style="width: 28rem; border:1px solid; padding:5px; text-align: center;">
            <h1>Asistencia</h1>
            <p>Pase de asistencia, favor de introducir <strong>una asistencia por sesion.</strong> </p>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Numero de Control</label>
                    <input type="text" class="form-control" name="nControl" id="exampleFormControlInput1" placeholder="Num. Control">
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="presente" id="inlineCheckbox1" value="presente"  checked>
                <label class="form-check-label" for="inlineCheckbox1">Presente</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled>
                <label class="form-check-label" for="inlineCheckbox2">Retardo</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label" for="inlineCheckbox3">Falta</label>
                </div>
                <div class="btn-asistencia" style="text-align: right;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                
                    <?php if(!empty($errores)):  ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errores; ?>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($exito)): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $exito; ?>
                        </div>
                    <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>