if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js').then((reg) => {
        console.log('[ServiceWorker] Registered');
    }).catch((err) => {
        console.error('[ServiceWorker] failed: ', err)
    });
}

try {
    WebviumHashHelper
   
    let input = document.getElementById("inlineFormInput");
    let isRandom = document.getElementById("flexCheckChecked").value;
    input.addEventListener('input', () => {
        sha1.textContent = WebviumHashHelper.encodeSHA('SHA-1', input.value, isRandom);
        sha224.textContent = WebviumHashHelper.encodeSHA('SHA-224', input.value, isRandom);
        sha256.textContent = WebviumHashHelper.encodeSHA('SHA-256', input.value, isRandom);
        sha384.textContent = WebviumHashHelper.encodeSHA('SHA-384', input.value, isRandom);
    });

    let input1 = document.getElementById("inlineFormInput1");
    let isRandom1 = document.getElementById("flexCheckChecked1").value;
    input1.addEventListener('input', () => {
        md5.textContent = WebviumHashHelper.encodeMD5(input1.value, isRandom1);
    });

    let input11 = document.getElementById("inlineFormInput11");
    let isRandom11 = document.getElementById("flexCheckChecked11").value;
    input11.addEventListener('input', () => {
        xor.textContent = WebviumHashHelper.encodeMD5(input11.value, isRandom11);
    });
    

    let input111 = document.getElementById("inlineFormInput111");
    let input111n = document.getElementById("inlineFormInput111n");
    input111.addEventListener('input', () => {
        alert(WebviumHashHelper.encodeCaesar(input111.value, input111n.value) )
        caesar.textContent = WebviumHashHelper.encodeCaesar(input111.value, input111n.value);
    });

    let input111a = document.getElementById("inlineFormInput111a");
    let input111an = document.getElementById("inlineFormInput111an");
    input111a.addEventListener('input', () => {
        caesara.textContent = WebviumHashHelper.encodeCaesar(input111a.value, input111an.value);
    });

} catch (a) {
    window.location.href = "intent://user?screen_name=webvium_api_hash#Intent;scheme=webvium;S.browser_fallback_url=https%3A%2F%2Fmrepol742.github.io%2Fwebvium%3Futm_source%3Dopen-webvium-browser%26utm_medium%3Dmrepol742.github.io%2Fwebvium%2Fapi%2Fhash;end"
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), "keyboard")
    myModal.show()
}
