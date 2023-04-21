var isLoaded = true;
var chats = document.getElementById('chats')
var messages = [];
var hasChat = true;

async function sendMsg() {
    var txtInp = document.getElementById('txt').value;
    
    if (txtInp.trim().length == 0) {
        return;
    }

    var li = document.createElement('li')
    li.setAttribute('class', 'me')
    li.innerText = txtInp;
    if (messages.length > 1) {
        messages.shift();
    }
    chats.appendChild(li);
    document.getElementById('txt').value = ''
    var construct = "";
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
                var qq = result.match(/\[(.*?)\]/)[1]
                var img = document.createElement('img');
                img.setAttribute('src', qq.replace("url=", ""));
                img.setAttribute('class', 'attch w-50 p-3');
                result = result.replaceAll("[" + qq + "]", "");
                chats.appendChild(img);

                } catch (err) {
                    result = result.replaceAll("[" + qq + "]", "");
                }
            }
            if (result.trim().length != 0) {
            var li1 = document.createElement('li')
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

var input =  document.getElementById('txt');
input.addEventListener("keypress", function(evt) {
    if (evt.key === "Enter" && !evt.shiftKey){
        evt.preventDefault();
        document.getElementById("send").click();
    }
});

var sq = decodeURI(location.search.split('msg=')[1] ? location.search.split('msg=')[1] : '');
if (sq != '') {
    document.getElementById('txt').innerText = sq;
    sendMsg();
}