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

            $('#showExcel').append(

				'<div class="person" id="showExcel">' + 
				'<center>' + '<div class="container pl-4 pr-4">' + 
				'<div class="row justify-content-center">' + 
				'<div class="col-lg-4 col-md-5 pl-4 pr-4 m-0">' + 
				'<div class="member-card bg-light p-3">' +
				value.Photo +
				'<br>' +                                 
				value["Name"] +  
				'<br>' + 
				'<div class="member-social-strip">' +
				
				value["Email id"] + '<br>'  +   value["Fb link"] +  '<br>'                            
				value["Linkedin link"] + '<br>' +
				
				'</div>' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>'
              
            );

        });

    });


        }); // end: Ajax success API call

     // end: of Ajax call

