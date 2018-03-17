<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Nirma university | MCA Department </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="css/device.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
   
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Custom Fonts -->
   <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
  
    <style>
     .mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
    display: block;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    /* flex-shrink: 0; */
    padding: 0px 37px;
    margin: 0;
    color: #757575;
}
        
        .atendc_list li .pic{
        
            display: inline-block;
    /* padding: 0px; */
    background: red;
    /* background: url('img/nirma_logo.png') center no-repeat; */
    background-size: 100%;
    /* border: 1px solid #efefef; */
    color: #fff;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    font-size: 20px;
    border-radius: 20px;
    margin-right: 8px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    float:left;
        text-transform: uppercase;  
        }
        .collection .collection-item {
    padding: 7px 20px;
}

         .atendc_list li .std_info{
        display:inline-block;height:35px;overflow:hidden;line-height:18px;font-size:16px;padding:2px;width:160px;float:left;white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
         }
        
        .atendc_list li .extra{
         display: inline-block;height: 35px;line-height: 35px;padding: 0px 2px;text-align: center;white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
        }
        
         .students_info_sec{
                         margin-top:55px;max-height:500px;
                        }
                        .student_info_scrl_area{
                        max-height:440px;overflow-y:auto;
                        }
                        .std_main_block_data{
                        width:290px;max-height:500px;scroll:auto;
                        }
                        
                        .std_head{
                            position:absolute;top:0;width:100%;z-index:10;padding:10px;
                        }
                        .std_head .date_sec{
                        width:118px;float:left;font-size:20px;font-weight:300;border-right:1px solid #dadada;margin-right:3px;
                        }
                        .std_head .date_sec small{font-size:12px;} 
                        
                        .class_details{display: inline-flex; margin: 0px;}
                        .class_details .cls_dtl_li{display:inline-block;text-align:center;width:47px;cursor:pointer}
        
        
    </style>
    
</head>

<body>

       <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title" style="height:40px;display:inline-block;line-height:40px;"> <span style="background:url('img/nirma_logo.png')center no-repeat;display:inline-block;height:40px;width:40px;background-size:100%;" ></span> NIRMA UNIVERSITY</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <!--<label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>-->
            <!--<div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search" />
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>-->
          </div>
          <!--<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>-->
          <!--<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>-->
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header" style="background:url('img/m1.jpg')center no-repeat;">
         <img src="img/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>
          
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Inbox</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Trash</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Spam</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forums</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Updates</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Promos</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Purchases</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Social</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
          
          
          
      </div>
           
           
           
      <main class="mdl-layout__content mdl-color--grey-100">

          <!--<div class="mdl-grid demo-content"> -->
          
        <div class="mdl-grid ">
   
            
            
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-shadow--3dp" style="background:#fff;">
              
              <!--<div class="mdl-card__title">
                 <h3 class="mdl-card__title-text">Get going on Android</h3>
              </div>-->
                
            <div class="col s12" style="">
             <!-- <div class="mdl-card__supporting-text col s3" style="width:50%;float:left;border-right:1px solid #dadada;">
                  <span style="background:url('img/csv.png')center no-repeat;height:70px;width:50px;display:inline-block;background-size:100%;"></span>
                  <ol style="display:inline-block"> 
                      <li>First row of any column should be Date only </li>
                      <li>If there are two lectures with same attendance and date </li>
                      <li>Date should be in dd/mm/yyyy format eg: 04/10/2014</li>
                      <li>Attendance of only 14 are valid</li>
                  </ol>
              </div>-->

              <div class="col l5">
                   
                   <form action="#">
      
                         <div class="row">
                            <div class="input-field col s3" style="margin-left:35px;">
                              
                                 <div class="switch">
                                <label>
                                  Absent
                                  <input name="at_type" id="at_type" value="0" onclick="toggleValue(this.value,this.id);"  type="checkbox">
                                  <span class="lever"></span>
                                  Present
                                </label>
                              </div> 
             
                                
                            </div>
                            <div class="input-field col s4" style="margin-left:35px;">
                                
                                 <div class="file-field input-field ">
                          <div class="btn">
                            <span>File</span>
                            <!--<input type="file" id="csv" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" >-->
                              <input type="file" id="csv" accept=".csv"  >
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>  
                             
                             
                             </div>
                          </div>
                        
                   </form>
                  
              </div>
            
            </div>

              
                
                
            </div>
            
            <div>
                
                
                <div id="att_display_container" class="android-card-container mdl-grid">

                
                    
                  <!--   <div  class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp std_main_block_data">
                         
                                  <div class="std_head">  
                                      <div class="date_sec">25/10/1993<br/> <small>Thursday</small> </div>
                                      <div>
                                         <ul class="class_details">
                                           <li class="cls_dtl_li"><small>Absent</small> <br/> 23<li>
                                           <li class="cls_dtl_li"><small>Present</small> <br/> 23</li>
                                           <li class="cls_dtl_li"><small>Total</small> <br/> 23</li>
                                         </ul>
                                      </div>
                                  </div>

                                 <div class="students_info_sec">
                                        <ul  class="collection atendc_list student_info_scrl_area">
                                                <li class="collection-item"> 
                                                    <span class="pic">S</span> 
                                                    <div class="std_info" >15mca057 <br/><small>Sudhir Yadav</small></div>
                                                    <div class="extra">sud</div>
                                                </li>
                                            </ul>
                                 </div>   
                        </div>-->
                    
                
                </div>
                
               
                
        
                
                
            
            </div>
            
            
         </div>
          
       
          
          
      </main>
    </div>
    
    <script>
