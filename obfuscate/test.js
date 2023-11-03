const js = require("javascript-obfuscator");
const fs = require("fs");

const fileContent = fs.readFileSync("../js/main.js", "utf8");

let result = js.obfuscate(fileContent, {
    compact: true,
    numbersToExpressions: true,
    simplify: true,
    stringArrayShuffle: true,
    splitStrings: true,
    controlFlowFlattening: true,
    controlFlowFlatteningThreshold: 1,
    deadCodeInjection: true,
    deadCodeInjectionThreshold: 1,
    stringArrayThreshold: 1,
    domainLock: ["exotic-homes.github.io", "0.0.0.0:8000"],
    domainLockRedirectUrl: "https://intnext-realestate.github.io?utm_source=js_loading",
    identifierNamesGenerator: "mangled-shuffled",
    identifiersPrefix: "$",
    renameGlobals: true,
});

console.log(result.getObfuscatedCode())