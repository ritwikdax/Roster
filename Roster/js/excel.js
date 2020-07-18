let selectedFile;
console.log(window.XLSX);
document.getElementById('inputexcel').addEventListener("change", (event) => {
    selectedFile = event.target.files[0];
})

let data=[{
    "name":"jayanth",
    "data":"scd",
    "abc":"sdef"
}]


document.getElementById('button').addEventListener("click", () => {
    XLSX.utils.json_to_sheet(data, 'out.xlsx');
    if(selectedFile){
        let fileReader = new FileReader();
        fileReader.readAsBinaryString(selectedFile);
        fileReader.onload = (event)=>{
         let data = event.target.result;
         let workbook = XLSX.read(data,{type:"binary"});
         console.log(workbook);
         workbook.SheetNames.forEach(sheet => {
              let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet]);
              
              console.log(rowObject);
              jsonToTable(rowObject);
              //document.getElementById("jsondata").innerHTML = rowObject[0]["1-Jul"];
              //document.getElementById("jsondata").innerHTML = JSON.stringify(rowObject[0],undefined,4)
         });
        }
    }

});


function jsonToTable(object) {
    // body...
    //Argument is JS Array
    var table = document.getElementById("previewexcel");

    var primaryRow = object[0];
    var secondaryRow = object[1];
    
    for(key in primaryRow){
        document.getElementById("previewexcel").innerHTML += 
        `<tr><td>${key}</td><td>${primaryRow[key]}</td><td>${secondaryRow[key]}</td></tr>`;
        //document.getElementById("previewexcel").innerHTML += primaryRow[key];

        //Adding Extra Column
    }

    

}