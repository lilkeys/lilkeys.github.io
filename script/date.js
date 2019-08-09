var m_names = new Array("01","02","03","04","05","06","07","08","09","10","11","12");
var d = new Date();
var twoDaysAgo = d.getDate()-3;
var curr_month = d.getMonth();
var curr_year = d.getFullYear();
var x = twoDaysAgo + "." + m_names[curr_month] + "." + curr_year;
