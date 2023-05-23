//(function () { var script = document.createElement('script'); script.src="//cdn.jsdelivr.net/npm/eruda"; document.body.appendChild(script); script.onload = function () { eruda.init() } })();

let isLoaded = true;
let chats = document.getElementById("chats");
let messages = [];
let hasChat = true;
let isPending = true;
let edttxt = document.querySelector(".edittxt");
let root = document.querySelector(":root");
let etheight = getComputedStyle(edttxt).getPropertyValue("height");
let hey = ["Sup", "Hey :D", "hey", "yup?", "yes?", "How are you?", "How you doing?", "wassup", "whats new?", "how can i help you?", "hello", "hi", "hellooooo", "hiiiiii"];
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;
var grammar = "#JSGF V1.0;";
var recognition = new SpeechRecognition();
var speechRecognitionList = new SpeechGrammarList();
var status = true;
speechRecognitionList.addFromString(grammar, 1);
recognition.grammars = speechRecognitionList;
recognition.lang = "en-US";
recognition.interimResults = false;
recognition.onresult = function (event) {
    let command = event.results[0][0].transcript;
    document.getElementById("txt").value = command;
    sendMsg();
};
recognition.onspeechend = function () {
    recognition.stop();
    var audio = new Audio("/audios/transition-base.mp3");
    audio.play();
    status = true;
};
recognition.onerror = function (event) {
    status = true;
    console.log(event.error);
    if (event.error == "no-speech") {
        notif("Please speak....")
    } else {
        notif("An error occured. Please try again later.")
    }
};

document.getElementById("txt").placeholder = hey[Math.floor(Math.random() * hey.length)];
root.style.setProperty("--et-height", etheight);

const changeBtnClr = () => {
    if (txt.value.trim().length == 0) {
        sendsvg.style.fill = "#212121";
        sendsvg.style.opacity = "0.7";
        document.getElementById("txt").placeholder = hey[Math.floor(Math.random() * hey.length)];
    } else {
        sendsvg.style.fill = "#4285f4";
        sendsvg.style.opacity = "1.0";
    }
};

function removetype() {
    let a = document.querySelector(".incoming-response");
    if (a != null) {
        chats.removeChild(a);
    }
}

async function sendMsg() {
    removetype();
    var audio = new Audio("/audios/send.wav");
    audio.play();
    let txtInp = document.getElementById("txt").value;

    if (txtInp.trim().length == 0) {
        return;
    }

    let li = document.createElement("li");
    li.setAttribute("class", "me");
    li.style.animation = "meinsert 350ms 1";
    li.innerText = txtInp;
    if (messages.length > 1) {
        messages.shift();
    }
    let li3 = document.createElement("li");
    li3.setAttribute("class", "time1");
    li3.classList.add("flex-right");
    li3.innerText = "Now";

    setTimeout(function () {
        li3.innerText = getTime();
    }, 60 * 1000);

    chats.appendChild(li);
    chats.appendChild(li3);
    document.getElementById("txt").value = "";
    let construct = "";

    let chatBubbleLi = document.createElement("li");
    chatBubbleLi.classList.add("incoming-response");

    let chatBubbleDiv = document.createElement("div");
    chatBubbleDiv.classList.add("chat-bubble");

    let typing = document.createElement("div");
    typing.classList.add("typing");

    for (let i = 0; i < 3; i++) {
        let dot = document.createElement("dot");
        dot.classList.add("dot");
        typing.appendChild(dot);
    }
    chatBubbleDiv.appendChild(typing);
    chatBubbleLi.appendChild(chatBubbleDiv);
    chats.appendChild(chatBubbleLi);

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
            "Content-Type": "application/x-www-form-urlencoded",
        },
        type: "GET",
        success: function (result) {
            if (/\[url=/.test(result)) {
                try {
                    let qq = result.match(/\[(.*?)\]/)[1];
                    let img = document.createElement("img");
                    img.setAttribute("src", qq.replace("url=", ""));
                    img.setAttribute("class", "attch w-50 p-3");
                    result = result.replaceAll("[" + qq + "]", "");
                    chats.appendChild(img);
                } catch (err) {
                    result = result.replaceAll("[" + qq + "]", "");
                }
            }
            if (result.trim().length != 0) {
                let li1 = document.createElement("li");
                li1.setAttribute("class", "mj");
                if (result.startsWith("\n")) {
                    result = result.replace("\n", "");
                }

                li1.innerText = result;

                let li2 = document.createElement("li");
                li2.setAttribute("class", "time2");

                let time = getTime();
                li2.innerText = "Now";

                setTimeout(function () {
                    li2.innerText = time;
                }, 60 * 1000);

                messages.push(txtInp);
                removetype();
                chats.appendChild(li1);
                chats.appendChild(li2);
                $("#chats").animate(
                    {
                        scrollTop: $("#chats")[0].scrollHeight,
                    },
                    "fast"
                );
            }
        },
        error: function (result) {
            console.log(result);
            notif("An error occured while parsing data from the server. Please try again later.")
        },
    });
    if (hasChat) {
        document.getElementById("welcome").style.display = "none";
        hasChat = false;
    }
    $("#chats").animate(
        {
            scrollTop: $("#chats")[0].scrollHeight,
        },
        "fast"
    );
    changeBtnClr();
}

