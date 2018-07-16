var resp = '';

function ajaxCall(params, method, path, obj, alerter, async, get_resp, referesh_browser, callback){
   if(referesh_browser==1) {
        window.location.reload();
   }
   
   if(method.toUpperCase() != "POST") {
       params = null;
   }
   
    $.ajax({
        url: path, 
        type: method,
        data: params,
        success: function(data){
            if(alerter==0){
                if(obj==null) {
                    return callback(data);
                } else {
                    obj.innerHTML=data;
                }
            } else {
                alert(data);
            }
        },
        error : function(error) {
            console.log(error);
        },
        dataType: "html"
    });
    
    return resp;
}