/*        
           function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log("Name: " + profile.getName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
        */
        
        
        
    Array.prototype.clean = function(deleteValue) {
          for (var i = 0; i < this.length; i++) {
            if (this[i] == deleteValue) {         
              this.splice(i, 1);
              i--;
            }
          }
          return this;
        };
        
    function toggleValue(value1,eid){element = document.getElementById(eid);if(value1 == 0){ element.value = '1'; }else{ element.value = '0'; }}    
     
var student_info = [{id:"15mca050",name:"Sudhir Yadav",img:"",status:"0"},{id:"15mca051",name:"Sushil Yadav",img:"",status:"0"},{id:"15mca052",name:"mca1",img:"",status:"0"},{id:"15mca053",name:"mca2",img:"",status:"0"},{id:"15mca054",name:"mca3",img:"",status:"0"},{id:"15mca055",name:"mca4",img:"",status:"0"},{id:"15mca056",name:"mca5",img:"",status:"0"},{id:"15mca057",name:"mca6",img:"",status:"0"},{id:"15mca058",name:"mca7",img:"",status:"0"},{id:"15mca059",name:"mca2",img:"",status:"0"},{id:"15mca060",name:"mca2",img:"",status:"0"}];
        
    function handleFileSelect(evt) 
        {
            var file = evt.target.files; // FileList object
           
      //     console.log(file);
            
            element = document.getElementById('at_type').value;
           // console.log(element);
            
            if (file)
            {
                
              var file_nm = file[0].name;
              var file_uri = evt.srcElement.baseURI;
              var file = evt.target.files[0]; 
                
               var r = new FileReader();
               r.onload = function(e) 
                { 
                   var contents = e.target.result;
                   var allTextLines = contents.split(/\n/);
                   allTextLines.clean("");
                   var final_array = [];
                    var m = [];
                   
                  var i = 0, k = 0,j = 0;
                  var entries= new Array();
                  var temp_array = new Array();
                  var a_date,a_data;
                  // condole.log();
                  for(var i=0;i<allTextLines.length;i++){ 
                      entries[i] = allTextLines[i].split(',');
                      // console.log(entries[i]);            
                  }
                   
                  while(j < entries[0].length)
                   {
                      
                         for(var i=0;i<entries.length;i++)
                          {  // console.log(entries[i][j].length);  
                              if(i == 0)
                              {var adate = entries[i][j];}else{ temp_array.push(entries[i][j]);  }    
                          }  
                    
                       temp_array.clean("").clean("\r"); 
                       final_array[j] = {date:adate,sdata:temp_array};
                        temp_array = [];
                        j++;   
                    }
                   
                   prepareData(final_array);   
   
                }
                r.readAsText(file);
             } 
            else {  alert("Failed to load file"); }
        }
        
        function prepareData(final_array)
        {
            var prj_final_array = [];
            var temp2 = new Array();
           
           
            /*for(var i=0;i<student_info.length;i++)
              { */ 
                for(var j=0 ;j<final_array.length;j++)
                 {
                   
                  // console.log(final_array[j].sdata);
                     var adate = final_array[j].date;
                     var temparr = [];
                    for(var k=0;k<final_array[j].sdata.length;k++)
                    {
                       //  var temparr = [];
                       // console.log(k);
                             for(var i=0;i<student_info.length;i++)
                             {
                               var sb_str =student_info[i]['id'];

                               var lastThree = parseInt(sb_str.substr(sb_str.length - 3));

                               if(final_array[j].sdata[k] == lastThree)
                               { 
                                  // console.log("true-"+student_info[i]['id']);
                                  var arr= {id:student_info[i]['id'],name:student_info[i]['name'],img:student_info[i]['img'],status:1}
                                  var adate = final_array[j].date;
                                   temparr[k] = arr;
                                   break;   
                               }
                            }   
                    }
                     //console.log(temparr);
                   //  console.log("\n");
                     var temparr2 = {date:adate,record:temparr};
                      prj_final_array[j]=temparr2;
                     // prj_final_array[j].record = temparr;
                 }
            // console.log(temparr);
                     //  prj_final_array[i] = {date:adate,record:temp_array};    
              /* }*/
                   
            console.log(prj_final_array);
            
             var atd =  JSON.stringify(final_array); 
             var atd1 =  JSON.stringify(prj_final_array); 
             
            
             localStorage.setItem("attendance",atd);  
            localStorage.setItem("attendance1",atd1); 
             printAttendance();
        }
        
    
        function printAttendance()
        {
            var m = localStorage.getItem("attendance");
            var m1 = localStorage.getItem("attendance1");
            var attendc = JSON.parse(m);
            var attendc1 = JSON.parse(m1);
            var print_data = "";
            var print_data2 = "";
            var present = 0,absent = 0;
            var element = document.getElementById('at_type').value;
            var total_std = student_info.length;
            var li_temp = "";
            var li_temp2 = "";
            
            
            if(element==1){ var typ = "p"; } else{ var typ = "a"; }
            
            
            var gsDayNames = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
         //   console.log(attendc);
            
            for(var i=0;i<attendc.length;i++)
            {
                if(element==1){ present = attendc[i]['sdata'].length;absent =total_std-present;   }
                else{ absent = attendc[i]['sdata'].length;present =total_std-absent;  }
                
               /* var nData = new Date(attendc[i]['date']) ;
                var mDay = nData.getDay();
               console.log(gsDayNames[mDay]);*/
                
                for(var j = 0;j<attendc[i]['sdata'].length;j++)
                {
                   li_temp +='<li class="collection-item"><span class="pic">S</span><div class="std_info" >'+attendc[i]['sdata'][j]+'<br/><small>Sudhir Yadav</small></div><div class="extra">a</div></li>';
                   
                }
            
              print_data +='<div  class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp std_main_block_data"><div class="std_head"> <div class="date_sec">'+attendc[i]['date']+'<br/> <small></small> </div> <div><ul class="class_details"><li class="cls_dtl_li"><small>Absent</small> <br/> '+absent+'<li><li class="cls_dtl_li"><small>Present</small> <br/> '+present+'</li><li class="cls_dtl_li"><small>Total</small> <br/> '+total_std+'</li></ul></div></div><div class="students_info_sec"><ul  class="collection atendc_list student_info_scrl_area">'+li_temp+'</ul></div></div>';  
                
                li_temp = "";
            }
            
            
            
         for(var i=0;i<attendc1.length;i++)
            {
                 if(element==1){ present = attendc1[i]['record'].length;absent =total_std-present;   }
                 else{ absent = attendc1[i]['record'].length;present =total_std-absent;  }
                
   
                
                for(var j = 0;j<attendc1[i]['record'].length;j++)
                {
                   li_temp2 +='<li class="collection-item"><span class="pic">S</span><div class="std_info" >'+attendc1[i]['record'][j].id+'<br/><small>'+attendc1[i]['record'][j].name+'</small></div><div class="extra">'+typ+'</div></li>';
                   
                }
            
              print_data2 +='<div  class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp std_main_block_data"><div class="std_head"> <div class="date_sec">'+attendc1[i]['date']+'<br/> <small></small> </div> <div><ul class="class_details"><li class="cls_dtl_li"><small>Absent</small> <br/> '+absent+'<li><li class="cls_dtl_li"><small>Present</small> <br/> '+present+'</li><li class="cls_dtl_li"><small>Total</small> <br/> '+total_std+'</li></ul></div></div><div class="students_info_sec"><ul  class="collection atendc_list student_info_scrl_area">'+li_temp2+'</ul></div></div>';  
                
                li_temp2 = "";
            }
            
            
            
        //    console.log(print_data2);
            
            document.getElementById('att_display_container').innerHTML = print_data2;
            
           /*for(var i=0;i<student_info.length;i++)
            {
                var sb_str = student_info[i]['id'];
                var lastThree = sb_str.substr(sb_str.length - 3);
             
                print_data+="<li class='collection-item'><span class='pic'>"+student_info[i]['name'][0]+"</span><div class='std_info' >"+student_info[i]['id']+"<br/><small>"+student_info[i]['name']+"</small></div><div class='extra'>P</div></li>";
            }*/
           // document.getElementById('stud1').innerHTML = print_data;
            
        }

         var uploaded_csv = document.getElementById('csv');
         uploaded_csv.addEventListener('change', handleFileSelect, false);
         // uploaded_csv.addEventListener('dragover', handleFileSelect, false);
         // uploaded_csv.addEventListener('drop', handleFileSelect, false);
        
        
    </script>

    <script src="js/material.min.js"></script>

</body>

</html>
