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
    var li3 = document.createElement('li')
    li3.setAttribute('class', 'time1')
    li3.innerText = getTime();
    
    chats.appendChild(li);
    chats.appendChild(li3);
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
            var li2 = document.createElement('li')
            li2.setAttribute('class', 'time2')
            li2.innerText = getTime();
            messages.push(txtInp);
            chats.appendChild(li1);
            chats.appendChild(li2);
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

txt.addEventListener("keypress", function(evt) {
    if (evt.key === "Enter" && !evt.shiftKey){
        evt.preventDefault();
        document.getElementById("send").click();
    }
});


clear.onclick = function() {  
clear();
    };  

var sq = decodeURI(location.search.split('msg=')[1] ? location.search.split('msg=')[1] : '');
if (sq != '') {
    document.getElementById('txt').innerText = sq;
    sendMsg();
}

function getTime() {
    let options = {
        hour: 'numeric',
        minute: 'numeric'
      },
    formatter = new Intl.DateTimeFormat([], options);
    return formatter.format(new Date());
}

function clear() {
    document.getElementById('welcome').style.display = 'none';
    hasChat = true;
    $('chats').empty();
}