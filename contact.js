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
    .then(function whole(ab) {
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
            if(value.Photo!=undefined)
            {
            var fnc1 = "/";
            var link=value.Photo.slice(32,value.Photo.length);
            var fnc1Index = link.indexOf(fnc1);
            Id=value.Photo.slice(32,32+fnc1Index);
            }
			else{
                Id="#";
            }
			document.getElementById("showExcel").innerHTML+='<div id="person">' + '<img class=pericon"; src=" https://drive.google.com/uc?id='+Id+'";>' + '<br/>' + value["Name"] + 
			'<br/>' + value["Post"] + '<br/>' + value["Department"] + '<br/>' + value["Email id"] + '<br/>' + '<a href="'+value["fb link"]+'">fb</a>' + '<br/>' + 
			'<a href="' + value["linkedin link"] + '"> Li </a>' + '</div>' + '<br/>' ;
			
        });
		
    });
	

}); // end: Ajax success API call

     // end: of Ajax call