<?php
/* @var $this LogicaController */
/* @var $form CActiveForm */
?>

<div id="deduccion" class="col-sm-12 col-sm-offset-0">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'deduccion-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="form-group col-sm-12 col-sm-offset-0">
        <div>
            <h1><b><?php echo Funcion::deduccion; ?></b></h1>
            <p>Ingresa premisas para poder deducir una conclusión dada.</p>
        </div>
        <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-6">
            <tr>
                <td colspan="4">
                    <label for="txt_enunciado" id="lbl_enunciado"><b>Enunciado</b></label>
                    <textarea name="txt_enunciado" id="txt_enunciado" class="form-control"><?php echo $enunciado; ?></textarea>
                </td>
            </tr>
            <tr>
                <?php echo enunciados('p', $p); ?>
                <?php echo enunciados('u', $u); ?>
            </tr>
            <tr>
                <?php echo enunciados('q', $q); ?>
                <?php echo enunciados('v', $v); ?>
            </tr>
            <tr>
                <?php echo enunciados('r', $r); ?>
                <?php echo enunciados('x', $x); ?>
            </tr>
            <tr>
                <?php echo enunciados('s', $s); ?>
                <?php echo enunciados('y', $y); ?>
            </tr>
            <tr>
                <?php echo enunciados('t', $t); ?>
                <?php echo enunciados('z', $z); ?>
            </tr>
        </table>
        <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-6">
            <th><b>Premisas:</b></th>
            <th><b>Conclusión:</b></th>
            <tr>
                <td>
                    <table id="premisas" cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-10 col-sm-offset-1">
                        <?php
                        foreach ($premisas as $elem) {
                            if ($elem != "") {
                                echo '<tr><td><input type="text" name="premisa[]" value="' . $elem . '" readonly class="form-control"></td></tr>';
                            }
                        }
                        ?>
                    </table>
                </td>
                <td>
                    <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-10 col-sm-offset-1">
                        <?php
                        if ($conclusion != "") {
                            echo '<tr><td><input type="text" name="conclusion" value="' . $conclusion . '" readonly class="form-control"></td></tr>';
                        }
                        ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-10 col-sm-offset-1">
                        <tr>
                            <td><input type="text" id="txt_premisa" name="txt_premisa" value="<?php echo $premisaError; ?>" readonly class="form-control" onfocus="focusElem(this);"></td>
                            <td><input type="submit" value="+" name="btn_premisa" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-10 col-sm-offset-1">
                        <tr>
                            <td><input type="text" id="txt_conclusion" name="txt_conclusion" value="<?php echo $conclusionError; ?>" readonly class="form-control" onfocus="focusElem(this);"></td>
                            <td><input type="submit" value="+" name="btn_conclusion" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-10 col-sm-offset-1">
                        <tr>
                            <td>
                                <table cellSpacing="3" cellPadding="1" border="0">
                                    <tr>
                                        <?php echo btn_simbolos(Operaciones::$true, 'btn btn-lg btn-info', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos(Operaciones::$false, 'btn btn-lg btn-info', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos(Operaciones::$parenOp, 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos(Operaciones::$parenCl, 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                    </tr>
                                    <tr>
                                        <?php echo btn_simbolos('u', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('v', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('x', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('y', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('z', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                    </tr>
                                    <tr>
                                        <?php echo btn_simbolos('p', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('q', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('r', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('s', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos('t', 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellSpacing="3" cellPadding="1" border="0">
                                    <tr>
                                        <?php echo btn_simbolos(Operaciones::$impl, 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos(Operaciones::$equiv, 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                    </tr>
                                    <tr>
                                        <?php echo btn_simbolos(Operaciones::$and, 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                        <?php echo btn_simbolos(Operaciones::$or, 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                    </tr>
                                    <tr>
                                        <?php echo btn_simbolos(Operaciones::$not, 'btn btn-lg btn-default', 'addFormulaDeduce(this)'); ?>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellSpacing="3" cellPadding="1" border="0">
                                    <tr>
                                        <?php echo btn_simbolos('DEL', 'btn btn-lg btn-warning', 'delFormulaDeduce()'); ?>
                                    </tr>
                                    <tr>
                                        <?php echo btn_simbolos('AC', 'btn btn-lg btn-danger', 'acFormulaDeduce()'); ?>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table cellSpacing="3" cellPadding="1" border="0" class="form-group col-sm-7 col-sm-offset-5">
                        <tr><td><input type="submit" value="Deducir" name="btn_deducir" class="btn btn-lg btn-success"></td></tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <?php $this->endWidget(); ?>
</div>

<?php

function enunciados($sim, $val) {
    $str = '<td><label for="txt_' . $sim . '"><b>' . $sim . ':</b></label></td>';
    $str .= '<td><input type="text" id="txt_' . $sim . '" name="txt[' . $sim . ']" value = "' . $val . '" class="form-control"></td>';
    return $str;
}

function btn_simbolos($sim, $class, $onclick) {
    $str = '<td>';
    $str .= CHtml::link($sim, '', array('class' => $class, 'onclick' => $onclick));
    $str .= '</td>';
    return $str;
}
