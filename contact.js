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

                '<tr>' +
                    '<th scope="row">' +
                        value["Name"] +
                    '</th>' + 
                    '<td>' +
                        value["Post"] +
                    '</td>' +  
                    '<td>' +
                        '<span class="badge badge-primary badge-pill p-2">' +
                            value.Department +
                        '</span>' +
                    '</td>' +
                    '<td>' +
                        value["Email id"]+
                    '</td>' +
                    '<td>' +
                        value["Phone number"] +
                    '</td>' +
					'<td>' +
                        value["Fb link"] +
                    '</td>' +
					'<td>' +
                        value["Linkedin link"] +
                    '</td>' + 
					'<td>' +
                        value.Photo +
                    '</td>'
					+
                '</tr>'
            );

        });

    });


        }); // end: Ajax success API call

     // end: of Ajax call

