$(document).ready(function () {
    
    
    
    var k1 = ["public", "static", "void", "return", "abstract", "assert",
             "break", "catch", "default", "continue", "do", "else",
             "extends", "final", "finally", "for", "goto", "if",
             "implements", "native", "package", "private", "protected",
             "super", "switch", "synchronized", "this", "throw",
             "transient", "try", "volatile", "while"];
    
    var k2 = ["int", "String", "long",
              "double", "float", "char", "boolean",
              "const", "new", "short"];
    
    var k3 = ["false", "null", "true"];
    
    var re; 
    
    
//    var className = $('#code').attr('class');
    
    var c = $(".java").text(); //raw code
    
    console.log(c);

    c = c.replace(/(["'].*?["'])/g, "<span class=\"string\">$1</span>");

     c = c.replace(/\/\*[+@\w\'\s\r\n\*]*\*\//g, "<span class=\"comments\">$&</span>");
    c = c.replace(/\/\/[+@\w\s\']*/g, "<span class=\"comments\">$&</span>");
    c = c.replace(/\<![\-\-+@\s\w\>\/]*\>/g, "<span class=\"comments\">$&</span>");
    
    //reserved java keywords
    for(var i = 0; i < k1.length; i++)
    {
        //regex pattern will be formulated based on the array values surrounded by word boundaries. since the replace function
        re = new RegExp("\\b"+k1[i]+"\\b", "g");
        c = c.replace(re, "<span class=\"k1\">" + k1[i] +  "</span>");
    }
    for(var i = 0; i < k2.length; i++)
    {
        var re2;
        //regex pattern will be formulated based on the array values surrounded by word boundaries. since the replace function
        re2 = new RegExp("\\b"+k2[i]+"\\b", "g");
        c = c.replace(re2, "<span class=\"k2\">" + k2[i] +  "</span>");
    }
    
    for(var i = 0; i < k3.length; i++)
    {
        //regex pattern will be formulated based on the array values surrounded by word boundaries. since the replace function
        re = new RegExp("\\b"+k3[i]+"\\b", "g");
        c = c.replace(re, "<span class=\"k3\">" + k3[i] +  "</span>");
    }

   
    c = c.replace(/\r?\n/g, '<br />');
    c = c.replace(/\*tab\*/g, '&nbsp;&nbsp;&nbsp;&nbsp;');
    c = c.replace(/\t/g, '&#09;');
    $("#code").html(c);

    
    
});