let isLoaded = true;
let chats = document.getElementById('chats')
let messages = [];
let hasChat = true;

async function sendMsg() {
    let txtInp = document.getElementById('txt').value;
    
    if (txtInp.trim().length == 0) {
        return;
    }

    let li = document.createElement('li')
    li.setAttribute('class', 'me')
    li.innerText = txtInp;
    if (messages.length > 5) {
        messages.shift();
    }
    messages.push(txtInp);
    chats.appendChild(li);
    document.getElementById('txt').value = ''

    $.ajax({
        url: "https://project-orion.mrepol853.repl.co/chat?" + txtInp,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        type: "GET",
        success: function (result) {
            let li1 = document.createElement('li')
            li1.setAttribute('class', 'mj')
            if (result.startsWith("\n")) {
                result = result.replace("\n", "")
            }
            console.log(result)
            li1.innerText = result;
            chats.appendChild(li1);
        
            if (hasChat) {
                document.getElementById('newchat').style.display = 'block';
                document.getElementById('welcome').style.display = 'none';
                hasChat = false;
            }
            $('#chats').animate({
                scrollTop: $("#chats")[0].scrollHeight
            }, 'fast');
        },
        error: function (result) {
            console.log(result);
        }
    });
    $('#chats').animate({
        scrollTop: $("#chats")[0].scrollHeight
    }, 'fast');
}

if (isLoaded) {
    $(function() {
        $(document).click(function (event) {
            $('.navbar-collapse').collapse('hide');
        });
    });    
    isLoaded = false;
}

let input =  document.getElementById('txt');
input.addEventListener("keypress", function(evt) {
    if (evt.key === "Enter" && !evt.shiftKey){
        evt.preventDefault();
        document.getElementById("send").click();
    }
});