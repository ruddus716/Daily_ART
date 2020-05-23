$(function () {
  var selectedClass = "";
  $(".fil-cat").click(function () {
    selectedClass = $(this).attr("data-rel");
    $("#portfolio").fadeTo(100, 0.1);
    $("#portfolio div").not("." + selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function () {
      $("." + selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300);

  });
});
function post(id) {
  window.location.href = 'http://35.206.125.75/OPENSW_ART/post.html?id=' + id;
}
function data_load1() {
  $.ajax(
    {
      type: 'GET',
      url: "php/data_load1.php",
      dataType: "json",
      success: function (data, status, xhr) {
        console.log(data);
        for (var i = 0; i < data.images.length; i++) {
          var list = document.getElementById("portfolio");
          var div = document.createElement("div");
          var str = data['images'][i].substr(3);

          var color = str.split("/")[1];
          div.className = "tile scale-anm 1 " + color + " all";


          div.setAttribute("id", str);//고유값
          var t_f = str.split('/')[4];
          list.appendChild(div);

          var img = document.createElement("img");
          //img.src = data['images'];//변수 
          img.setAttribute("id", t_f);
          img.className = "content-image"
          var par = str.split("/")[3];
          img.setAttribute('onClick', "javascript:post(" + par.split(".")[0] + ")"); img.setAttribute("src", data['images'][i].substr(3));//고유값
          div.appendChild(img);
          // is_mis_img(str, t_f);
        }


      },
      error: function (jqXHR, textStatus, errorThrown) { console.log(jqXHR.responseText); }
    });



}

function data_load2() {
  $.ajax(
    {
      type: 'GET',
      url: "php/data_load2.php",
      dataType: "json",
      success: function (data, status, xhr) {
        console.log(data);
        for (var i = 0; i < data.images.length; i++) {
          var list = document.getElementById("portfolio");
          var div = document.createElement("div");
          var str = data['images'][i].substr(3);

          var color = str.split("/")[1];
          div.className = "tile scale-anm 2 " + color + " all";


          div.setAttribute("id", str);//고유값
          var t_f = str.split('/')[4];
          list.appendChild(div);

          var img = document.createElement("img");
          //img.src = data['images'];//변수 
          img.setAttribute("id", t_f);
          img.className = "content-image"
          var par = str.split("/")[3];
          img.setAttribute('onClick', "javascript:post(" + par.split(".")[0] + ")"); img.setAttribute("src", data['images'][i].substr(3));//고유값
          div.appendChild(img);
          // is_mis_img(str, t_f);
        }


      },
      error: function (jqXHR, textStatus, errorThrown) { console.log(jqXHR.responseText); }
    });
}
function data_load3() {
  $.ajax(
    {
      type: 'GET',
      url: "php/data_load3.php",
      dataType: "json",
      success: function (data, status, xhr) {
        console.log(data);
        for (var i = 0; i < data.images.length; i++) {
          var list = document.getElementById("portfolio");
          var div = document.createElement("div");


          var str = data['images'][i].substr(3);

          var color = str.split("/")[1];
          div.className = "tile scale-anm 3 " + color + " all";

          div.setAttribute("id", str);//고유값
          var t_f = str.split('/')[4];
          list.appendChild(div);

          var img = document.createElement("img");
          //img.src = data['images'];//변수 
          img.setAttribute("id", t_f);
          img.className = "content-image"
          var par = str.split("/")[3];
          img.setAttribute('onClick', "javascript:post(" + par.split(".")[0] + ")");
          img.setAttribute("src", data['images'][i].substr(3));//고유값
          div.appendChild(img);
          // is_mis_img(str, t_f);
        }


      },
      error: function (jqXHR, textStatus, errorThrown) { console.log(jqXHR.responseText); }
    });



}

function data_load4() {
  $.ajax(
    {
      type: 'GET',
      url: "php/data_load4.php",
      dataType: "json",
      success: function (data, status, xhr) {
        console.log(data);
        for (var i = 0; i < data.images.length; i++) {
          var list = document.getElementById("portfolio");
          var div = document.createElement("div");

          var str = data['images'][i].substr(3);

          var color = str.split("/")[1];
          div.className = "tile scale-anm 4 " + color + " all";
          div.setAttribute("id", str);//고유값
          var t_f = str.split('/')[4];
          list.appendChild(div);

          var img = document.createElement("img");
          //img.src = data['images'];//변수 
          img.setAttribute("id", t_f);
          img.className = "content-image"
          var par = str.split("/")[3];
          img.setAttribute('onClick', "javascript:post(" + par.split(".")[0] + ")");
          img.setAttribute("src", data['images'][i].substr(3));//고유값
          div.appendChild(img);
          // is_mis_img(str, t_f);
        }


      },
      error: function (jqXHR, textStatus, errorThrown) { console.log(jqXHR.responseText); }
    });
}
