function addFormula(id) {
    var formula = document.getElementById('txt_formula').value;
    formula += id.innerHTML;
    document.getElementById('txt_formula').value = formula;
    document.getElementById('txt_valor').value = "";
}
function delFormula() {
    var formula = document.getElementById('txt_formula').value;
    formula = formula.substring(0, formula.length - 1);
    document.getElementById('txt_formula').value = formula;
    document.getElementById('txt_valor').value = "";
}
function acFormula() {
    document.getElementById('txt_formula').value = "";
    document.getElementById('txt_valor').value = "";
}