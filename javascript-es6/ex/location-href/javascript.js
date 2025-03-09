const url = location.href;
const lastSlashPos = url.lastIndexOf('/')
const page = url.substring(lastSlashPos + 1);

console.log(page);