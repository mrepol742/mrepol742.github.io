let isLoaded = true;
let chats = document.getElementById('chats')
let messages = [];
let hasChat = true;

//alert(69)

const changeBtnClr = () => {
    if (txt.value.trim().length == 0) {
        sendsvg.style.fill = '#757575'
        sendsvg.style.opacity = '0.7'
    } else {
        sendsvg.style.fill = '#4285f4'
        sendsvg.style.opacity = '1.0'
    }
}

txt.addEventListener('input', () => {
    changeBtnClr()
})

async function sendMsg() {
    let txtInp = document.getElementById('txt').value;

    if (txtInp.trim().length == 0) {
        return;
    }

    let li = document.createElement('li')
    li.setAttribute('class', 'me')
    li.style.animation = 'meinsert 350ms 1'
    li.innerText = txtInp;
    if (messages.length > 1) {
        messages.shift();
    }
    let li3 = document.createElement('li')
    li3.setAttribute('class', 'time1')
    li3.classList.add('flex-right')
    li3.innerText = getTime();

    chats.appendChild(li);
    chats.appendChild(li3);
    document.getElementById('txt').value = ''
    let construct = "";

    let chatBubbleLi = document.createElement('li')
    chatBubbleLi.classList.add('incoming-response')

    let chatBubbleDiv = document.createElement('div')
    chatBubbleDiv.classList.add('chat-bubble')

    let typing = document.createElement('div')
    typing.classList.add('typing')

    for (let i = 0; i < 3; i++) {
        let dot = document.createElement('dot')
        dot.classList.add('dot')
        typing.appendChild(dot)
    }
    chatBubbleDiv.appendChild(typing)
    chatBubbleLi.appendChild(chatBubbleDiv)
    chats.appendChild(chatBubbleLi)

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
                let li1 = document.createElement('li')
                li1.setAttribute('class', 'mj')
        
                li1.innerText = result 
            
                let li2 = document.createElement('li')
                li2.setAttribute('class', 'time2')
               
                let time = getTime()
                li2.innerText = 'Now';
                
                setTimeout(function() {
                    li2.innerText = time
                }, 60*1000);
                
                messages.push(txtInp);

                chats.appendChild(li1);
                chats.appendChild(li2);
                chats.removeChild(document.querySelector('.incoming-response'))
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
    changeBtnClr()
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
    if (evt.key === "Enter" && !evt.shiftKey) {
        evt.preventDefault();
        document.getElementById("send").click();
    }
});


clear.onclick = function() {
    clear();
};

let sq = decodeURI(location.search.split('msg=')[1] ? location.search.split('msg=')[1]: '');
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