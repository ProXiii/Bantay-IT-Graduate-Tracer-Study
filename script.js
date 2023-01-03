




// var survey_options = document.getElementById('survey_options');
// var add_more_fields = document.getElementById('add_more_fields');
// var remove_fields = document.getElementById('remove_fields');

// add_more_fields.onclick = function(){
//   var newField = document.createElement('input');
//   newField.setAttribute('type','text');
//   newField.setAttribute('name','survey_options[]');
//   newField.setAttribute('class','survey_options');
//   newField.setAttribute('siz',50);
//   newField.setAttribute('placeholder','Another Field');
//   survey_options.appendChild(newField);
// }

// remove_fields.onclick = function(){
//   var input_tags = survey_options.getElementsByTagName('input');
//   if(input_tags.length > 2) {
//     survey_options.removeChild(input_tags[(input_tags.length) - 1]);
//   }
// }

var survey_options = document.getElementById('survey_options');
var add_more_fields = document.getElementById('add_more_fields');
var remove_fields = document.getElementById('remove_fields');

add_more_fields.onclick = function () {
  var newField = document.createElement('input');
  newField.setAttribute('type', 'text');
  newField.setAttribute('name', 'degree[]');
  newField.setAttribute('class', 'survey_options');
  newField.setAttribute('siz', 50);
  newField.setAttribute('placeholder', 'Degree & Specialization');
  survey_options.appendChild(newField);

  var newLabel = document.createElement('label');
  newLabel.setAttribute('style', 'margin-left:4px; margin-right:10px');
  newLabel.textContent = "DATE COMPLETED : ";

  survey_options.appendChild(newLabel);

  var newDate = document.createElement('input');
  newDate.setAttribute('type', 'text');
  newDate.setAttribute('name', 'degreeDate[]');
  newDate.setAttribute('class', 'survey_options');
  newDate.setAttribute('style', 'width:170px');
  // newField.setAttribute('siz',50);
  // newDate.setAttribute('placeholder','Date Completed');
  survey_options.appendChild(newDate);

}

remove_fields.onclick = function () {
  var input_tags = survey_options.getElementsByTagName('input');
  if (input_tags.length > 3) {
    survey_options.removeChild(input_tags[(input_tags.length) - 1]);
    survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  }

  var label_tags = survey_options.getElementsByTagName('label');
  if (label_tags.length > 1) {
    survey_options.removeChild(label_tags[(label_tags.length) - 1]);

  }

  // var input_tags = survey_options.getElementsByTagName('input');
  // if(input_tags.length > 2) {
  //   survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  // }
}

var survey_options2 = document.getElementById('survey_options2');
var add_more_fields2 = document.getElementById('add_more_fields2');
var remove_fields2 = document.getElementById('remove_fields2');

add_more_fields2.onclick = function () {
  var newField2 = document.createElement('input');
  newField2.setAttribute('type', 'text');
  newField2.setAttribute('name', 'seminar[]');
  newField2.setAttribute('class', 'survey_options');
  newField2.setAttribute('siz', 50);
  newField2.setAttribute('placeholder', 'Name of Seminar / Training Attended');
  survey_options2.appendChild(newField2);

  var newLabel2 = document.createElement('label');
  newLabel2.setAttribute('style', 'margin-left:4px; margin-right:10px');
  newLabel2.textContent = "DATE COMPLETED : ";

  survey_options2.appendChild(newLabel2);

  var newDate2 = document.createElement('input');
  newDate2.setAttribute('type', 'text');
  newDate2.setAttribute('name', 'seminarDate[]');
  newDate2.setAttribute('class', 'survey_options');
  newDate2.setAttribute('style', 'width:170px');
  // newField.setAttribute('siz',50);
  // newDate.setAttribute('placeholder','Date Completed');
  survey_options2.appendChild(newDate2);


}

remove_fields2.onclick = function () {
  var input_tags2 = survey_options2.getElementsByTagName('input');
  if (input_tags2.length > 3) {
    survey_options2.removeChild(input_tags2[(input_tags2.length) - 1]);
    survey_options2.removeChild(input_tags2[(input_tags2.length) - 1]);
  }

  var label_tags2 = survey_options2.getElementsByTagName('label');
  if (label_tags2.length > 1) {
    survey_options2.removeChild(label_tags2[(label_tags2.length) - 1]);

  }

  // var input_tags = survey_options.getElementsByTagName('input');
  // if(input_tags.length > 2) {
  //   survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  // }
}

var survey_options3 = document.getElementById('survey_options3');
var add_more_fields3 = document.getElementById('add_more_fields3');
var remove_fields3 = document.getElementById('remove_fields3');

