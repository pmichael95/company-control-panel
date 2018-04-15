
var unHide=function()
{
  //document.getElementById('querySelector').find(":selected").value;
  var sel = $('#querySelector').find(":selected").attr('value');
  
  if(sel == "getSubordinates")
  {
    $('#page-wrapper-employee').removeAttr('hidden');
  }
  else
  {
    $('#page-wrapper-employee').prop('hidden', true);
  }
}