function add(id, elem) {
    var formula = document.getElementById(elem).value;
    formula += id.innerHTML;
    document.getElementById(elem).value = formula;
}

function del(elem) {
    var formula = document.getElementById(elem).value;
    formula = formula.substring(0, formula.length - 1);
    document.getElementById(elem).value = formula;
}

function ac(elem) {
    document.getElementById(elem).value = "";
}

function resetValue() {
    document.getElementById('txt_valor').value = "";
}

function addFormula(id) {
    add(id, 'txt_formula');
    resetValue();
}

function delFormula() {
    del('txt_formula');
    resetValue();
}

function acFormula() {
    ac('txt_formula');
    resetValue();
}

function addFormulaCreate(id) {
    add(id, 'Formula_formula');
}

function delFormulaCreate() {
    del('Formula_formula');
}

function acFormulaCreate() {
    ac('Formula_formula');
}

var lastFocus = null;

function focusElem(elem) {
    lastFocus = elem;
}

function deleteRow(r, tableId) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById(tableId).deleteRow(i);
}

function addFormulaDeduce(id) {
    if (lastFocus != null) {
        add(id, lastFocus.id);
    }
}

function delFormulaDeduce() {
    if (lastFocus != null) {
        del(lastFocus.id);
    }
}

function acFormulaDeduce() {
    if (lastFocus != null) {
        ac(lastFocus.id);
    }
}