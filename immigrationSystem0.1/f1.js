var job_count=1;
var education_count=1;
var language_count=1;

function addjob(){
    let addjob = document.getElementById('addjob');
    let jobHide = document.getElementById('job_hide');
    if(job_count<3)
    {
        ++job_count;
        var field = 
        `<fieldset class="form-control">
        <legend></legend> 
        <span>(</span> 
        <span style="color:red;">*</span>
        <span>) :</span>
        <span>Professional experience</span>

        <div class="form-group">
            <label for="jtitle${job_count}" class="col-2 col-form-label">job title:<span style="color:red;"> *</span></label>
            <input type="text" class="form-control" id="jtitle${job_count}" name="jtitle${job_count}">
        </div>

        <div class="form-group">
            <label for="employern${job_count}" class="col-2 col-form-label">employer name:<span style="color:red;"> *</span></label>
            <input type="text" class="form-control" id="employern${job_count}" name="employern${job_count}">
        </div>
        <div class="form-group">
            <label for="workplace${job_count}" class="col-2 col-form-label">workplace:<span style="color:red;"> *</span></label>
            <input type="text" class="form-control" id="workplace${job_count}" name="workplace${job_count}">
        </div>
        <div class="form-group">
            <label for="yexperience${job_count}" class="col-2 col-form-label">Years of experience:<span style="color:red;"> *</span></label>
            <input type="text" class="form-control" id="yexperience${job_count}" name="yexperience${job_count}">
        </div>
        <div class="form-group">
            <label for="responsibility${job_count}" class="col-2 col-form-label">Responsibility:<span style="color:red;"> *</span></label>
            <input type="text" class="form-control" id="responsibility${job_count}" name="responsibility${job_count}">
        </div>`;
        console.log(field);
        var htmlObject = document.createElement('fieldset');
        htmlObject.innerHTML=field;
        addjob.insertAdjacentElement("beforeend", htmlObject);
    }
    if(job_count==3)
    {
        jobHide.style = "display:none";
    }
}
function addeducation(){
    let addeducation = document.getElementById('addeducation');
    let educationHide = document.getElementById('education_hide');
    if(education_count<3)
    {
        ++education_count;
        var field = 
        `<fieldset class="form-control">
        <legend></legend> 
        <span>(</span>
        <span style="color:red;">*</span>
        <span>) :</span>
        <span>Edication</span>
     

        <div class="form-group">
            <label for="establishment${education_count}" class="col-2 col-form-label">Establishment:<span style="color:red;"> *</span></label>
            <input type="text" class="form-control" id="establishment${education_count}" name="establishment${education_count}">
        </div>

        <div class="form-group">
            <label for="level${education_count}" class="col-2 col-form-label">Level:<span style="color:red;"> *</span></label>
            <select id="level${education_count}" name="level${education_count}" class="form-control">
            <option value="bachelor">bachelor</option>
                <option value="Licence">Licence</option>
                <option value="Master">Master</option>
                <option value="Doctorat(ph.d)">Doctorat(ph.d)</option>
                <option value="Doctor of Medicine">Doctor of Medicine</option>
                <option value="Doctor of Pharmacy">Doctor of Pharmacy</option>
                <option value="Doctor of veterinary medicine">Doctor of veterinary medicine</option>
                <option value="One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute">One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute</option>
                <option value="Two-year program at a university, college, trade or technical school, or other institute">Two-year program at a university, college, trade or technical school, or other institute</option>
            </select>
                
            
            
        </div>
        <div class="form-group">
            <label for="domaine${education_count}" class="col-2 col-form-label">domaine:<span style="color:red;"> *</span></label>
            <input type="text" class="form-control" id="domaine${education_count}" name="domaine${education_count}">
        </div>
        <div class="form-group">
            <label for="gdate${education_count}" class="col-2 col-form-label"> date of Graduation :<span style="color:red;"> *</span></label>
            <input type="date" class="form-control" id="gdate${education_count}" name="gdate${education_count}">
        </div>`;
       
       
        var htmlObject = document.createElement('fieldset');
        htmlObject.innerHTML=field;
        addeducation.insertAdjacentElement("beforeend", htmlObject);
    }
    if(education_count==3)
    {
        educationHide.style = "display:none";
    }
}
function addlanguage(){
    let addlanguage = document.getElementById('addlanguage');
    let languageHide = document.getElementById('language_hide');
    if(language_count<2)
    {
        ++language_count;
        var field = 
        ` <fieldset class="form-control">
        <legend></legend> 
        <span>(</span>
        <span style="color:red;">*</span>
        <span>) :</span>
        <span>Languages experience</span>
     

        <div class="form-group">
            <label for="language${language_count}" class="col-2 col-form-label">Language:<span style="color:red;"> *</span></label>
            <select class="form-control" id="language${language_count}" name="language${language_count}">
               <option value="english">english</option>
               <option value="french">french</option>
            </select>
        </div>

        <div class="form-group">
            <label for="levell${language_count}" class="col-2 col-form-label">Level:<span style="color:red;"> *</span></label>
            <select  class="form-control" id="levell${language_count}" name="levell${language_count}">
               <option value="A1">A1</option>
               <option value="A2">A2</option>
               <option value="B1">B1</option>
               <option value="B2">B2</option>
               <option value="C1">C1</option>
               <option value="C2">C2</option>
            </select>
        </div>`;
        var htmlObject = document.createElement('fieldset');
        htmlObject.innerHTML=field;
        addlanguage.insertAdjacentElement("beforeend", htmlObject);
    }
    if(language_count==2)
    {
        languageHide.style = "display:none";
    }
}

