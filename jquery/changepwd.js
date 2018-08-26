let viewLoginPwd = false;

function ChangePwdView()
{

  let getPwdView = $("#viewPwdLogin");
///document.getelementbyid("view~").
  if(viewLoginPwd === false)
  {
    getPwdView.attr("type","text");
    // set.attribute
    viewLoginPwd = true;

  }
  else if(viewLoginPwd === true)
  {

    getPwdView.attr("type","password");
    viewLoginPwd = false;
  }
}
