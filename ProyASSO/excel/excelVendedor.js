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
            heading_1.innerHTML = "Nombre";
            let heading_2 = document.createElement('th');
            heading_2.innerHTML = "Apellidos";
            let heading_3 = document.createElement('th');
            heading_3.innerHTML = "Telefono";

            row_1.appendChild(heading_1);
            row_1.appendChild(heading_2);
            row_1.appendChild(heading_3);

            thead.appendChild(row_1);

            for (let i = 0; i < array.length; i++) {
                let row_2 = document.createElement('tr');
                let row_2_data_1 = document.createElement('td');
                row_2_data_1.innerHTML = array[i].Nombre;
                let row_2_data_2 = document.createElement('td');
                row_2_data_2.innerHTML = array[i].Apellidos;
                let row_2_data_3 = document.createElement('td');
                row_2_data_3.innerHTML = array[i].Telefono;


                row_2.appendChild(row_2_data_1);
                row_2.appendChild(row_2_data_2);
                row_2.appendChild(row_2_data_3);

                tbody.appendChild(row_2);
            }
            document.getElementById('button').disabled = true;
        }
    }
});
$(document).on('ready', function() {
    document.getElementById('subir').addEventListener("click", () => {
        alert('Enviando Datos');
        //alert(array[0].Nombre)
        for (let i = 0; i < array.length; i++) {
            $.ajax({
                url: '../vendedor_a.php',
                data: { nombre: array[i].Nombre, apellidos: array[i].Apellidos, telefono: array[i].Telefono },
                method: "POST",

            })
        }
        alert('Datos enviados');

    });
});