add_more_fields3.onclick = function () {
  var newField3 = document.createElement('input');
  newField3.setAttribute('type', 'text');
  newField3.setAttribute('name', 'license[]');
  newField3.setAttribute('class', 'survey_options');
  newField3.setAttribute('siz', 50);
  newField3.setAttribute('placeholder', 'Name of Examination');
  survey_options3.appendChild(newField3);

  var newLabel3 = document.createElement('label');
  newLabel3.setAttribute('style', 'margin-left:4px; margin-right:10px');
  newLabel3.textContent = "DATE COMPLETED : ";

  survey_options3.appendChild(newLabel3);

  var newDate3 = document.createElement('input');
  newDate3.setAttribute('type', 'text');
  newDate3.setAttribute('name', 'licenseDate[]');
  newDate3.setAttribute('class', 'survey_options');
  newDate3.setAttribute('style', 'width:170px');
  // newField.setAttribute('siz',50);
  // newDate.setAttribute('placeholder','Date Completed');
  survey_options3.appendChild(newDate3);


}

remove_fields3.onclick = function () {
  var input_tags3 = survey_options3.getElementsByTagName('input');
  if (input_tags3.length > 3) {
    survey_options3.removeChild(input_tags3[(input_tags3.length) - 1]);
    survey_options3.removeChild(input_tags3[(input_tags3.length) - 1]);
  }

  var label_tags3 = survey_options3.getElementsByTagName('label');
  if (label_tags3.length > 1) {
    survey_options3.removeChild(label_tags3[(label_tags3.length) - 1]);

  }

  // var input_tags = survey_options.getElementsByTagName('input');
  // if(input_tags.length > 2) {
  //   survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  // }
}

var survey_options4 = document.getElementById('survey_options4');
var add_more_fields = document.getElementById('add_more_fields4');
var remove_fields4 = document.getElementById('remove_fields4');

add_more_fields4.onclick = function () {
  var newField4 = document.createElement('input');
  newField4.setAttribute('type', 'text');
  newField4.setAttribute('name', 'skills[]');
  newField4.setAttribute('class', 'survey_options');
  newField4.setAttribute('siz', 50);
  newField4.setAttribute('placeholder', 'Skill');
  survey_options4.appendChild(newField4);

  // var newLabel4 = document.createElement('label');
  // newLabel4.setAttribute('style','margin-left:4px; margin-right:10px');
  // newLabel4.textContent = "DATE COMPLETED : ";

  // survey_options3.appendChild(newLabel3);

  // var newDate3 = document.createElement('input');
  // newDate3.setAttribute('type','date');
  // newDate3.setAttribute('name','survey');
  // newDate3.setAttribute('class','survey_options');
  // newDate3.setAttribute('style','width:170px');
  // // newField.setAttribute('siz',50);
  // // newDate.setAttribute('placeholder','Date Completed');
  // survey_options3.appendChild(newDate3);


}

remove_fields4.onclick = function () {
  var input_tags4 = survey_options4.getElementsByTagName('input');
  if (input_tags4.length > 1) {
    survey_options4.removeChild(input_tags4[(input_tags4.length) - 1]);
  }



  // var input_tags = survey_options.getElementsByTagName('input');
  // if(input_tags.length > 2) {
  //   survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  // }
}

var survey_options5 = document.getElementById('survey_options5');
var add_more_fields5 = document.getElementById('add_more_fields5');
var remove_fields5 = document.getElementById('remove_fields5');

add_more_fields5.onclick = function () {
  var newField5 = document.createElement('input');
  newField5.setAttribute('type', 'text');
  newField5.setAttribute('name', 'certificate[]');
  newField5.setAttribute('class', 'survey_options');
  newField5.setAttribute('siz', 50);
  newField5.setAttribute('placeholder', 'Name of Certificate');
  survey_options5.appendChild(newField5);

  var newLabel5 = document.createElement('label');
  newLabel5.setAttribute('style', 'margin-left:4px; margin-right:10px');
  newLabel5.textContent = "DATE COMPLETED : ";

  survey_options5.appendChild(newLabel5);

  var newDate5 = document.createElement('input');
  newDate5.setAttribute('type', 'text');
  newDate5.setAttribute('name', 'certificateDate[]');
  newDate5.setAttribute('class', 'survey_options');
  newDate5.setAttribute('style', 'width:170px');
  // newField.setAttribute('siz',50);
  // newDate.setAttribute('placeholder','Date Completed');
  survey_options5.appendChild(newDate5);


}

