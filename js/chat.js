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
    if (messages.length > 1) {
        messages.shift();
    }
    chats.appendChild(li);
    document.getElementById('txt').value = ''
    let construct = "";
    if (!(messages[0] === undefined)) {
        construct += messages[0];
    }
    if (!(messages[1] === undefined)) {
        construct += "\nUser:" + messages[1];
    }
    construct += "%jk__lio%" + txtInp;
    $.ajax({
        url: "https://project-orion.mrepol853.repl.co/chat?" + construct,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        type: "GET",
        success: function (result) {
            if (/\[url=/.test(result)) {
                try {
                let qq = result.match(/\[(.*?)\]/)[1]
                let img = document.createElement('img');
                img.setAttribute('src', qq.replace("url=", ""));
                img.setAttribute('class', 'attch w-50 p-3');
                result = result.replaceAll("[" + qq + "]", "");
                chats.appendChild(img);

                } catch (err) {
                    result = result.replaceAll("[" + qq + "]", "");
                }
            }
            if (result.trim().length != 0) {
            let li1 = document.createElement('li')
            li1.setAttribute('class', 'mj')
            if (result.startsWith("\n")) {
                result = result.replace("\n", "")
            }
            li1.innerText = result;
            messages.push(txtInp);
            chats.appendChild(li1);
        }
            $('#chats').animate({
                scrollTop: $("#chats")[0].scrollHeight
            }, 'fast');
        },
        error: function (result) {
            console.log(result);
        }
    });
    if (hasChat) {
        document.getElementById('newchat').style.display = 'block';
        document.getElementById('welcome').style.display = 'none';
        hasChat = false;
    }
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