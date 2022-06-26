if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js').then((reg) => {
        console.log('[ServiceWorker] Registered');
    }).catch((err) => {
        console.error('[ServiceWorker] failed: ', err)
    });
}

let isRandom = true;

try {
    let input = document.getElementById("inlineFormInput");
    input.addEventListener('input', sha);
    isRandom = document.getElementById("flexCheckChecked").value;


} catch (a) {

}

function sha(e) {
    sha1.textContent = WebviumHashHelper.encodeSHA('SHA-1', e, isRandom);
    sha224.textContent = WebviumHashHelper.encodeSHA('SHA-224', e, isRandom);
    sha256.textContent = WebviumHashHelper.encodeSHA('SHA-256', e, isRandom);
    sha384.textContent = WebviumHashHelper.encodeSHA('SHA-384', e, isRandom);
}