remove_fields5.onclick = function () {
  var input_tags5 = survey_options5.getElementsByTagName('input');
  if (input_tags5.length > 3) {
    survey_options5.removeChild(input_tags5[(input_tags5.length) - 1]);
    survey_options5.removeChild(input_tags5[(input_tags5.length) - 1]);
  }

  var label_tags5 = survey_options5.getElementsByTagName('label');
  if (label_tags5.length > 1) {
    survey_options5.removeChild(label_tags5[(label_tags5.length) - 1]);

  }

  // var input_tags = survey_options.getElementsByTagName('input');
  // if(input_tags.length > 2) {
  //   survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  // }
}


const box = document.getElementById('box');
const box2 = document.getElementById('box2');
const box3 = document.getElementById('box3');



// box2.style.visibility = 'hidden';
// box2.style.display = 'block';
function handleRadioClick() {
  if (document.getElementById('shows').checked) {
    box2.style.display = 'block';
    box.style.display = 'none';
    
  }
   else if(document.getElementById('show').checked){
    box2.style.display = 'none';
    box.style.display = 'block';
    // box2.style.visibility = 'visible';
  } 
  else {
    box.style.display = 'none';
    box2.style.display = 'none';
    // document.getElementById('shows').box2.style.display = 'none';
    // box2.style.visibility = 'hidden';
  }

}


// function handleRadioClick2() {
//   if (document.getElementById('shows').checked) {
//     box2.style.display = 'block';
//   } 
//   else {
//     box2.style.display = 'none';
//     box2.style.display = 'none';
//   }
// }

function handleRadioClick2() {
  if (document.getElementById('shows5').checked) {
    box3.style.display = 'block';
    
  }
   else if(document.getElementById('shows6').checked){
    box3.style.display = 'none';
    // box2.style.visibility = 'visible';
  } 
  else {
    box3.style.display = 'none';
 
    // document.getElementById('shows').box2.style.display = 'none';
    // box2.style.visibility = 'hidden';
  }

}

const radioButtons = document.querySelectorAll('input[name="example"]');
radioButtons.forEach(radio => {
  radio.addEventListener('click', handleRadioClick);
});

const radioButtons2 = document.querySelectorAll('input[name="example3"]');
radioButtons2.forEach(radio => {
  radio.addEventListener('click', handleRadioClick2);
});

// const radioButtons2 = document.querySelectorAll('input[name="example"]');
// radioButtons2.forEach(radio => {
//   radio.addEventListener('click', handleRadioClick2);
// });

$('#options').change(function(){
  if ($(this)[0].options[1].selected) {
      $("#batch2015").show();
      $("#batch2016").hide();
      $("#batch2017").hide();
      $("#batch2018").hide();
      $("#batch2019").hide();
      $("#batch2020").hide();
      $("#batch2021").hide();
      $("#batch2022").hide();
   }
  if ($(this)[0].options[2].selected) {
      $("#batch2016").show();
      $("#batch2015").hide();
      $("#batch2017").hide();
      $("#batch2018").hide();
      $("#batch2019").hide();
      $("#batch2020").hide();
      $("#batch2021").hide();
      $("#batch2022").hide();
   }
  if ($(this)[0].options[2].selected) {
      $("#batch2017").show();
      $("#batch2015").hide();
      $("#batch2016").hide();
      $("#batch2018").hide();
      $("#batch2019").hide();
      $("#batch2020").hide();
      $("#batch2021").hide();
      $("#batch2022").hide();
   }
  if ($(this)[0].options[2].selected) {
      $("#batch2018").show();
      $("#batch2015").hide();
      $("#batch2016").hide();
      $("#batch2017").hide();
      $("#batch2019").hide();
      $("#batch2020").hide();
      $("#batch2021").hide();
      $("#batch2022").hide();
   }
  if ($(this)[0].options[2].selected) {
      $("#batch2019").show();
      $("#batch2015").hide();
      $("#batch2016").hide();
      $("#batch2017").hide();
      $("#batch2018").hide();
      $("#batch2020").hide();
      $("#batch2021").hide();
      $("#batch2022").hide();
   }
  if ($(this)[0].options[2].selected) {
      $("#batch2020").show();
      $("#batch2015").hide();
      $("#batch2016").hide();
      $("#batch2017").hide();
      $("#batch2018").hide();
      $("#batch2019").hide();
      $("#batch2021").hide();
      $("#batch2022").hide();
   }
  if ($(this)[0].options[2].selected) {
      $("#batch2021").show();
      $("#batch2015").hide();
      $("#batch2016").hide();
      $("#batch2017").hide();
      $("#batch2018").hide();
      $("#batch2019").hide();
      $("#batch2020").hide();
      $("#batch2022").hide();
   }
  if ($(this)[0].options[2].selected) {
      $("#batch2022").show();
      $("#batch2015").hide();
      $("#batch2016").hide();
      $("#batch2017").hide();
      $("#batch2018").hide();
      $("#batch2019").hide();
      $("#batch2020").hide();
      $("#batch2021").hide();
   }
});