if (isLoaded) {
    $(function () {
        $(document).click(function (event) {
            $(".navbar-collapse").collapse("hide");
        });
    });
    isLoaded = false;
}

let sq = decodeURI(location.search.split("msg=")[1] ? location.search.split("msg=")[1] : "");
if (sq != "") {
    document.getElementById("txt").innerText = sq;
    sendMsg();
}

function getTime() {
    let options = {
            hour: "numeric",
            minute: "numeric",
        },
        formatter = new Intl.DateTimeFormat([], options);
    return formatter.format(new Date());
}

function clear() {
    $("#chats").empty();
    document.getElementById("welcome").style.display = "block";
    hasChat = true;
}

send.addEventListener("click", () => {
    sendMsg();
});

voice.addEventListener("click", () => {
    if (status) {
        notif("Speak now...")
        status = false;
        recognition.start();
        var audio = new Audio("/audios/transition-base.mp3");
        audio.play();
    }
});

newchat.addEventListener("click", () => {
    clear();
    var audio = new Audio("/audios/reload.mp3");
    audio.play();
});

txt.addEventListener("keypress", function (evt) {
    if (evt.key === "Enter" && !evt.shiftKey) {
        evt.preventDefault();
        document.getElementById("send").click();
    }
});

github.addEventListener("click", () => {
    window.location.href = "https://github.com/mrepol742/mrepol742.github.io"
});

facebook.addEventListener("click", () => {
    window.location.href = "https://facebook.com/melvinjonesrepol"
});

hocgg.addEventListener("click", () => {
    window.location.href = "https://m.me/AbajwXM3ZUX07emx"
});

txt.addEventListener("input", () => {
    changeBtnClr();
    if (isPending) {
        isPending = false;
        let chatBubbleLi = document.createElement("li");
        chatBubbleLi.classList.add("incoming-response");
        chatBubbleLi.classList.add("flex-right");

        let chatBubbleDiv = document.createElement("div");
        chatBubbleDiv.classList.add("chat-bubble0");

        let typing = document.createElement("div");
        typing.classList.add("typing");

        for (let i = 0; i < 3; i++) {
            let dot = document.createElement("dot");
            dot.classList.add("dot");
            typing.appendChild(dot);
        }
        chatBubbleDiv.appendChild(typing);
        chatBubbleLi.appendChild(chatBubbleDiv);
        chats.appendChild(chatBubbleLi);
        setTimeout(function () {
            removetype();
            isPending = true;
        }, 2500);
    }
});

function notif(msg) {
    let div = document.getElementById("notif");
    let body = document.createElement("div");
    body.classList.add("toast-body");
    let p = document.createElement("p");
    p.innerText = msg;
    body.appendChild(p);
    div.appendChild(body)
    var bsN = new  bootstrap.Toast(div);
    bsN.show();
    $('#notif').on('hidden.bs.toast', function () {
        $("#notif").empty();
      })
}