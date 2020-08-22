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
			document.getElementById("showExcel").innerHTML+='<div style="border:thin solid black; background-color:white">' + '<img src=" https://drive.google.com/uc?id='+Id+'">' + '<br/>' + value["Name"] + '<br/>' + value["Post"] + '<br/>' + value["Department"] + '<br/>' +
			value["Email id"] + '<br/>' + value["Fb link"] + '<br/>' + value["Linkedin link"]  + '</div>' + '<br/>' ;

				
			
			
			//'<div style="border:thin solid black; padding: 5px">' +  value["Name"] + value["Post"] + '</div>';
			//')'
			//imagefun() +
			//document.write('<br/>');
			//value["Post"];
			//value["Department"];
			//document.write('<br/>');
			//value["Email id"];
			//document.write('<br/>');
			//'<a href = value["Fb link"]>fb</a>';
			//document.write('<br/>');
			//'<a href = value["Linkedin link"]>' + fb + '</a>' 
			//document.write('<br/>');
			//document.write('<br/>');
            // 'document.write('<br/> +
            
				
			
        });
		
			//var fun = rep()
			//$("fun").appendTo($("#showExcel"));
    });
	

}); // end: Ajax success API call

     // end: of Ajax call