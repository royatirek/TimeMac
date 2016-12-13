// JavaScript Document

var source   = $("#homepage").html();
var template = Handlebars.compile(source);
var html    = template({});
$("#header").html(html);

$(document).ready(function(e) 
{
	    
	    
		$(".thumb1").click(function(event)
		{
			
		    source   = $("#snap").html();
		    template = Handlebars.compile(source);
		    html    = template(data_men);
		    $("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 //console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_men.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
			   
		$(".thumb3").click(function(event)
		{
			
		    //source   = $("#snap").html();
		    //template = Handlebars.compile(source);
		    //html    = template(data_men);
		    //$("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_men.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
		});
	  
		
		
		});
		
		
		
		
		$(".thumb2").click(function(event)
		{
			
		    source   = $("#snap2").html();
		    template = Handlebars.compile(source);
		    html    = template(data_women);
		    $("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_women.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
			  
		$(".thumb4").click(function(event)
		{
			
		    //source   = $("#snap2").html();
		    //template = Handlebars.compile(source);
		    //html    = template(data_women);
		    //7$("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_women.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
		});
		
		});
		
		
		
		
		$(".b_men").click(function(event)
		{
			$(".b_men").addClass("grey");
			$(".b_women").removeClass("grey");
			 source   = $("#snap").html();
		    template = Handlebars.compile(source);
		    html    = template(data_men);
		    $("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 //console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_men.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
	    $(".thumb3").click(function(event)
		{
			
		    //source   = $("#snap").html();
		    //template = Handlebars.compile(source);
		    //html    = template(data_men);
		    //$("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_men.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
		});
	  
		});
		$(".b_women").click(function(event)
		{
			$(".b_women").addClass("grey");
			$(".b_men").removeClass("grey");
		    source   = $("#snap2").html();
		    template = Handlebars.compile(source);
		    html    = template(data_women);
		    $("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_women.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
			  
	   $(".thumb4").click(function(event)
		{
			
		    //source   = $("#snap2").html();
		    //template = Handlebars.compile(source);
		    //html    = template(data_women);
		    //7$("#header").html(html);
			//by || 0 sets default value to 0
			 var imgNum=$(this).attr('data-id') || 0;
			 source   = $("#main").html();
			 console.log("test"+imgNum);
			 template = Handlebars.compile(source);
			 html    = template(main_women.images[imgNum]);
			 $(".scontainer").html(html);
			  $("#zoom_01").elevateZoom();
		});
		});
		
		
		
    
});

