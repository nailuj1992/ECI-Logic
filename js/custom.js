function addFormula(id) {
    add(id, 'txt_formula');
    document.getElementById('txt_valor').value = "";
}

function add(id, elem) {
    var formula = document.getElementById(elem).value;
    formula += id.innerHTML;
    document.getElementById(elem).value = formula;
}

function delFormula() {
    del('txt_formula');
    document.getElementById('txt_valor').value = "";
}

function del(elem) {
    var formula = document.getElementById(elem).value;
    formula = formula.substring(0, formula.length - 1);
    document.getElementById(elem).value = formula;
}

function acFormula() {
    ac('txt_formula');
    document.getElementById('txt_valor').value = "";
}

function ac(elem) {
    document.getElementById(elem).value = "";
}

function resetValue() {
    document.getElementById('txt_valor').value = "";
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