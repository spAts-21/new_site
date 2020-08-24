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
        var second_sheet_name = workbook.SheetNames[2];
        /* Get worksheet */
        var worksheettwo = workbook.Sheets[second_sheet_name];

        var jsonData = XLSX.utils.sheet_to_json(worksheettwo, { raw: true });
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
			
			var lilink = "https://drive.google.com/file/d/17EYQb7APxrP2MlZxIJ19lSmx_XA-vjwt/view?usp=sharing";
			var fblink = "https://drive.google.com/file/d/1JSZg9NKGkrDsL-RnxsE-92lSWYhOgsiW/view?usp=sharing";
			var maillink = "https://drive.google.com/file/d/1Fiaw9AnitpINX4M2-cst2bHj5oH5m5Fh/view?usp=sharing";
			
			var fnc2 = "/";
			var ll = lilink.slice(32,lilink.length);
			var fnc1Indexl = ll.indexOf(fnc2);
			Idl=lilink.slice(32,32+fnc1Indexl);
			
			var fl = fblink.slice(32,fblink.length);
			var fnc1Index2 = fl.indexOf(fnc2);
			Idf=fblink.slice(32,32+fnc1Index2);
			
			var fl = maillink.slice(32,maillink.length);
			var fnc1Index3 = fl.indexOf(fnc2);
			Idm=maillink.slice(32,32+fnc1Index3);
			
			
			document.getElementById("showExcel").innerHTML+='<div class="col-lg-4 col-md-5 pl-4 pr-4 m-0" id="person">' + '<img class ="pericon"; src="https://drive.google.com/uc?id='+Id+'"; object-fit="cover";>' + '<br/>' + '<br/>' + '<h4>' + value["Name"] + '</h4>' +
			'<h6>' + value["Post"] + '</h6>' + '<h6>' + value["Department"] + '</h6>' + '<a href="' + value["Email id"] + '"> <img src="https://drive.google.com/uc?id='+Idm+'"; alt="mail"; height="20px"> </a>' + '&nbsp'
			+ '<a href="'+value["fb link"]+'"><img src="https://drive.google.com/uc?id='+Idf+'"; alt="fb"; height="20px"></a>' + '&nbsp' + '<a href="' + value["linkedin link"] + '"> <img src="https://drive.google.com/uc?id='+Idl+'"; alt="linkedin"; height="20px"> </a>' + '</div>' + '&nbsp' + '&nbsp' + '&nbsp' ;
			
        });
		
    });
	

}); // end: Ajax success API call

     // end: of Ajax call