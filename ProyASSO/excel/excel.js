let selectedFile;
console.log(window.XLSX);
document.getElementById('input').addEventListener("change", (event) => {
    selectedFile = event.target.files[0];
    document.getElementById('button').disabled = false;
})

let data = [{
    "name": "jayanth",
    "data": "scd",
    "abc": "sdef"
}]

let array = [];
let salida = "";
let row;
document.getElementById('button').addEventListener("click", () => {
    XLSX.utils.json_to_sheet(data, 'out.xlsx/xls');
    if (selectedFile) {
        let fileReader = new FileReader();
        fileReader.readAsBinaryString(selectedFile);
        fileReader.onload = (event) => {
            let data = event.target.result;
            let workbook = XLSX.read(data, { type: "binary" });
            console.log(workbook);
            workbook.SheetNames.forEach(sheet => {
                let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet]);
                console.log(rowObject);
                for (let i = 0; i < rowObject.length; i++) {
                    let agrgeararray = array.push(rowObject[i]);
                }
                //document.getElementById("jsondata").innerHTML = JSON.stringify(rowObject, undefined, 4)

            });


            let table = document.createElement('table');
            table.border = 1;
            table.classList.add('table');
            let thead = document.createElement('thead');
            thead.classList.add('table-success')
            thead.classList.add('table-striped')
            let tbody = document.createElement('tbody');

            table.appendChild(thead);
            table.appendChild(tbody);

            // Adding the entire table to the body tag
            document.getElementById('jsondata').appendChild(table);



            let row_1 = document.createElement('tr');
            let heading_1 = document.createElement('th');
            heading_1.innerHTML = "Tienda";
            let heading_2 = document.createElement('th');
            heading_2.innerHTML = "Descripcion";
            let heading_3 = document.createElement('th');
            heading_3.innerHTML = "Producto";
            let heading_4 = document.createElement('th');
            heading_4.innerHTML = "Unidades en alamacen";
            let heading_5 = document.createElement('th');
            heading_5.innerHTML = "Categoria";
            let heading_6 = document.createElement('th');
            heading_6.innerHTML = "Medida";
            let heading_7 = document.createElement('th');
            heading_7.innerHTML = "Precio Unitario";

            row_1.appendChild(heading_1);
            row_1.appendChild(heading_2);
            row_1.appendChild(heading_3);
            row_1.appendChild(heading_4);
            row_1.appendChild(heading_5);
            row_1.appendChild(heading_6);
            row_1.appendChild(heading_7);
            thead.appendChild(row_1);

            for (let i = 0; i < array.length; i++) {
                let row_2 = document.createElement('tr');
                let row_2_data_1 = document.createElement('td');
                row_2_data_1.innerHTML = array[i].Tienda;
                let row_2_data_2 = document.createElement('td');
                row_2_data_2.innerHTML = array[i].Descripcion;
                let row_2_data_3 = document.createElement('td');
                row_2_data_3.innerHTML = array[i].Producto;
                let row_2_data_4 = document.createElement('td');
                row_2_data_4.innerHTML = array[i].Unidades_en_almacen;
                let row_2_data_5 = document.createElement('td');
                row_2_data_5.innerHTML = array[i].Categoria;
                let row_2_data_6 = document.createElement('td');
                row_2_data_6.innerHTML = array[i].Medida;
                let row_2_data_7 = document.createElement('td');
                row_2_data_7.innerHTML = array[i].Precio_unitario;

                row_2.appendChild(row_2_data_1);
                row_2.appendChild(row_2_data_2);
                row_2.appendChild(row_2_data_3);
                row_2.appendChild(row_2_data_4);
                row_2.appendChild(row_2_data_5);
                row_2.appendChild(row_2_data_6);
                row_2.appendChild(row_2_data_7);
                tbody.appendChild(row_2);
            }
            document.getElementById('button').disabled = true;
        }
    }
});