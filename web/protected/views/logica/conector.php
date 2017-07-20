<?php
/* @var $this LogicaController */
/* @var $form CActiveForm */
?>

<div id="conectores" class="col-sm-12 col-sm-offset-0">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'conector-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php $fragmentos = explode("_", $formula); ?>
    <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-8 col-sm-offset-2">
        <caption align="top">
            <h1><b><?php echo Funcion::conector; ?></b></h1>
            <p>Selecciona el conector que haga que la fórmula sea siempre verdadera.</p>
        </caption>
        <tr>
            <td>
                <input type="text" name="txt_formula_1" id="txt_formula_1" value="<?php echo $fragmentos[0]; ?>" readonly class="form-control">
            </td>
            <td>
                <?php $operadores = Operaciones::getOperadores(); ?>
                <select name="conector" class="form-control" required onchange="resetValue()">
                    <?php
                    foreach ($operadores as $key => $val) {
                        $selected = "";
                        if ($conector == $val) {
                            $selected = "selected";
                        }
                        echo '<option value="' . $key . '" ' . $selected . '>' . $val . '</option>';
                    }
                    ?>
                </select>
            </td>
            <td>
                <input type="text" name="txt_formula_2" id="txt_formula_2" value="<?php echo $fragmentos[1]; ?>" readonly class="form-control">
            </td>
            <td>
                <input type="submit" name="btn[igual]" value="=" class="btn btn-lg btn-success">
            </td>
            <td>
                <input type="text" name="txt_valor" id="txt_valor" value="<?php echo $valor; ?>" readonly class="form-control">
            </td>
        </tr>
    </table>
    <table cellSpacing="3" cellPadding="1" border="0" class="col-sm-8 col-sm-offset-2">
        <tr>
            <?php echo lbl_valores('A', $A); ?>
            <?php echo lbl_valores('B', $B); ?>
            <?php echo lbl_valores('C', $C); ?>
            <?php echo lbl_valores('D', $D); ?>
            <?php echo lbl_valores('E', $E); ?>
        </tr>
    </table>
    <div class="col-sm-6 col-sm-offset-3">
        <?php echo CHtml::link("Otra fórmula", array('logica/conector'), array('class' => 'btn btn-warning')) ?>
    </div>

    <?php $this->endWidget(); ?>
</div>

<?php

function lbl_valores($sim, $val) {
    $str = '<td class="form-inline">';
    $str .= '<input type="submit" name="lbl[' . $sim . ']" value="' . $sim . '" class="btn btn-lg btn-default">';
    $str .= '<input type="text" name="txt[' . $sim . ']" value="' . $val . '" readonly class="form-control simbolo">';
    $str .= '</td>';
    return $str;
}

function saltoLinea() {
    return '<tr><td colSpan="5"><br></td></tr>';
}
