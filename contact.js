// *********************************************************************************************************************
// Global variables                                                                                                    *
// difine global variables that will be use throughout the code                                                        *
// *********************************************************************************************************************

var excel_file_API = './spAts members details.xlsx';

// Do some stuff when page hmtl page is launched
$(document).ready(function () {

    $("#headerTitle");

    // read Excel file and convert to json format using fetch
    fetch('./spAts members details.xlsx').then(function (res) {
        /* get the data as a Blob */
        if (!res.ok) throw new Error("fetch failed");
        return res.arrayBuffer();
    })
    .then(function (ab) {
        /* parse the data when it is received */
        var data = new Uint8Array(ab);
        var workbook = XLSX.read(data, { type: "array" });

        /* *****************************************************************
        * DO SOMETHING WITH workbook: Converting Excel value to Json       *
        ********************************************************************/
        var first_sheet_name = workbook.SheetNames[1];
        /* Get worksheet */
        var worksheet = workbook.Sheets[first_sheet_name];

        var jsonData = XLSX.utils.sheet_to_json(worksheet, { raw: true });
        /************************ End of conversion ************************/

        console.log(jsonData);
		

		 $.each(jsonData, function (index, value) {

			function image() { 
            var img = document.createElement('img'); 
            img.src = value.Photo; 
            }  

			'<div id="person" style="border:thin solid black; padding: 5px">' + '<img>';  
			
			document.write("<br>");
			
			value["Name"];
			document.write("<br>");
			value["Post"];
			document.write("<br>");
			value["Department"];
			document.write("<br>");
			value["Email id"];
			document.write("<br>");
			'<a href = value["Fb link"]>fb</a>' 
			document.write("<br>");
			'<a href = value["Linkedin link"]>fb</a>' + '</div>';
			document.write("<br>");
			document.write("<br>");
				
				
			$().appendTo("#showExcel");	
        });
	
    });


        }); // end: Ajax success API call

     // end: of Ajax call

