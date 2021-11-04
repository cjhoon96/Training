let name = document.getElementById("name");
let addr = document.getElementById("addr");
let email = document.getElementById("email");
let phone = dophonecument.getElementById("phone");
let personalID = document.getElementById("personalID");
let yes = document.getElementById("yes");
let no = document.getElementById("no");
let data = [name, addr, email, phone, personalID];


function check_empty(target){
    let check = target.value;
    if (check == ""){
        return true;
    } else {
        return false;
    }
}

function last_check(){
    for(var target in data){
        if (check_empty(target)){
            alert(target.id);
            break
        }
    }
}