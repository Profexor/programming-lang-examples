function SubmitFormData() {
    
    var title = $("#jobField").val();
    var sdesc = $("#sdescriptionField").val();
	var ldesc = $("#ldescriptionField").val();
    var avail = $("#avail").val();
    var salaryMin = $("#salaryMin").val();
    var salaryMinR = $("#salaryMinR").val();
    var salaryMaxR = $("#salaryMaxR").val();
    var salaryDurationR = $("#salaryDurationR").val();
    var negot = $("#negot").val();
    var cityField = $("#Town").val();
    var industryField = $("#industryField").val();
    var webField = $("#webField").val();
    var randnumField = $("#randnumField").val();
    
    
   
    $.post("listdb.php", { title: title, sdesc: sdesc, ldesc: ldesc, avail: avail, salaryMin: salaryMin, salaryMinR: salaryMinR,  salaryMaxR: salaryMaxR,  salaryDurationR: salaryDurationR,  negot: negot,  cityField: cityField,  industryField: industryField,  webField: webField,  randnumField: randnumField},
    function(data) {
	 $('#results').html(data);
	 $('#myForm')[0].reset();
    });
}